<?php 
    include 'session.php';
    include 'head.php';
    include 'connection/connect.php';
    include 'connection/function.php';
    include 'setvar.php';

 ?>


<head>
  <title>Thank You!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
@import url(http://fonts.googleapis.com/css?family=Exo+2:300);
@import url(http://fonts.googleapis.com/css?family=Zeyada);
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
img{
    margin-top: 70px;
    margin-bottom: 60px;
}
.top{
    background-color: #b9e2f7;
}
.middle{
    background-color: #d4ebf7;
}

.abc{
    margin-top: 60px;
    margin-bottom: 60px;
}
</style>

<div class="container-fluid">

<div class="row top">
        <div class="col-xs-12">
            <div class="text-center">
                 <img src='img/footerlogo.jpg' />
            </div>
        </div>
    </div>
    <div class="row middle">
        <div class="col-xs-12 ">
            <div class="text-center">
                 <h1 class="display-3">Thank You!</h1>
             <p class="lead">For shopping with <strong>Bronte Online Portal</strong>. We look forward to serve you again!</p>
            <hr>
            
            <p class="lead">
            <a class="btn btn-primary btn-sm" href="emptycart.php" role="button">Continue to homepage</a>
            </p>
            </div>
        </div>
    </div>

    <?php 

    date_default_timezone_set('Asia/Kathmandu');
    $current_date = date('Y/m/d');                      // ORDER DATE
    $date_details = date('Ymdhis');
    $order_id = $date_details.$user_id;                 // ORDER ID

    if(isset($_GET['total'])){
        $final_total = $_GET['total'];
    }else{
        echo "<script>location='index.php';</script>";
    }


    $insert_order = "INSERT INTO ORDERS(ORDERID, TOTALPRICE, PAYMENTDATE, USERID) VALUES('$order_id', '$final_total',                         to_date('".$current_date."','yy-mm-dd'), '$user_id')";

    input_query($insert_order);




 ?>

    <div class="row middle">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order ID: <?php echo $order_id; ?></strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $order_display = "SELECT PRODUCT.PRODUCTID, PRODUCT.PRODUCTNAME, PRODUCT.PRICERATE, CART.QUANTITY, SHOP.TRADERID FROM CART, PRODUCT, SHOP WHERE CART.USERID='$user_id' AND PRODUCT.PRODUCTID = CART.PRODUCTID AND SHOP.SHOPID = PRODUCT.SHOPID";

                                $order_display_run = output_query($order_display);
                                

                                while($row=oci_fetch_assoc($order_display_run)){
                                    $quantity = $row['QUANTITY'];                   // QUANTITY
                                    $productid = $row['PRODUCTID'];                 // PRODUCTID
                                    $productname = $row['PRODUCTNAME'];             // PRODUCTNAME
                                    $productprice = $row['PRICERATE'];
                                    $trader_id = $row['TRADERID'];


                                    $customer_invoice = "INSERT INTO CUSTOMER_INVOICE(CUSTOMER_INVOICE_ID, PRODUCTID, PRODUCTNAME, QUANTITY, PRICERATE, USERID, ORDERID) VALUES(SEQCUSTOMERINVOICEID.nextval, '$productid', '$productname', '$quantity', '$productprice', '$user_id', '$order_id')";

                                    input_query($customer_invoice);

                                    $earnings = $productprice*$quantity;

                                    $trader_invoice = "INSERT INTO TRADER_INVOICE(TRADER_INVOICE_ID, PRODUCTID, PRODUCTNAME, QUANTITY, PRICERATE, EARNINGS, TRADERID, ORDERID) VALUES(SEQTRADERINVOICEID.nextval, '$productid', '$productname', '$quantity', '$productprice', '$earnings', '$trader_id', '$order_id')";

                                    input_query($trader_invoice);

                            ?>
                                <tr>
                                    <td><?php echo $productname; ?></td>
                                    <td class="text-center"><?php echo $productprice; ?></td>
                                    <td class="text-center"><?php echo $quantity; ?></td>
                                    <td class="text-right"><?php echo $productprice*$quantity; ?></td>
                                </tr>
                            <?php } ?>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-right">$<?php echo $final_total; ?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Collection Slot and Time</strong></td>
                                    <td class="emptyrow text-right"><?php echo '<strong>'.$_SESSION['day'].'</strong> => <strong>'.$_SESSION['time'].'</strong>'; ?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right">$<?php echo $final_total; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row top">
                  
           <div class="col-xs-12 abc">
           <div class="text-center">
                <a class="btn btn-social-icon btn-twitter">
    <span class="fa fa-twitter"></span>
  </a>
  <a class="btn btn-social-icon btn-facebook">
    <span class="fa fa-facebook"></span>
  </a>
  <a class="btn btn-social-icon btn-google">
    <span class="fa fa-google"></span>
  </a>
  <a class="btn btn-social-icon btn-instagram">
    <span class="fa fa-instagram"></span>
  </a>
  </div>

           </div>         



                </div>          
                </div>
</div>

