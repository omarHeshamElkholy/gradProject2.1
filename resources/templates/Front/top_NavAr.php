<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="logo"><a href="indexAr.php"><img class="img-responsive logo" src="logo.png" alt=""></a></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav itemsxo">
                    <li>    
                        <a href="shopAr.php">التسوق</a>
                    </li>
                    <li>
                    <a href="itemAr.php?id=<?php echo $random ?>">اقترح لي كتاب</a>
                    </li>
                    <li>
                    <a href="RequestAr.php">اطلب كتاب</a>
                    </li>
                    <li>
                        <a href="sellBookAr.php">بيع كتابك</a>
                    </li>
                    <li>
                        <a href="repairAr.php">اصلح كتابك</a>
                    </li>
                    <li class="shop_cart">
                        <a href="checkoutAr.php"><img class="shop_cart" src="https://pluspng.com/img-png/shop-png-black-and-white-logo-512.png" alt=""></a>
                    </li>


                </ul>
                <ul class="nav navbar-right top-nav">
              <li class="dropdown">
<?php

if(!isset($_SESSION['username'])) {
    echo "<li>
    <a href='loginuserAr.php'>تسجيل الدخول</a>
    <a href='index.php'>English</a>

</li>
";
    }
if(isset($_SESSION['username'])) {
include ("loginheaderAr.php");
}

?>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> تسجيل الخروج</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->