<?php  require_once("../resources/config.php");    ?>
<?php include(TEMPLATE_FRONT . DS . "HEADER.PHP") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <h2 class="text-center bg-warning"><?php display_message();  ?></h2>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
            <?php login_cust();   ?>
                <div class="form-group"><label for="">
                    Username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control"></label>
                </div>
                <div class="etc-login-form">
				<p>new user? <a href="register.php">create new account</a></p>
			</div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>

            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->
    <?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>

