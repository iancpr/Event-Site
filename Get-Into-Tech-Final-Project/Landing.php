<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}

.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

#landing {
    width: 300px;
    justify-content: center;
    font-size: 24px;
    padding: 10px;
    border: crimson;
    background: #ff3300;
    color: #fff;
    cursor: pointer;
}

#landing:hover {
    justify-content: center;
    background: #ddd;
    color: black;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
</head>
<body>

<video autoplay muted id="myVideo">
  <source src="redcurtain.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <h1>Welcome to our Showcase!</h1>
  <p>Fun Times in London is a site designed to help find fun, interesting and exciting events to go to after a long day! So click enter below, come in and see whats happening near you!</p>
  <div class="container"> <button id="landing" onclick="window.location.href='http://localhost/SkyEventBlog/?controller=eventshow&action=readAll'">Enter</button></div>
</div>

<!--<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>-->
  <?php
        // put your code here
        ?>
</body>
</html>

        
     