<?php
Class User {

 private $first_name;
 private $last_name;
 private $direction;
 private $apt;
 private $country;
 private $card_type;
 private $card_number;
 private $cvc;
 private $month;
 private $year;

 function __construct( $first_name, $last_name,$direction,
 $apt,$country,$card_type,$card_number,$cvc,$month,$year
 ) {
     $this->first_name = $first_name;
     $this->last_name=$last_name;
     $this->direction=$direction;
     $this->apt=$apt;
     $this->country=$country;
     $this->card_type=$card_type;
     $this->card_number=$card_number;
     $this->cvc=$cvc;
     $this->month=$month;
     $this->year=$year;
 }

    function getFname() {
        return $this->first_name;
    }

    function getSname() {
       return $this->last_name;
   }


   function getDirection() {
       return $this->direction;
   }

   function getCountry() {
       return $this->country;
   }

   function getApt() {
       return $this->apt;
   }

   function getCardType() {
       return $this->card_type;
   }

   function getCardNumber() {
       return $this->card_number;
   }

   function getCvc() {
       return $this->cvc;
   }

   function getMonth() {
       return $this->month;
   }

   function getYear() {
       return $this->year;
   }


}
?>