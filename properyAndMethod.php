<?php 
/**
 * membuat class yang memiliki property dan method
 */

 class Human {
     public $name;
     public $age;
     public $gender;



     public function see(){
         
     }
     public function talk(){

     }
     public function walk(){

     }


 }

// buat object
$reza = new Human;
$name = $reza->name = "Reza";
$age = $reza->age = 21;
$gender = $reza->gender = 'Man';
echo 'My name is '.$name;
echo '<br>';
echo 'Im '.$age.' years old';
echo '<br>';
echo 'Im '. $gender;
