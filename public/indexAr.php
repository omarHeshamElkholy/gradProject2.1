<?php  require_once("../resources/config.php");    ?>
<?php include(TEMPLATE_FRONT . DS . "HEADERAR.PHP") ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <?php include(TEMPLATE_FRONT . DS . "Side_NavAr.PHP") ?>



            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                    <?php include(TEMPLATE_FRONT . DS . "Slider.PHP") ?>

                    </div>

                </div>

                <div class="row">
                <?php  get_productAr()  ?>
                             
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>
