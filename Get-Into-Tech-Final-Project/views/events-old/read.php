<p> <img width="750" height="250" src=<?php echo $eventshow->imageURL; ?>>
<iframe width="550" height="250" src=<?php echo $eventshow->videoURL; ?>></iframe>
</p> 

<!--<p><strong>Event ID:</strong> <?php echo $eventshow->eventID; ?></p>-->
<p><strong>Event Name:</strong> <?php echo $eventshow->eventName; ?></p>
<p><strong>Venue Name:</strong> <?php echo $eventshow->venueID_FK; ?></p>
<a href='?controller=venueaddress&action=read&venueID=<?php echo $eventshow->venueID_FK; ?>'>See venue information</a> &nbsp; &nbsp;
<p><strong>Event Date:</strong> <?php echo $eventshow->eventDate; ?></p>
<p><strong>Event Time:</strong> <?php echo $eventshow->eventTime; ?></p>
<p><strong>Event Running Time:</strong> <?php echo $eventshow->eventRunningTime; ?></p>
<p><strong>Event Synopsis:</strong> <?php echo $eventshow->eventDescription; ?></p>
<p><strong>Event URL:</strong> <a href="<?php echo $eventshow->eventURL; ?>">Click Here to visit the event website</a></p>
<p><strong>Event Booking URL:</strong> <a href="<?php echo $eventshow->eventBookingURL; ?>">Click here to go the booking page</a></p>
<p><strong>Event Price:</strong> £<?php echo $eventshow->eventPrice; ?></p>


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
	
