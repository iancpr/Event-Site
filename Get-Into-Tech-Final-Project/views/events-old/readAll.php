<p>Here is a list of all events:</p>


<?php foreach($eventshows as $eventshow) { ?>
  <p>
    <?php echo $eventshow->eventName; ?> &nbsp; &nbsp;
    <a href='?controller=eventshow&action=read&eventID=<?php echo $eventshow->eventID; ?>'>See event information</a> &nbsp; &nbsp;
    <a href='?controller=eventshow&action=delete&eventID=<?php echo $eventshow->eventID; ?>'>Delete Event</a> &nbsp; &nbsp;
    <a href='?controller=eventshow&action=update&eventID=<?php echo $eventshow->eventID; ?>'>Update Event</a> &nbsp;
  </p>
<?php } ?>