<div class="container">

    <p><h1 align="center">Here Is A List Of All Venues:</h1></p>
<br/>

<?php foreach($venueaddresss as $venueaddress) { ?>
  <p>
  <div class="row">
      <div class="col">
    <?php echo $venueaddress->venueName; ?> 
    </div><!--
      
-->      <div class="col">
    <a class="btn btn-primary btn-sm" href='?controller=venueaddress&action=read&venueID=<?php echo $venueaddress->venueID; ?>'>See venue information</a> 
<!--    </div>
    
    <div class="col">-->
        <a class="btn btn-warning btn-sm" href='?controller=venueaddress&action=update&venueID=<?php echo $venueaddress->venueID; ?>'>Update Venue</a> 
<!--        </div>
        
        <div class="col">-->
    <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Venue?');" href='?controller=venueaddress&action=delete&venueID=<?php echo $venueaddress->venueID; ?>'>Delete Venue</a> 
        </div>

    
    </div>
      </p>
  
<?php } ?>
</div>
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
        text-decoration: underline;
    }
  </style>