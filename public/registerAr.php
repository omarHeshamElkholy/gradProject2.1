<?php  require_once("../resources/config.php");    ?>
<?php include(TEMPLATE_FRONT . DS . "HEADERAr.PHP") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">عمل حساب جديد</h1>
            <h2 class="text-center bg-warning"><?php display_message();  ?></h2>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
            <?php add_custAr(); ?>
                <div class="form-group"><label for="">
                    اسم المستخدم<input type="text" name="username" class="form-control" required></label>
                </div>
                <div class="form-group"><label for="">
                    البريد الالكتروني<input type="email" name="email" class="form-control" required></label>
                </div>
                 <div class="form-group"><label for="password">
                    كلمة السر<input type="password" name="password" class="form-control" required></label>
                </div>
                <div class="form-group login-group-checkbox">
						<input type="checkbox" id="terms" name="terms" required>
						<label for="terms">أوافق على جميع الشروط والأحكام</label>
					</div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" value='اعمل حساب' >
                </div>

            </form>
        </div>  


    </header>


        </div>

    </div>

    <!-- /.container -->
    <?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>

