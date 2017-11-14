<header>
  <div id="logocontainer">
    <div class="headerlogo">
      <a href="index.php"><img src="images/bike-shed5.svg" id="logo" alt="bike shed logo" title="bike shed logo" width="350" /></a>
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

  <img src="images/bikebw.jpg" class="mainimg" alt="black and white image of a bike and rider standing next to it" title="black and white image of a bicycle" />

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
	<script src="../script.js"></script>
	<!-- end Js-->
</header>
