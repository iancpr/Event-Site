<?php

class PagesController {
   
    public function home() {
      //example data to use in the home page
      $first_name = 'Lisa';
      $last_name  = 'Simpson';
      require_once('views/pages/home.php');
    }

    public function contact() {
        $name = 'Ian Premadasa';
        $email = 'ianpremadasa@gmail.com';
        $phone = '07958996072';
        require_once('views/pages/contact.php');
    }
    
        public function AboutUs() {
require_once('views/pages/aboutus.php');
    }
    
    public function error() {
      require_once('views/pages/error.php');
    }
    
}
