<!DOCTYPE html>
<html>
  <head>
<!--      //Responsive design declaration-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">-->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">-->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >-->
<!--<link rel="stylesheet" href="views/css/styles.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>
    
</title>
<style>
    body {
            background-image: url("views/curtain.JPG");

    }
.intro {
    border: 1px solid white;
    margin-top: 80px;
    font: verdana, sans-serif;
    font-size: 20PX;
    background-color: black;
    padding: 20px;
    color: white;
    text-align: center;
}
a {
    padding-left: 20px;
    padding-right: 20px;
    color:white;
}
.center{
    border: 1px solid white;
    font: verdana, sans-serif;
    font-size: 20PX;
    background-color: white;
    padding: 20px;
    color: black;
    text-align: center;
    
}
.footer{
    border: 1px solid white;
    font: verdana, sans-serif;
    font-size: 20PX;
    background-color: black;
    padding-left: 20px;
    color: white;
    text-align: center;
    
}

</style>
  </head>

  <body>
      <div class="container" >
    <header class="intro">
   <ul class="nav nav-tabs">
      <li class="nav-item"><a class="nav-link" href='/SkyEventBlog'>Home</a></li>
      <li class="nav-item"><a class="nav-link"href='?controller=eventshow&action=readAll'>Events</a></li>
      <li class="nav-item"><a class="nav-link" href='?controller=eventshow&action=create'>Add Event</a></li>
      <li class="nav-item"><a  class="nav-link" href='?controller=venueaddress&action=readAll'>Venues</a></li>
      <li class="nav-item"><a class="nav-link" href='?controller=venueaddress&action=create'>Add Venue</a></li>
      <li class="nav-item"><a class="nav-link" href='?controller=pages&action=contact'>Contact</a></li>
      <li class="nav-item"><a class="nav-link" href='?controller=pages&action=aboutus'>About Us</a></li>
<!--      <li class="nav-item"><a class="nav-link" href='?controller=bloguser&action=login'>Login</a></li>-->
<!--      <li class="nav-item"><a class="nav-link" href='?controller=bloguser&action=logout'>Logout</a></li>-->

        </ul>
    </header>
<div class="center">
    <?php require_once('routes.php'); ?>
</div>
<div class="footer">
    <footer >
<!--        copyright symbol and year presented from PHP-->
        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>   
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>