<p><h1>Fill In The Following Form To Update An Existing Event:</h1></p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <div  class ="form-group">
        
    <h2>Update Event</h2>
    <p>
        <input class="form-control"  id="exampleInputname" type="text" name="eventName" value="<?= $eventshow->eventName; ?>">
        <label>Enter Event Name</label>
    </p>
    
            <p>
        <input class="form-control" id="exampleInputdate" type="text" name="eventDate" value="<?= $eventshow->eventDate; ?>">
        <label>Enter Event Date</label>
    </p>
    
            <p>
        <input class="form-control" id="exampleInputtime" type="text" name="eventTime" value="<?= $eventshow->eventTime; ?>">
        <label>Enter Event Time</label>
    </p>
    
            <p>
        <input class="form-control" id="exampleInputrunningtime" type="text" name="eventRunningTime" value="<?= $eventshow->eventRunningTime; ?>">
        <label>Enter Event Running Time</label>
    </p>
    
        <p>
        <input class="form-control" id="exampleInputdescription" type="text" name="eventDescription" value="<?= $eventshow->eventDescription; ?>">
        <label>Enter Event Description</label>
    </p>
    
        <p>
        <input class="form-control" id="exampleInputeventurl" type="text" name="eventURL" value="<?= $eventshow->eventURL; ?>">
        <label>Enter Event URL</label>
    </p>
    
        <p>
        <input class="form-control" id="exampleInputbooking" type="text" name="eventBookingURL" value="<?= $eventshow->eventBookingURL; ?>">
        <label>Enter Event Booking URL Page</label>
    </p>
    
    <p>
        <input class="form-control" id="exampleInputprice" type="text" name="eventPrice" value="<?= $eventshow->eventPrice; ?>" >
        <label>Enter Event Price</label>
    </p>
    
        <p>
        <input class="form-control" id="exampleInputvenueID" type="text" name="venueID_FK" value="<?= $eventshow->venueID_FK; ?>">
        <label>Enter Database Venue ID FK</label>
    </p>
    
        <p>
        <input class="form-control"  id="exampleInputauthorid" type="text" name="authorID_FK" value="<?= $eventshow->authorID_FK; ?>">
        <label>Enter Database Author ID FK</label>
    </p>
    
        <p>
        <input class="form-control" id="exampleInputimageurl" type="text" name="imageURL" value="<?= $eventshow->imageURL; ?>">
        <label>Event Image URL</label>
    </p>
    
        <p>
        <input class="form-control" id="exampleInputvideourl" type="text" name="videoURL" value="<?= $eventshow->videoURL; ?>">
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
  <input type="file" name="myUploader" class="btn btn-warning" /><br><br>
  <p>
    <input class="btn btn-primary" type="submit" value="Update Event">
    </p>
</form>