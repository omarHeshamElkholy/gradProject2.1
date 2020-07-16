<?php  require_once("../resources/config.php");    ?>
<?php include(TEMPLATE_FRONT . DS . "HEADERAr.PHP") ?>

    <!-- Page Content -->
    <div class="container">
  
        <!-- Jumbotron Header -->
        <header>
<h1 style="text-align: right;" class="booksxo"> جميع كتبنا</h1>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">


    <?php  get_product();  ?>
        <!-- /.row -->

        <hr>

        <?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>

