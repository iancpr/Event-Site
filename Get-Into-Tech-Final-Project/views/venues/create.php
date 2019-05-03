&nbsp;&nbsp;
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <div class="form-group">
    <h2>Add New Venue</h2>
    <br/>
    <p>
        <div class="form-group row">
            <label>Venue Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="form-control col-sm-9"  id= "exampleInputname"
               type="text" name="venueName" required autofocus>
        
        </div>
    </p>
    
        <p>
            <div class="form-group row"> 
                 <label>Street</label>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="form-control col-sm-9" id="exampleInputstreet" type="text" name="street" required>
               </div>
    </p>
    
            <p>
                <div class="form-group row"> 
                    <label>Postcode</label>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
        <input class="form-control col-sm-9"  id="exempleInputpostcode" type="text" name="postcode" required>
                </div>
    </p>
    
            <p>
                <div class="form-group row"> 
                    <label>Contact Details</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="form-control col-sm-9" id="exempleInputpostcode" type="text" name="contact" required>
                </div>
    </p>
    
        <p>
            <div class="form-group row"> 
                <label>Location: </label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
        <input class="form-control col-sm-9" id="exempleInputpostcode" type="text" name="location" placeholder="Add embed details from Google Maps - insert into DB" required>
                    </div>
    </p>
    
            
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="btn btn-warning" /><br><br>
  <p>
    <input class="btn btn-primary" type="submit" value="Add Venue">
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
     text-align: left;
    
    }
    h2{
        text-decoration: underline;
    }
  </style>