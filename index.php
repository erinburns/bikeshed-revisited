<!-- Bike Shed Revisited -->
<!-- Erin Burns -->
<?php $this_page = "home" ; ?>
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
	<!-- header include-->
	<?php include('includes/header.inc.php'); ?>
	<!-- end header include-->

	<main>
		<div class="homedesc">
			<p>We provide expert bike care to any kind of bicycle in the city. With over 20 years of experience working in and running professional workshops we believe we have the ability to repair, rebuild or customize any bicycle. What makes us different to majority of other bike shops is an open workshop, so, if you have time, you can watch us work on your bicycle. Our service also includes advice on maintenance or possible upgrades as well as fixing your bike. </p>  <!-- content borrowed from http://www.londonbicycleworkshop.com/-->
		</div>

		<div class="mainwrapper flexcontainer">
			<div class="thumbnail1">  <!-- green top left -->
					<h3> <a href="prices.php">Our services</a> </h3>
			</div>

			<div class="thumbnail2">  <!-- yellow top right -->
					<h3> <a href="workshops.php">Attend a workshop</a> </h3>
			</div>

			<div class="thumbnail3"> <!-- pink bottom left-->
					<h3> <a href="diy.php">DIY tutorials</a></h3>
			</div>

			<div class="thumbnail4"> <!-- purple bottom right-->
					<h3> <a href="contact.php">Get in touch</a> </h3>
			</div>
		</div>  <!-- end main wrapper -->
	</main>

	<!-- footer include-->
	<?php include('includes/footer.inc.php'); ?>
	<!-- end footer include-->

	<!-- Js-->
	<script src="script.js"></script>
	<!-- end Js-->
</body>
</html>


<!-- Bike Shed Revisited, submitted 12 April 2017 -->
<!-- Erin Burns -->
<!-- Changes:
Added htaccess, sitemap.xml, robots.txt files
Custom 404 error page (404.php)
Modularised header and footer using php includes
Fixed non-responsive header with SVG image of logo and flexbox
SEO - added meta description tags in head
Added javascript message in header with today's hours
Added images in DIY articles
 -->
