<p>Fill in the following form to update an existing venue:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Venue</h2>
    <p>
        <input class="w3-input" type="text" name="venueName" value="<?= $venueaddress->venueName; ?>">
        <label>Enter Venue Name</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="street" value="<?= $venueaddress->street; ?>">
        <label>Enter Street</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="postcode" value="<?= $venueaddress->postcode; ?>">
        <label>Enter Postcode</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="contact" value="<?= $venueaddress->contact; ?>">
        <label>Enter Contact</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="location" value="<?= $venueaddress->location; ?>">
        <label>Enter Location</label>
    </p>
    
        
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
$file = 'views/images/' . $venueaddress->venueName . '.jpeg';
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