<?php
session_start();
if (!isset($_SESSION['user_name'])) {
  header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="KL Monorail, INTUITIVE">
  <meta name="description" content="">
  <title>Ticket Purchased</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="ticket.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/rapidkl-logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="ticket">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-custom-color-3 u-xl-mode" data-lang="en">
  <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-766a">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav
        class="u-align-left u-font-size-14 u-menu u-menu-one-level u-menu-open-right u-nav-spacing-25 u-offcanvas u-menu-1"
        data-responsive-from="MD">
        <div class="menu-collapse">
          <a class="u-button-style u-custom-text-active-color u-custom-text-color u-nav-link" href="#"
            style="padding: 4px 0px; font-size: calc(1em + 8px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" >
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
              id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;"
              xml:space="preserve" class="u-svg-content">
              <g>
                <rect y="36" width="302" height="30"></rect>
                <rect y="236" width="302" height="30"></rect>
                <rect y="136" width="302" height="30"></rect>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/index.html">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/calculate.php">Buy</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/purchase.php">Purchases</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/logout.php">Logout</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div
            class="u-align-center u-container-style u-custom-color-1 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/index.html">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/calculate.php">Buy</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/purchase.php">Purchases</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <a href="calculate.php" class="u-image u-logo u-image-1" data-image-width="240" data-image-height="101">
        <img src="images/rapidkl-logo.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>
  <section class="u-clearfix u-image u-section-1" id="sec-76e7" data-image-width="1500" data-image-height="844">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-title u-text-1"></h1>
          <p class="u-large-text u-text u-text-variant u-text-2">
            <?php

            date_default_timezone_set('Asia/Kuala_Lumpur');
            // Creating database connection
            $conn = new mysqli('db','php_docker','password','monoraildb');

            // Checking connection
            if ($conn == false) {
              die("ERROR: Could not connect. " . $conn->connect_error);
            }


            $inpname = $_SESSION['username'];
            $fromss = $_SESSION['fromsss'];
            $tos = $_SESSION['tosss'];
            $categorys = $_SESSION['categorys'];
            $trips = $_SESSION['trips'];
            $froms = $_SESSION['paxx'];
            $prices = $_SESSION['prices'];
            $now = date('Y-m-d H:i:s');
            // Generate a unique ID
            $id = uniqid() . mt_rand(1000, 9999);
            // Remove the alpha characters from the ID
            $numericId = preg_replace('/[^0-9]/', '', $id);

            $sql = "INSERT INTO ticket
           (namess, identification, from_dest, to_dest, category, trip, price, date_now) VALUES
           ('$inpname', '$numericId', '$fromss', '$tos', '$categorys', '$trips', '$prices', '$now')";

            if ($conn->query($sql) == true) {
              echo "<h2>Thank you for purchasing, <b>" . $_SESSION['user_name'] ."</b></h2>";
              echo "<br>";
              echo "<h4>Transaction ID:  <b>" . $numericId . "</b></h4>";
              echo "<br>";
              echo "<h4>Date and time:  <b>" . $now . "</b></h4>";
              echo "<br>";

            } else {
              echo "ERROR: Could not able to execute $sql . " . $conn->error;
            }

            // Close connection
            $conn->close();

            ?>.&nbsp;
          </p>
          <a href="/dev_monorail/logout.php"
            class="u-active-grey-70 u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-1">Logout</a>
          <a href="/dev_monorail/index.html"
            class="u-active-grey-70 u-border-none u-btn u-button-style u-hover-palette-1-dark-2 u-btn-2">Home page</a>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-dedc">
  <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">Designed by Muhammad Adlan Aniq Bin Adli Nizam&nbsp;</p>
      <p class="u-small-text u-text u-text-variant u-text-1">Designed by Muhammad Irfan Bin Mohd Asri&nbsp;</p>
    </div>
  </footer>

</body>

</html>