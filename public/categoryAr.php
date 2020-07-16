<?php  require_once("../resources/config.php");    ?>
<?php include(TEMPLATE_FRONT . DS . "HEADERAr.PHP") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <div class="jumbotron hero-spacer jumboxo">
            <h1 class="hob"><?php
$cat_query = query("SELECT * FROM categories WHERE Cat_id = '{$_GET['id']}'");
while($category_row = fetch_array($cat_query)){
    echo $category_row['Cat_TitleAr'];
  }            ?></h1>
  
           
</div>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>اخر المعروضات</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">


    <?php  get_product_in_cat_pageAr();  ?>
        <!-- /.row -->

        <hr>

        <?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>

