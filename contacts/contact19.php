<?php include 'sendemail.php'; ?>
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
<?php echo $alert; ?>
<header>
<ul>
<li class="active"><a href="../consultancy/index.php"><B>BACK</B></a></li>

</ul>


<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" method="post">
    <input type="text" class="contact-form-text" name="name" placeholder="Your name">
    <input type="email" class="contact-form-text" name="email" placeholder="Your email">
    <input type="text" class="contact-form-text" name="phone" placeholder="Your phone">
    <textarea class="contact-form-text" name="message" placeholder="Your message"></textarea>
    <input type="submit" name="submit" class="contact-form-btn" value="Send">
  </form>
</div>

</header>
<script type="text/javascript">
if(window.history.replacestate){
window.history.replaceState(null, null, window.location.href);
}
</script>


 </body>
</html>
<?php

