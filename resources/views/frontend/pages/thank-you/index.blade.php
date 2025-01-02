<?php 
include("../backend/connectiondb.php");
require('../stripe-php-master/init.php');
include "../includes/var.php" ;

function dd($data){
   echo "<pre>";
   print_r($data);
   die;
};

if(isset($_GET['session_id']) && isset($_GET['customer_id'])) { 
   $customerid = $_GET['customer_id'];
   $session_id = $_GET['session_id'];
   $customer_query="select t1.name,t1.email,t1.phone,
      t1.created_at,t1.Id,t2.title ,t1.updatedid,t1.ip_city,t1.ip_region,t1.ip_country
      from customer t1
      left join trademarkcountries t2 On t2.Id = t1.tmcountryId
      where t1.isActive = '1' and t1.Id = '".$customerid."'
   ";
   $batch = mysqli_query($con,$customer_query);
   if($batch->num_rows > 0){
      $customer = mysqli_fetch_assoc($batch);
   }
   \Stripe\Stripe::setApiKey($secretKey);
   $stripe = \Stripe\Checkout\Session::retrieve($session_id);
   $data = [
      'customer_id' => $customerid,
      'paymentId' => $stripe->payment_intent,
      'transaction_key' => $stripe->id,
      'name' => $customer['name'],
      'state' => $customer['ip_region'],
      'city' => $customer['ip_city'],
      'created_at' => date('Y-m-d H:i:s'),
      'currency' => $stripe->currency,
      'status' => $stripe->payment_status,
      'amount' =>$stripe->amount_total / 100,
      'amount_captured' =>$stripe->amount_total / 100
   ];
   
   $query = "insert into packagepayment (customerId, paymentId, transaction_key, name, state, city, created_at, currency, status, amount, amount_captured) 
               values('".$data['customer_id']."','".$data['paymentId']."','".$data['transaction_key']."','".$data['name']."','".$data['state']."','".$data['city']."',
               '".$data['created_at']."','".$data['currency']."','".$data['status']."', '".$data['amount']."', '".$data['amount_captured']."')";
   mysqli_query($con, $query);
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include("../includes/compatibility.php") ?>
        <title>Thank You | Trademark Nova</title>
        <meta name="description" content=""/>
        <meta name="keywords" content="" />
        <!-- Google Fonts -->
        <?php include("../includes/styles.php") ?>
        <?php include("../includes/header.php") ?>
   </head>
   <body>
      <div id="page" class="full-page">
         <main id="content" class="site-main">
           <!-- home banner section html start -->
            <section class="home-banner thankyou">
               <div class="container">
                  <div class="row justify-content-between">
                     <div class="col-lg-6 col-md-10 d-flex flex-wrap align-items-center">
<div class="banner-content">

<h2 class="banner-title" style="
    font-size: 60px;
">Congratulations! Your order has been placed successfully!</h2>
                           <div class="banner-text">
                              <p>Once our experts conduct a thorough analysis of your business and trademark, they will initiate the Trademark Registration process. As soon as this process begins, you will receive your Trademark Serial Number promptly.</p> 
                              <p>Should You Have Any Questions Or Queries, Please Feel Free To Contact Us At <span style="
    color: #ffcd15;
    font-weight: 600;
    font-size: 16px;
">sales@trademarknova.com</span></p>
                           </div>
                           <div class="banner-button">
                              <a href="mailto:sales@trademarknova.com" class="button-round">CONTACT YOUR ASSIGNED REPRESENTATIVE</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-6 d-flex flex-wrap align-items-end">
                        <!--<figure class="banner-img">
                           <img src="assets/images/banner-img1.png" alt="">
                        </figure>-->

                     </div>
                  </div>
               </div>
                <!--<div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>-->
            </section>
            <!-- home banner section html end -->

<?php include("../includes/scripts.php") ?>