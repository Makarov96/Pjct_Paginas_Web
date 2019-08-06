<?php
 require "user.php";

      $h = new User($_POST['first-name'] ,$_POST['last-name'],$_POST['address'],$_POST['apt'],$_POST['country']
      ,$_POST['card_name'],$_POST['card_number'],$_POST['cvc'],$_POST['expire-month'],$_POST['year'],$_POST['email'], $_POST['tel']);

      echo "Dataaaaaaaa" . $_POST['card_name'];
      echo "Hello, " . $h->getFname() . "! your last name is: " . $h->getSname();
      echo "<br>";
      echo "Email " . $h->getEmail();
      echo "<br>";
      echo "Address: " . $h->getDirection() ;
      echo "<br>";
      echo "CellPhone: " . $h->getCell();
      echo "<br>";
      echo "APT: " . $h->getApt();
      echo "<br>";
      echo "Country: " . $h->getCountry();
      echo "<br>";
      echo "Type Card: " . $h->getCardType();
      echo "<br>";
      echo "Card Number: " . $h->getCardNumber();
      echo "<br>";
      echo "CVC: " . $h->getCvc();
      echo "<br>";
      echo "Month: " . $h->getMonth();
      echo "<br>";
      echo "Year: " . $h->getYear();

?>