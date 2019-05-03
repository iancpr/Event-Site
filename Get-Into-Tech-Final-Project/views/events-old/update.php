<p>Fill in the following form to update an existing product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Event</h2>
    <p>
        <input class="w3-input" type="text" name="eventName" value="<?= $eventshow->eventName; ?>">
        <label>Enter Event Name</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventDate" value="<?= $eventshow->eventDate; ?>">
        <label>Enter Event Date</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventTime" value="<?= $eventshow->eventTime; ?>">
        <label>Enter Event Time</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventRunningTime" value="<?= $eventshow->eventRunningTime; ?>">
        <label>Enter Event Running Time</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="eventDescription" value="<?= $eventshow->eventDescription; ?>">
        <label>Enter Event Description</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="eventURL" value="<?= $eventshow->eventURL; ?>">
        <label>Enter Event URL</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="eventBookingURL" value="<?= $eventshow->eventBookingURL; ?>">
        <label>Enter Event Booking URL Page</label>
    </p>
    
    <p>
        <input class="w3-input" type="text" name="eventPrice" value="<?= $eventshow->eventPrice; ?>" >
        <label>Enter Event Price</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="venueID_FK" value="<?= $eventshow->venueID_FK; ?>">
        <label>Enter Database Venue ID FK</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="authorID_FK" value="<?= $eventshow->authorID_FK; ?>">
        <label>Enter Database Author ID FK</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="imageURL" value="<?= $eventshow->imageURL; ?>">
        <label>Event Image URL</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="videoURL" value="<?= $eventshow->videoURL; ?>">
        <label>Enter Video URL</label>
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
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
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Event">
    </p>
</form>