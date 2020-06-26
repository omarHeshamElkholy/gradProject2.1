<?php


if(isset($_GET['id'])){

  $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

while($row = fetch_array($query)){
  $Product_title                = escape_string($row['Product_title']);
  $Product_category_id         = escape_string($row['Product_category_id']);
  $Product_price                = escape_string($row['Product_price']);
  $product_quantity             = escape_string($row['product_quantity']);
  $Product_description          = escape_string($row['Product_description']);
  $Product_image                = escape_string($row['Product_image']);
  $short_desc                   = escape_string($row['short_desc']);

  $product_image = display_image($row['Product_image']);

}
edit_product();

}


?>

        <div id="page-wrapper">

<div class="container-fluid">






<div class="col-md-12">

<div class="row">
<h1 class="page-header">
Edit Product 

</h1>
</div>
   


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
<label for="product-title">Product Title </label>
<input type="text" name="Product_title" class="form-control" value="<?php echo  $Product_title ?>">

</div>


<div class="form-group">
<label for="product-title">Product Description</label>
<textarea name="Product_description" id="" cols="30" rows="10" class="form-control"><?php echo $Product_description; ?></textarea>
</div>
<div class="form-group">
<label for="product-title">Short Description</label>
<textarea name="short_desc" id="" cols="20" rows="5" class="form-control"> <?php echo $short_desc; ?></textarea>
</div>



<div class="form-group row">

<div class="col-xs-3">
<label for="Product-price">Product Price</label>
<input type="number" name="Product_price" class="form-control" size="60" value="<?php echo $Product_price; ?>">
</div>
</div>







</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">


<div class="form-group">
<input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
<input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
</div>


<!-- Product Categories-->

<div class="form-group">
<label for="Product_category_id">Product Category</label>
<select name="Product_category_id" id="" class="form-control"> 
<option value="<?php echo $Product_category_id; ?>"><?php echo show_prod_cat($Product_category_id); ?></option>
<?php show_cats(); ?>           
</select>


</div>





<!-- Product Quantity-->


<div class="form-group">
<label for="product_quantity">Product quantity</label>
<input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
</div>


<!-- Product Image -->
<div class="form-group">
<label for="product-title">Product Image</label>
<input type="file" name="file"> <br>
<img width= 200; src="../../resources/<?php echo $product_image;  ?>" alt="">

</div>



</aside><!--SIDEBAR-->



</form>



    



