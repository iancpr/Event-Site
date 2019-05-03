<!DOCTYPE html>
<html>
  <head>
      <!--      //Responsive design declaration-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
    
</title>

  </head>

  <body>

<div class="container">
<style>
    .responsive-video {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 60px; overflow: hidden;
}

.responsive-video iframe,
.responsive-video object,
.responsive-video embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 75%;
}

.img-fluid {
    align-items: left;
}

    .google-maps {
        position: relative;
        padding-bottom: 75%; 
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }    
</style>



<div class="row">
    <div class="col-sm-6">
      <img class="img-fluid" src=<?php echo $eventshow->imageURL; ?>>  
    </div>
    
    <div class="col-sm-6">
                <div class="responsive-video">
    <iframe src=<?php echo $eventshow->videoURL; ?>></iframe>
</div>
        
    </div>

</div>



<!--<iframe width="550" height="250" src=<?php echo $eventshow->videoURL; ?>></iframe>-->

<h1>Event Details:</h1>

<p><strong>Event ID:</strong> <?php echo $eventshow->eventID; ?></p>
<p><strong>Event Name:</strong> <?php echo $eventshow->eventName; ?></p>

<!--<p><strong>Venue Name:</strong> <?php echo $eventshow->venueID_FK; ?>
<a href='?controller=venueaddress&action=read&venueID=<?php echo $eventshow->venueID_FK; ?>'>See venue information</a> &nbsp; &nbsp;</p>-->
<p><strong>Event Date:</strong> <?php echo $eventshow->eventDate; ?></p>
<p><strong>Event Time:</strong> <?php echo $eventshow->eventTime; ?></p>
<p><strong>Event Running Time:</strong> <?php echo $eventshow->eventRunningTime; ?></p>
<p><strong>Event Synopsis:</strong> <?php echo $eventshow->eventDescription; ?></p>
<p><strong>Event URL:</strong><a href="<?php echo $eventshow->eventURL; ?>">Click Here to visit the event website</a></p>
<p><strong>Event Booking URL:</strong> <a href="<?php echo $eventshow->eventBookingURL; ?>">Click here to go the booking page</a></p>
<p><strong>Event Price:</strong> £<?php echo $eventshow->eventPrice; ?></p>

<br/>
<h1>Venue Details:</h1>
<p><strong>Venue Name:</strong> <?php echo $eventshow->venueName; ?></p>
<p><strong>Venue Street:</strong> <?php echo $eventshow->venueStreet; ?></p>
<p><strong>Venue Postcode:</strong> <?php echo $eventshow->venuePostcode; ?></p>
<p><strong>Venue Location:</strong> </p>
<div class="google-maps">
<br/>
<br/>
<br/>
<br/>
<p><?php echo $eventshow->venueLocation; ?></p>
</div>
<br/>
<br/>
<!--<p>VenueID_FK: <?php echo $eventshow->venueID_FK; ?></p>
<p>AuthorID_FK: <?php echo $eventshow->authorID_FK; ?></p>-->

<!--<p>Event Video: </p>
<p><iframe width="450" src=<?php echo $eventshow->videoURL; ?>></iframe></p>-->


<?php 
$file = 'views/images/' . $eventshow->eventName . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noeventimage.png' width='150' />";
}

?>
</div>
  </body>
</head>