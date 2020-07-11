<?php

$uploads = "uploads";

//Helper Functions 
function set_message($msg){
if(!empty($msg)){
  $_SESSION['message']= $msg;

}
else {
$msg = "";
}
}
function display_message(){
  if(isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']  );
  }
}


function redirect($location) {
  header("Location: $location");
}
function query($sql){
  global $connection;
  return mysqli_query($connection, $sql);
}

function confirm($result){
  global $connection;
if(!$result){
  die("QUERY FAILED" . mysqli_error($connection));

}

}

function escape_string ($string){
  global $connection;
  return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {
  return mysqli_fetch_array($result);

}

//Get Products
function get_product() {

  $query = query("SELECT * FROM products");
  confirm($query);

$rows = mysqli_num_rows($query);
 if(isset($_GET['page'])){
   $page = preg_replace('#[^0-9]#', '', $_GET['page']);
 } else {
   $page = 1;
 }
 $perPage = 9;
 $lastPage = ceil($rows / $perPage);

 if($page<1){
   $page = 1;
 } elseif($page > $lastPage){
   $page = $lastPage;
 }
 /*********Middle numbers pagination *******/
 $middleNumbers = '';
 $subs = $page - 1;
 $subs2 = $page - 2;
 $add1 = $page + 1;
 $add2 = $page +2;
if($page == 1){


  $middleNumbers .= '<li class="page-item active"><a>'.$page. '</a></li>';


  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">'.$add1. '</a></li>';
}elseif ($page == $lastPage) {

  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subs.'">'.$subs. '</a></li>';

  $middleNumbers .= '<li class="page-item active"><a>'.$page. '</a></li>';

}elseif ($page > 2 && $page < ($lastPage -1)) {
  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subs2.'">'.$subs2. '</a></li>';
  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subs.'">'.$subs. '</a></li>';
  $middleNumbers .= '<li class="page-item active"><a>'.$page. '</a></li>';
  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">'.$add1. '</a></li>';
  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">'.$add2. '</a></li>';


}elseif($page > 1 && $page < $lastPage){
  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subs.'">'.$subs. '</a></li>';
  $middleNumbers .= '<li class="page-item active"><a>'.$page. '</a></li>';
  $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">'.$add1. '</a></li>';

}

$limit = 'LIMIT '. ($page-1) * $perPage . ',' . $perPage;

$query2 = query("SELECT * FROM products $limit");
confirm($query2);

$output = "";
if($page != 1){
$prev = $page -1;
$output .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'"> Back </a></li>';
}
$output .= $middleNumbers;

if($page != $lastPage){

  $next = $page + 1;
  $output .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'"> Next </a></li>';

}



  while ($row = fetch_array($query2)) {
    $product_image = display_image($row['Product_image']);

    $product = <<<DELIMETER
    <div class="col-sm-4 col-lg-4 col-md-4 ">
                        <div class="thumbnail prodxo">
                            <a href="item.php?id={$row['Product_id']}"><img src="../resources/{$product_image}" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">&pound;{$row['Product_price']}</h4>
                                <h4><a href="item.php?id={$row['Product_id']}">{$row['Product_title']}</a>
                                </h4>
                                <p class="descxo">{$row['short_desc']}</p>
                            </div>
                            <a href="cart.php?add={$row['Product_id']}" class="btn btn-primary">Add to Book Bag</a>
                          </div>
                    </div>           
    DELIMETER;
    echo $product;
  }
echo "<div class='text-center'><ul class='pagination'>$output</ul></div>";

}
function get_categories(){
  $query =query("SELECT * FROM Categories");
                confirm($query);
                while($row = mysqli_fetch_array($query)) {
                  $categories_links = <<<DELIMETER
                  <a href='category.php?id={$row['Cat_id']}' class='list-group-item linksxo'>{$row['Cat_Title']}</a>
                  DELIMETER;
                echo $categories_links;
                           
                }
}

function get_product_in_cat_page() {

  $query = query(" SELECT * FROM products WHERE Product_category_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while ($row = fetch_array($query)) {
    $product_image = display_image($row['Product_image']);

    $product = <<<DELIMETER
    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail prodxo">
                            <a href="item.php?id={$row['Product_id']}"><img src="../resources/{$product_image}" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">&pound;{$row['Product_price']}</h4>
                                <h4><a href="item.php?id={$row['Product_id']}">{$row['Product_title']}</a>
                                </h4>
                                <p class="descxo">{$row['short_desc']}</p>
                            </div>
                            <a href="item.php" class="btn btn-primary">Buy Now</a>
                          </div>
                    </div>           
    DELIMETER;
    echo $product;
  }
}

function login_user(){
if(isset($_POST['submit'])){
 $username = escape_string($_POST['username']);
 $password = escape_string($_POST['password']);

 $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
confirm($query);
if(mysqli_num_rows($query) == 0) {
  
  set_message("Your Email or Password are incorrect");
  redirect("login.php");
}
else {
  $_SESSION['username'] = $username;
redirect("admin");

}
}

}

function sell_book() {
  if(isset($_POST['submit'])){

$to     =                "papertownapp5@gmail.com";
$name   =                $_POST['name'];
$Sellermail  =           $_POST['email'];
$Phone  =                $_POST['phone'];
$bookName  =             $_POST['bookSold'];
$goodreadsLink  =        $_POST['link'];
$condition  =            $_POST['Condition'];
$comments  =             $_POST['Comments'];

$emailBody = 
              "Hello, my name is $name.
             Email : $Sellermail. Phone number: $Phone. 
             Selling $bookName.
             with goodreads link :$goodreadsLink.
             the condition of the book: $condition.
             any comments: $comments.";

$headers = "From:{$name} /n {$Sellermail} /n {$Phone}";


$result = mail($to, $bookName, $emailBody, $headers);
if (!$result) {
  redirect("sellBook.php");
  set_message("Sorry an error has accured");

} else {
  redirect("sellBook.php");
  set_message("Your book has been submited we will contact you shortly");

}







}
}





function Request_book() {
  if(isset($_POST['submit'])){

$to     =                "papertownapp5@gmail.com";
$name   =                $_POST['name'];
$Sellermail  =           $_POST['email'];
$Phone  =                $_POST['phone'];
$bookName  =             $_POST['bookWanted'];
$goodreadsLink  =        $_POST['link'];
$comments  =             $_POST['Comments'];

$emailBody = 
            "Hello,
             my name is $name.
             Email : $Sellermail. Phone number: $Phone. Requesting the book $bookName. 
             with goodreads link :$goodreadsLink.
             any comments: $comments.";

$headers = "From:{$name} /n {$Sellermail} /n {$Phone}";


$result = mail($to, $bookName, $emailBody, $headers);
if (!$result) {
  redirect("Request.php");
  set_message("Sorry an error has accured");

} else {
  redirect("Request.php");
  set_message("Your request has been submited we will contact you shortly");

}
  }}

  function Rep_book() {
    if(isset($_POST['submit'])){
  
  $to     =                "papertownapp5@gmail.com";
  $name   =                $_POST['name'];
  $Sellermail  =           $_POST['email'];
  $Phone  =                $_POST['phone'];
  $bookName  =             $_POST['bookToBeRepaired'];
  $comments  =             $_POST['Comments'];
  
  $emailBody = 
              "Hello,
               my name is $name.
               Email : $Sellermail.
               Phone number: $Phone.
               wanting to repair the book $bookName.
               Damage to the book: $comments.";
  
  $headers = "From:{$name} /n {$Sellermail} /n {$Phone}";
  
  
  $result = mail($to, $bookName, $emailBody, $headers);
  if (!$result) {
    redirect("repair.php");
    set_message("Sorry an error has accured");
  
  } else {
    redirect("repair.php");
    set_message("Your request has been submited we will contact you shortly");
  
  }
    }}


// backend functions

function display_orders(){

  $query = query("SELECT * FROM orders");
  confirm($query);

  While($row = fetch_array($query)){
    $orders = <<<DELIMETER

    <tr>
    <td>{$row['cust_name']}</td>
    <td>{$row['cust_email']}</td>
    <td>{$row['cust_phone']}</td>
    <td>{$row['cust_address']}</td>
    <td>{$row['order_id']}</td>
    <td>{$row['product']}</td>
    <td>{$row['quantity']}</td>
    <td>{$row['order_total']}</td>
</tr>

DELIMETER;
echo $orders;
  }
}

/*************************** Admin products **********************/

function display_image($pic){
  global $uploads;

return $uploads . DS . $pic;
}







function get_products_in_admins(){

    $query = query("SELECT * FROM products");
    confirm($query);
  
    while ($row = fetch_array($query)) {
     $cat = show_prod_cat($row['Product_category_id']); 
      
    $product_image = display_image($row['Product_image']);
      $product = <<<DELIMETER
      <tr>
            <td>{$row['Product_id']}</td>
            <td>{$row['Product_title']}<br>
              <a href="index.php?edit_product&id={$row['Product_id']}"><img src="../../resources/$product_image" class="prod_img" alt=""></a>
            </td>
            <td>{$cat}</td>
            <td>{$row['product_quantity']}</td>
            <td>{$row['Product_price']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['Product_id']}"><span class="glyphicon glyphicon-remove"></span></a>                                  </td>
        </tr>          
      DELIMETER;
      echo $product;
    }
}

function show_prod_cat($Product_category_id){
$cat_query = query("SELECT * FROM categories WHERE Cat_id = '{$Product_category_id}'");
confirm($cat_query);
while($category_row = fetch_array($cat_query)){
  return $category_row['Cat_Title'];
}


}

/*********************************Adding products ****************************/
function add_product(){
  if(isset($_POST['publish'])){
  $Product_title                = escape_string($_POST['Product_title']);
  $Product_category_id         = escape_string($_POST['Product_category_id']);
  $Product_price                = escape_string($_POST['Product_price']);
  $product_quantity             = escape_string($_POST['product_quantity']);
  $Product_description          = escape_string($_POST['Product_description']);
  $Product_image                = escape_string($_FILES['file'] ['name']);
  $image_temp_location          = escape_string($_FILES['file'] ['tmp_name']);
  $short_desc                   = escape_string($_POST['short_desc']);

  copy($image_temp_location, UPLOAD_DIRECTORY . DS . $Product_image);    

  $query = query("INSERT INTO products(Product_title, Product_category_id, Product_price, product_quantity, Product_description, short_desc, Product_image) VALUES('{$Product_title}', '{$Product_category_id}', '{$Product_price}', '{$product_quantity}', '{$Product_description}', '{$short_desc}', '{$Product_image}')");
  confirm($query);
  set_message("Product Added!");
  redirect("index.php?products");

  }
}


function show_cats(){
  $query =query("SELECT * FROM Categories");
                confirm($query);
                while($row = mysqli_fetch_array($query)) {
                  $categories_options = <<<DELIMETER
                  <option value="{$row[Cat_id]}">{$row[Cat_Title]}</option>
                  DELIMETER;
                echo $categories_options;
                           
                }
}
/*****************************Update product ******************/

function edit_product(){
  if(isset($_POST['update'])){
  $Product_title                = escape_string($_POST['Product_title']);
  $Product_category_id         = escape_string($_POST['Product_category_id']);
  $Product_price                = escape_string($_POST['Product_price']);
  $product_quantity             = escape_string($_POST['product_quantity']);
  $Product_description          = escape_string($_POST['Product_description']);
  $Product_image                = escape_string($_FILES['file'] ['name']);
  $image_temp_location          = escape_string($_FILES['file'] ['tmp_name']);
  $short_desc                   = escape_string($_POST['short_desc']);


  if(empty($Product_image)){
    $get_pic = query("SELECT Product_image FROM products WHERE Product_id=" . escape_string($_GET['id']) . " ");
    confirm($get_pic);
    while($pic = fetch_array($get_pic)){
      $Product_image = $pic['Product_image'];
    }
   }

  copy($image_temp_location, UPLOAD_DIRECTORY . DS . $Product_image);    

  $query = "UPDATE products SET ";
  $query .= "Product_title = '{$Product_title}', ";
  $query .= "Product_category_id = '{$Product_category_id}', ";
  $query .= "Product_price = '{$Product_price}', ";
  $query .= "product_quantity  = '{$product_quantity}', ";
  $query .= "Product_description  = '{$Product_description}', ";
  $query .= "Product_image = '{$Product_image}', ";
  $query .= "short_desc = '{$short_desc}' ";
  $query .= "WHERE Product_id=" . escape_string($_GET['id']);

  $update_query = query($query);
  confirm($update_query);
  set_message("Product has been updated!");
  redirect("index.php?products");

  }
}


/***********************Admin Cats *********************/
function show_cato() {
  $query = "SELECT * FROM categories";
  $cat_query = query($query);
  confirm($query);


  while($row = fetch_array($cat_query)) {

    $cat_id = $row['Cat_id'];
    $cat_title = $row['Cat_Title'];

    $cats = <<<DELIMETER
    <tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_cat.php?id={$row['Cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
    DELIMETER;
    echo $cats;

  }
}

function add_cat(){
if(isset($_POST['add_cat'])){
  $cat_title = escape_string($_POST['cat_title']);
  $query = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}')");
  confirm($query);
  redirect("index.php?categories");
}
}

/************Admin Users ************/

function show_users() {
  $query = "SELECT * FROM users";
  $cat_query = query($query);
  confirm($query);


  while($row = fetch_array($cat_query)) {

    $user_id = $row['user_id'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];

    $user = <<<DELIMETER
    <tr>
    <td>{$user_id}</td>
    <td>{$username}</td>
    <td>{$email}</td>
    
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
    DELIMETER;
    echo $user;

  }
}

function add_user(){
  if(isset($_POST['add_user'])){

$username = escape_string($_POST['username']);
$email = escape_string($_POST['email']);
$password = escape_string($_POST['password']);
$query = query("INSERT INTO users(username, email, password) VALUES('{$username}', '{$email}', '{$password}')");
confirm($query);
set_message("User created!");
redirect("index.php?users");

  }
}



//display new orders in index//
function newOrders(){

  $query = query("SELECT * FROM orders LIMIT 10");
  confirm($query);

  While($row = fetch_array($query)){
    $newOrders = <<<DELIMETER

    <tr>
    <td>{$row['order_id']}</td>
    <td>{$row['cust_name']}</td>
    <td>{$row['order_total']}</td>
</tr>

DELIMETER;
echo $newOrders;
  }
}


function newOrders2(){

  $query = query("SELECT * FROM orders LIMIT 10, 10");
  confirm($query);

  While($row = fetch_array($query)){
    $newOrders2 = <<<DELIMETER

    <tr>
    <td>{$row['order_id']}</td>
    <td>{$row['cust_name']}</td>
    <td>{$row['order_total']}</td>
</tr>

DELIMETER;
echo $newOrders2;
  }
}
function add_cust(){
  if(isset($_POST['submit'])){
$username = escape_string($_POST['username']);
$email = escape_string($_POST['email']);
$password = escape_string($_POST['password']);
$query = query("INSERT INTO customeraccount(username, email, password) VALUES('{$username}', '{$email}', '{$password}')");
confirm($query);
set_message("User created!");
redirect("register.php");
}
}

function login_cust(){
    if(isset($_POST['submit'])){
     $username = escape_string($_POST['username']);
     $password = escape_string($_POST['password']);
     $email = query($query1 = query("SELECT email FROM customeraccount WHERE username = '{$username}' AND password = '{$password}'"));

     $query = query("SELECT * FROM customeraccount WHERE username = '{$username}' AND password = '{$password}'");
    confirm($query);
    if(mysqli_num_rows($query) == 0) {
      
      set_message("Your Username or Password are incorrect");
      redirect("login.php");
    }
    else {
      $_SESSION['username'] = $username;
    redirect("index.php");
    
    }
    }
    
    }
    
$query = query("SELECT Product_id FROM products order by Product_id DESC LIMIT 1");
$result = mysqli_fetch_assoc($query);
$resultstring = $result['Product_id'];

$query2 = query("SELECT Product_id FROM products order by Product_id ASC LIMIT 1");
$result2 = mysqli_fetch_assoc($query2);
$resultstring2 = $result2['Product_id'];

    $random = rand($resultstring2, $resultstring);


?>