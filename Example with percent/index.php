<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
    background-color: black;
}

.parallax {
  /* The image used */
  background-image: url('assets/tree.png');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

    .parallax2 {
  /* The image used */
  background-image: url('assets/moon.jpeg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1366px) {
  .parallax {
    background-attachment: scroll;
  }
}
</style>
</head>
<body>

<p>In this example we have turned off parallax scrolling for mobile devices. It works as expected on all desktop screens sizes.</p>
<p>Scroll Up and Down this page to see the parallax scrolling effect.</p>

<div class="parallax"></div>

<div style="height:150px; background-color:darkblue;color: azure; font-size:36px">
<center>
    <br>
    Here is a simple example of a parallax effect without javascript.</center>
</div>

<div class="parallax2"></div>

</body>
</html>
