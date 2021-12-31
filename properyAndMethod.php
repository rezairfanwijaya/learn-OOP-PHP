<?php 
/**
 * membuat class yang memiliki property dan method
 */

 class Human {

    // property
     public $name;
     public $age;
     public $gender;

    //  function
     public function see(){
        return 'Melihat'; 
     }
     public function talk(){
        return 'Berbicara';
     }
     public function walk(){
        return 'Berjalan';
     }

     public function info(){
         //  this dipakai untuk mengunakan property atau method non static dari class yang bersangkutan
        return 'Hallo nama saya '.$this->name.' Saya berusia '.$this->age.'. Saya seorang '.$this->gender. '.Saat ini saya sedang '.$this->see();
     }


 }

// buat object
$reza = new Human;
// mengisi data ke dalam objek
$reza->name="Reza";
$reza->age=21;
$reza->gender="Laki-Laki";
// memanggil function
echo $reza->info();


