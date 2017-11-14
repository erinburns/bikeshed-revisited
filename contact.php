<?php $this_page = "contact" ; ?>

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

<body id="contactbody">
	<!-- header include-->
	<?php include('includes/header.inc.php'); ?>
	<!-- end header include-->

  <main class="contactmain">

      <h1>Find us</h1>

      <div class="contacthours">
        <h2>Opening Hours </h2>
        <ul>
          <li> Monday - Friday: 9am - 7pm </li>
          <li> Saturday: 10am - 6pm </li>
          <li> Sunday: CLOSED </li>
        </ul>
				<p> We are closed on the following holidays:</p>
				<p> New Years Day, Good Friday, Easter Monday</p>
				<p> Christmas Day, and Boxing Day </p>
      </div>

    <div class="contactlocation">
			<h2> Bike Shed </h2>
			<p>123 Any Road </p>
			<p>London, N1 234 </p>
			<p>Tel: 0207 123 456 </p>
		</div>

		<!-- begin Google Map -->
		<div id="mapcontainer">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.6607731070753!2d-0.010707549263680277!3d51.48274072022782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876029cc38dccf5%3A0xa66a5fccf89e51c4!2sUniversity+of+Greenwich!5e0!3m2!1sen!2suk!4v1484410209581" width="600" height="450" style="border:0" allowfullscreen></iframe>
		</div>
		<!-- end Google map -->


		<div id="formwrapper">
			<form action="#" method="post">
				<div class="space"></div>   <!-- adds space at top of form-->
				<div>
	        <label for="name">Name:</label>
	        <input type="text" id="name" name="user_name" placeholder="Your name" />
	    	</div>
				<div>
	        <label for="mail">E-mail:</label>
	        <input type="email" id="mail" name="user_mail" placeholder="email address" />
	    	</div>
				<div>
	        <label for="tel">Phone:</label>
	        <input type="tel" id="tel" name="tel" placeholder="phone number" />
	    	</div>
				<div>
	        <label for="msg">Message:</label>
	        <textarea id="msg" name="user_message" placeholder="Talk to us."></textarea>
	    	</div>
				<div class="button">
	        <button type="submit">Submit</button>
	    	</div>
			</form>
		</div> <!-- closing formwrapper -->

  </main>


	<!-- footer include-->
	<?php include('includes/footer.inc.php'); ?>
	<!-- end footer include-->

	<!-- Js-->
	<script src="script.js"></script>
	<!-- end Js-->
</body>


</html>
