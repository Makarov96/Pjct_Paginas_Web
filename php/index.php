<?php
 require "User.php";


    if ( filter_has_var( INPUT_POST, 'submit' ) ) {

      $first_name = $_POST['first-name'];
      $last_name = $_POST['last-name'];
      $direction= $_POST['address'];
      $apt = $_POST['apt'];
      $country = $_POST['country'];
      $card_type = $_POST['card_name'];
      $card_number = $_POST['last-name'];
      $cvc = $_POST['cvc'];
      $month = $_POST['expire-month'];
      $year = $_POST['year'];

      $h = new User($first_name ,$last_name,$direction,$apt,$country
      ,$card_type,$card_number,$cvc,$month,$year);

      echo "Hello, " . $h->getFname(). "! You are ";

}

?>