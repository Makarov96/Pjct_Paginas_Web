<?php
 require "User.php";

      $h = new User($_POST['first-name'] ,$_POST['last-name'],$_POST['address'],$_POST['apt'],$_POST['country']
      ,$_POST['card_name'],$_POST['card_number'],$_POST['cvc'],$_POST['expire-month'],$_POST['year']);

      echo "Hello, " . $h->getFname(). "! You are ";

?>