
<div class="container"> 

    <p><h1 align="center">Here Is A List Of All Events:</h1></p>
<br/>

<?php foreach($eventshows as $eventshow) { ?>
    
  <p>
  <div class="row">
      
      <div class="col">
    <?php echo $eventshow->eventName; ?> &nbsp; 
      </div>
      
     <div class="col">
    <?php echo $eventshow->eventDate; ?> &nbsp; 
      </div>
      
<!--     <div class="col">
         
         <a class="btn btn-info btn-sm" href='?controller=venueaddress&action=read&venueID=<?php echo $eventshow->venueID_FK; ?>'>See venue information</a>  -->
<!--      </div>
      
--><div class="col">      
<a class="btn btn-primary btn-sm" href='?controller=eventshow&action=read&eventID=<?php echo $eventshow->eventID; ?>'>See event information</a> &nbsp; 
</div>
      
      
<div class="col">
<a class="btn btn-warning btn-sm" href='?controller=eventshow&action=update&eventID=<?php echo $eventshow->eventID; ?>'>Update Event</a> 
<!--</div>
<div class="col">-->
<a id="alignright" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');"  href='?controller=eventshow&action=delete&eventID=<?php echo $eventshow->eventID; ?>'>Delete Event</a> 

  </div>
  </div>
   </p>
  
<?php } ?>
</div>
<style>
    .container{
    
     margin: 50px auto;
     border-radius: 2px;
     padding: 20px;
     font-family: verdana, sans-serif;
     display: block;
     text-align: left;
    
    }
    h1{
        color: black;
        text-decoration: underline; 
        justify-content: center;

    }
    
    #alignright {
        justify-content: right;
    }
    
  </style>