<?php  require_once("../resources/config.php");    ?>
<?php include(TEMPLATE_FRONT . DS . "HEADERAr.PHP") ?>
    <!-- Page Content -->
<div class="container">

       <!-- Side Navigation -->

       <?php include(TEMPLATE_FRONT . DS . "Side_NavAr.PHP") ?>


<?php



$query = query("SELECT * FROM products WHERE Product_id =" . escape_string($_GET['id']) . "");
confirm($query);

while ($row = fetch_array($query)):
  

    $product_image = display_image($row['Product_image']);


?>

<div class="col-md-9">

<!--Row For Image and Short Description-->

<div class="row">

    <div class="col-md-7">
       <img class="img-responsive" src="<?php echo "../resources/{$product_image}"?>" alt="">

    </div>

    <div class="col-md-5 itemxo">

        <div class="thumbnail itemxo">
         

    <div class="caption-full itemxo">
        <h4><a href="#"><?php echo $row['Product_title']; ?></a> </h4>
        <hr>
        <h4 class=""><?php echo "&#163;" . $row['Product_price']; ?></h4>


          
    <?php echo  $row['short_desc']; ?>


   
    <form action="">
        <div class="form-group">
        <a href="cart.php?add=<?php echo $row['Product_id']; ?>" class="btn btn-primary">اضف الى سلة الكتب</a>        </div>
    </form>

    </div>
 
</div>

</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p></p>
           
<p> <?php echo  $row['Product_description']; ?> </p>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">





 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div>
<?php endwhile;  ?>
</div>
<?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>