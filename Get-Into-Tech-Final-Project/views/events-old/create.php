<p>Fill in the following form to create a new product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Event</h2>
</div>
    <p>
        <input class="w3-input" type="text" name="eventName" required autofocus>
        <label>Event Name</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="eventDate" required>
        <label>Event Date</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventTime" required>
        <label>Event Time</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventRunningTime" required>
        <label>Event Running Time</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="eventDescription" required>
        <label>Event Description</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventURL" required>
        <label>Event URL</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="eventBookingURL" required>
        <label>Event Booking URL</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="eventPrice" required>
        <label>Event Price</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="venueID_FK" required>
        <label>Enter Database Venue ID FK</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="authorID_FK" required>
        <label>Event Author ID FK</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="imageURL" required>
        <label>Event Image URL</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="videoURL" required>
        <label>Event Video URL</label>
    </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Event">
  </p>
</form>