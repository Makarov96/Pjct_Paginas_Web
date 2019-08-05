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