<p>Here is a list of all venues:</p>

<?php foreach($venueaddresss as $venueaddress) { ?>
  <p>
    <?php echo $venueaddress->venueName; ?> &nbsp; &nbsp;
    <a href='?controller=venueaddress&action=read&venueID=<?php echo $venueaddress->venueID; ?>'>See venue information</a> &nbsp; &nbsp;
    <a href='?controller=venueaddress&action=delete&venueID=<?php echo $venueaddress->venueID; ?>'>Delete Venue</a> &nbsp; &nbsp;
    <a href='?controller=venueaddress&action=update&venueID=<?php echo $venueaddress->venueID; ?>'>Update Venue</a> &nbsp;
  </p>
<?php } ?>