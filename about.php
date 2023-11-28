<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/homestyle.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">


 <img src="images/moto.png" alt="">

   <div class="row">

      <div class="box">
         <h3> Our pets</h3>
         <p>our prts directly imported from USA and some have been made by the local fresh pet dealers around srilanka. If you have any incuries u can send us a message by clicking below button</p>
         <a href="contact.php" class="btn">contact us</a>
        

      </div>

      <div class="box">
         <h3>what we provide?</h3>
         <p>We have created Star fish paradise to give your favourite pets to your door step by clicking bleow button</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>
   <div class="about-infor">
          <div class="services">
          <img src="images/homeDeli.gif" alt="">
          <p>Home Delivery</p>
          <h2>We provide Home Delivery Near Batticaloa. And hoping to serve the whole country in the future.</h2>
          </div>
          <div class="services">
          <img src="https://www.pngplay.com/wp-content/uploads/7/Debit-Card-PNG-Clipart-Background.png" alt="">
          <p>Card payment available</p>
          <h2>you can use your card to pay amount.</h2>
          </div>
          <div class="services">
          <img src="images/cash on delivery.png" alt="">
          <p>Cash on delivery</p>
          <h2>if you want to buy a product you can choose cash on delivery.</h2>
          </div>
          <div class="services">
          <img src="images/24hour.png" alt="">
          <p> 24x7 Open</p>
         <h2>Last but not least, We are open everyday...</h2>
          </div>

   </div>
   
</section>

<hr>

<section class="reviews">

   <h1 class="title">What our customers saying</h1>
   
   <div class="box-container">
      <?php 
      $reviewque="SELECT `review`.`name` AS `username`, `review`.`reviews` AS `reveiws`, `review`.`userid`, `users`.`image` AS `userpic`FROM `review`, `users`WHERE `review`.`userid` = `users`.`id`;";
      $reviewres=$conn->query($reviewque);
      while($reviws=$reviewres->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="box">
         <img src="uploaded_img/<?php echo $reviws['userpic']; ?>" >
          <h3><?php echo $reviws['username'];?></h3>
         <p><?php echo $reviws['reveiws'];?></p>
        
      </div>
      <?php } ?>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>