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
            <div class="logo"><a href="index.php"><img class="img-responsive logo" src="logo.png" alt=""></a></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav itemsxo">
                    <li>    
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                    <a href="item.php?id=<?php echo $random ?>">Suggest me a book</a>
                    </li>
                    <li>
                    <a href="Request.php">Request A Book</a>
                    </li>
                    <li>
                        <a href="sellBook.php">Sell Your Book</a>
                    </li>
                    <li>
                        <a href="repair.php">Reparing books</a>
                    </li>
                    <li class="shop_cart">
                        <a href="checkout.php"><img class="shop_cart" src="https://pluspng.com/img-png/shop-png-black-and-white-logo-512.png" alt=""></a>
                    </li>


                </ul>
                <ul class="nav navbar-right top-nav">
              <li class="dropdown">
<?php

if(!isset($_SESSION['username'])) {
    echo "<li>
    <a href='loginuser.php'>Login</a>
</li>
";
    }
if(isset($_SESSION['username'])) {
include ("loginheader.php");
}

?>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->