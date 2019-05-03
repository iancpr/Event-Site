<p>Fill in the following form to create a new product:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Venue</h2>
</div>
    <p>
        <input class="w3-input" type="text" name="venueName" required autofocus>
        <label>Venue Name</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="street" required>
        <label>Street</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="postcode" required>
        <label>Postcode</label>
    </p>
    
            <p>
        <input class="w3-input" type="text" name="contact" required>
        <label>Contact Details</label>
    </p>
    
        <p>
        <input class="w3-input" type="text" name="location" required>
        <label>Location (Lat/Long for Google) Use NULL for now </label>
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