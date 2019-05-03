<!DOCTYPE html>
<html>
  <head>
<!--      //Responsive design declaration-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
<link rel="stylesheet" href="views/css/styles.css">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<title></title>
  </head>
<!--  <body>-->
  <body  background="curtain.jpg">
<!--<body>-->
<!--      <video autoplay muted d="myVideo">
  <source src="redcurtain.mp4" type="video/mp4">
</video>-->
      <br/><br/>
    <header class="w3-container w3-grey">
        <a href='/SkyEventBlog'>Home</a>
        <a href='?controller=eventshow&action=readAll'>Events</a><img src=""/>
      <a href='?controller=eventshow&action=create'>Add Event</a>
      <a href='?controller=venueaddress&action=readAll'>Venues</a>
      <a href='?controller=venueaddress&action=create'>Add Venue</a>
      <a href='?controller=pages&action=contact'>Contact</a>
      <a href='?controller=pages&action=aboutus'>About Us</a>
    </header>
<div class="w3-container w3-red">
    <?php require_once('routes.php'); ?>
</<div>
<div class="w3-container w3-grey">
    <footer >

        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>
  </body>
</html>