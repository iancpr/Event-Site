<?php

class EventshowController {
    public function readAll() {
      // we store all the posts in a variable
      $eventshows = Eventshow::all();
      require_once('views/events/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['eventID']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $eventshow = Eventshow::find($_GET['eventID']);
      require_once('views/events/read.php');
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
          require_once('views/events/create.php');
      }
      else { 
            Eventshow::add();
             
            $eventshows = Eventshow::all(); //$products is used within the view
            require_once('views/events/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['eventID']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $eventshow = Eventshow::find($_GET['eventID']);
      
        require_once('views/events/update.php');
        }
      else
          { 
            $eventID = $_GET['eventID'];
            Eventshow::update($eventID);
                        
            $eventshows = eventshow::all();
            require_once('views/events/readAll.php');
      }
      
    }
    public function delete() {
            Eventshow::remove($_GET['eventID']);
            
            $eventshows = Eventshow::all();
            require_once('views/events/readAll.php');
      }
      
    }
  
?>