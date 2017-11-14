<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Reliable, affordable bike repair shop in London | Bike Shed</title>
	<meta name="Description" content="Bike Shed is London's ultimate shop for all your bike needs. We do top quality bicycle repairs and teach essential bike maintenace at our free workshops.">
  <link rel="stylesheet" href="style/reset.css" type="text/css">  <!-- CSS reset -->
  <link rel="stylesheet" href="style/style.css" type="text/css"> <!--  page styles -->
	<!-- link to fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Vast+Shadow%7CBlack+Ops+One%7CFrijole%7CSignika%7COpen+Sans%7CRye%7CBungee+Inline">
  <!-- responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <header>
    <div id="logocontainer">
      <div class="headerlogo">
        <a href="index.php"><img src="images/bike-shed5.svg" id="logo" alt="bike shed logo"></a>
      </div>
      <div class="headerinfo">
          <p>123 Any Road </p>
          <p>London, N1 234 </p>
          <p>Tel: 0207 123 456 </p>
        <ul>
          <li> Monday - Friday: 9am - 7pm </li>
          <li> Saturday: 10am - 6pm </li>
          <li> Sunday: CLOSED </li>
          <li id="isopen"> </li>
        </ul>
      </div>  <!-- headerinfo -->
    </div> <!-- logocontainer -->

    <div class="nav">
      <ul>
        <?php
          if ($this_page=="home"){
            echo " <li class=\"current\"> <a href=\"index.php\">Bike Shed</a></li>";
          }else{
            echo " <li> <a href=\"index.php\">Bike Shed</a></li>";
          }
          if ($this_page=="prices"){
            echo " <li class=\"current prices\"> <a href=\"prices.php\">Prices</a></li>";
          }else{
            echo " <li class=\"prices\"><a href=\"prices.php\">Prices</a></li>";
          }
          if ($this_page=="workshops"){
            echo " <li class=\"current workshops\"> <a href=\"workshops.php\">Workshops</a></like>";
          }else{
            echo " <li class=\"workshops\"> <a href=\"workshops.php\">Workshops</a></li>";
          }
          if ($this_page=="diy"){
            echo " <li class=\"current diy\"> <a href=\"diy.php\">DIY</a></li>";
          }else{
            echo " <li class=\"diy\"> <a href=\"diy.php\">DIY</a></li>";
          }
          if ($this_page=="contact"){
            echo " <li class=\"current contact\"> <a href=\"contact.php\">Contact</a></li>";
          }else{
            echo " <li class=\"contact\"> <a href=\"contact.php\">Contact</a></li>";
          }
        ?>
      </ul>
    </div>   <!-- end nav -->

    <!-- Js-->
  	<script src="script.js"></script>
  	<!-- end Js-->
  </header>

	<main>
    <div id="errormain">
      <h1>404 Error: <br />Sorry about that. Please <a href="contact.php">let us know</a> how you got here.</h1>

      <img src="images/red-phone.jpg" alt="a red telephone with spiral cord outstretched" />
    </div>
  </main>

	<!-- footer include-->
	<?php include('includes/footer.inc.php'); ?>
	<!-- end footer include-->

	<!-- Js-->
	<!-- <script src="script.js"></script> ->
	<!-- end Js-->
</body>
</html>
