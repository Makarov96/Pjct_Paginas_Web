<?php
 require "User.php";


    if ( filter_has_var( INPUT_GET, 'submit' ) ) {

      $first_name = $_GET['first-name'];
      $last_name = $_GET['last-name'];
      $direction= $_GET['address'];
      $apt = $_GET['apt'];
      $country = $_GET['country'];
      $card_type = $_GET['card_name'];
      $card_number = $_GET['last-name'];
      $cvc = $_GET['cvc'];
      $month = $_GET['expire-month'];
      $year = $_GET['year'];

      $h = new User($first_name ,$last_name,$direction,$apt,$country
      ,$card_type,$card_number,$cvc,$month,$year);

      echo "Hello, " . $h->getFname(). "! You are ";
      jsLogs($h->getFname());

   }

   function jsLogs($data) {
    $html = "";
    $coll;

    if (is_array($data) || is_object($data)) {
        $coll = json_encode($data);
    } else {
        $coll = $data;
    }

    $html = "<script>console.log('PHP: ".$coll."');</script>";

    echo($html);
    # exit();
   }

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


?>