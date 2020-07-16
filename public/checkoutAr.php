<?php  require_once("../resources/config.php");    ?>
<?php  require_once("cartAr.php");?>

<?php include(TEMPLATE_FRONT . DS . "HEADERAr.PHP") ?>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
<h4 class="text-center"> <?php display_message();  ?> </h4>
      <h1>الدفع</h1>

 <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="merchant@papertown.com">
  <input type="hidden" name="upload" value="1">
  <input type="hidden" name="currency_code" value="USD">


    <table class="table table-striped">
        <thead>
          <tr>
           <th>المنتج</th>
           <th>السعر</th>
           <th>الكمية</th>
           <th>مبلغ إجمالي</th>
          </tr>
        </thead>
        <tbody>
        <?php
        cart(); 
        ?>
        </tbody>
    </table>




<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>اجمالي الحساب</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>عدد المنتجات</th>
<td><span class="amount">
<?php  
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";
?>
</span></td>
</tr>
<tr class="shipping">
<th>الشحن</th>
<td>الشحن مجانا</td>
</tr>

<tr class="order-total">
<th>اجمالي الطلب</th>
<td><strong><span class="amount">&#163;
<?php  
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
?>


</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->
<h2> Paypal ادفع عبر</h2>
<input type="image" name="upload"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
</form>
<!-- payment on delivery -->
<form class="form-horizontal" action="thankyouAr.php">
<div class="invisible">

<table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
          </tr>
        </thead>
        <tbody>
        <?php
        cart(); 
        ?>
        </tbody>
    </table>




<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount">
<?php  
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";
?>
</span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#163;
<?php  
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
?>


</span></strong> </td>
</tr>


</tbody>

</table>
</div> </div>
<h3 style="text-align: right;">او ادفع عند الاستلام</h3>
<h3 style="text-align: right;">معلومات التوصيل</h3>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
  <label for="fname">الاسم الكامل</label><br>
  <input class="form-control" type="text" id="fname" name="name" required><br>
  <label for="email">البريد الالكتروني</label><br>
  <input class="form-control" type="text" id="mail" name="mail" required>
</br>
<label for="Phone Number">رقم الهاتف</label><br>
  <input class="form-control" type="text" id="phone" name="phone" required>
</br>
  <label for="Address">العنوان</label><br>
  <input class="form-control" type="text" id="address" name="address" required>
 </br>
 <input type="hidden" id="total" name="total" value="<?php  
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
?>" readonly>
<input type="submit" value="الدفع عند الاستلام" class="btn btn-success form-control">
</form>

 </div><!--Main Content-->


           <hr>
           <?php include(TEMPLATE_FRONT . DS . "FOOTER.PHP") ?>
