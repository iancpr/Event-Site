<!--<p>This is the requested product:</p>-->


<p><strong>Venue ID:</strong> <?php echo $venueaddress->venueID; ?></p>
<p><strong>Venue Name:</strong> <?php echo $venueaddress->venueName; ?></p>
<p><strong>Street:</strong> <?php echo $venueaddress->street; ?></p>
<p><strong>Postcode:</strong> <?php echo $venueaddress->postcode; ?></p>
<p><strong>Contact:</strong> <?php echo $venueaddress->contact; ?></p>
<p><strong>Location:</strong> <p> <?php echo $venueaddress->location; ?></p>
</p>






<?php 
$file = 'views/images/' . $venueaddress->venueName . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='350' height='250' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noeventimage.png' width='250' />";
}

?>
	
