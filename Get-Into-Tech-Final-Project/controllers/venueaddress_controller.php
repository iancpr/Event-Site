<?php

class VenueaddressController {
    public function readAll() {
      // we store all the posts in a variable
      $venueaddresss = Venueaddress::all();
      require_once('views/venues/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['venueID']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $venueaddress = Venueaddress::find($_GET['venueID']);
      require_once('views/venues/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/venues/create.php');
      }
      else { 
            Venueaddress::add();
             
            $venueaddresss = Venueaddress::all(); //$products is used within the view
            require_once('views/venues/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['venueID']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $venueaddress = Venueaddress::find($_GET['venueID']);
      
        require_once('views/venues/update.php');
        }
      else
          { 
            $venueID = $_GET['venueID'];
            Venueaddress::update($venueID);
                        
            $venueaddresss = venueaddress::all();
            require_once('views/venues/readAll.php');
      }
      
    }
    public function delete() {
            Venueaddress::remove($_GET['venueID']);
            
            $venueaddresss = Venueaddress::all();
            require_once('views/venues/readAll.php');
      }
      
    }
  
?>