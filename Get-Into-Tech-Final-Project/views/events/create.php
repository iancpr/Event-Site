
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <div class="form-group">
    <h2>Add New Event</h2>
    
    <br/>

<!--Event Name code block-->
<p>
<div class="form-group row"    
<label>Event Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" id= "exampleInputname" type="text" name="eventName" placeholder="e.g The Snowman" required autofocus>  
</div>
</p>
    
<!--Event Date code block-->    
<p>
<div class="form-group row" 
<label>Event Date:</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" id= "exampleInputdate" type="text" name="eventDate" placeholder="e.g 16th December 2018" required>
</div>
</p>

<!--Event Time code block-->
<p>
<div class="form-group row" 
<label>Event Time:</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" id= "exampleInputtime" type="text" name="eventTime" placeholder="e.g 7:30PM" required>
</div>
</p>

<!--Event Running Time code block-->
<p>
<div class="form-group row" 
<label>Event Running Time:</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" id= "exampleInputrunningtime" type="text" name="eventRunningTime" placeholder="e.g 75 minutes or 1 hour 15 minutes" required>
</div>
</p>

<!--Event Description code block-->
<p>
<div class="form-group row" 
<label>Event Description:</label>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8"  id= "exampleInputdescription" type="text" name="eventDescription" placeholder="e.g 'Christmas just wouldn't be Christmas without a trip to see The Snowman...'" required>
</div>
</p>

<!--Event URL code block-->
<p>
<div class="form-group row" 
<label>Event URL:</label>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8"id="exempleInputposturl" type="text" name="eventURL" placeholder="e.g https://www.theotherpalace.co.uk/whats-on/baby-broadway" required>
</div>
</p>

<!--Event Booking URL code block-->
<p>
<div class="form-group row" 
<label>Event Booking URL:</label>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" id="exempleInputpostbooking" type="text" name="eventBookingURL" placeholder="e.g https://www.theotherpalace.co.uk/whats-on/baby-broadway/booking" required>
</div>
</p>

<!--Event Prices code block-->
<p>
<div class="form-group row"> 
<label>Event Price (£):</label>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" id="exempleInputpostprice"type="text" name="eventPrice" placeholder="e.g 10.00" required>
</div>
</p>

<!--Event Database Venue ID_FK code block-->
<p>
<div class="form-group row">
<label>Database Venue ID FK:</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
    <input class="form-control col-sm-8" id="exempleInputpostvenueid" type="text" name="venueID_FK" placeholder="Enter a number for the venue ID on the database - e.g 1" required>
</div>
</p>

<!--Event AuthorID_FK code block-->
<p>
<div class="form-group row">
<label>Event Author ID FK:</label>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8"  id="exempleInputpostauthorid" type="text" name="authorID_FK" placeholder="Enter a Number for the author ID on the database - e.g 1" required>
</div>
</p>

<!--Event Image URL code block-->
<p>
<div class="form-group row">
<label>Event Image URL:</label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8"  id="exempleInputpostimage"type="text" name="imageURL" placeholder="Copy the image URL location and paste here" required>
</div>
</p>

<!--Event Video URL code block-->
<p>
<div class="form-group row">
<label>Event Video URL:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    <input class="form-control col-sm-8" type="text" id="exempleInputpostcode" name="videoURL" placeholder="Copy the video URL location and paste here" required>
</div>
</p>



<br/>
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="btn btn-warning" required />
  <p>
      <br/>
    <input class="btn btn-primary" type="submit" value="Add Event">
  </p>
</form>
</div>
<style>
    .container{
    
     margin: 50px auto;
     border-radius: 2px;
     padding: 20px;
     font-family: verdana, sans-serif;
     display: block;
     text-align: center;
    
    }
    h2{
        text-decoration: underline;
    }
  </style>