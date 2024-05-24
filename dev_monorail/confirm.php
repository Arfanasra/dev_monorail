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
  <title>Ticket Confirmation</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="confirm.css" media="screen">
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
  <meta property="og:title" content="confirm">
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
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302">
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
      <a href="/dev_monorail/calculate.php" class="u-image u-logo u-image-1" data-image-width="240"
        data-image-height="101">
        <img src="images/rapidkl-logo.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>
  <section class="u-clearfix u-image u-section-1" id="sec-76e7" data-image-width="1500" data-image-height="844">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1 "><br>
          <h1 class="u-text u-title u-text-1">Confirm your ticket</h1>
          <p class="u-large-text u-text u-text-variant u-text-2">
            <?php

            $from = array("KL Sentral", "Tun Sambathan", "Maharajalela", "Hang Tuah", "Imbi", "Bukit Bintang", "Raja Chulan", "Bukit Nenas", "Medan Tuanku", "Chow Kit", "Titiwangsa");
            $to = array("KL Sentral", "Tun Sambathan", "Maharajalela", "Hang Tuah", "Imbi", "Bukit Bintang", "Raja Chulan", "Bukit Nenas", "Medan Tuanku", "Chow Kit", "Titiwangsa");
            $category = array("senior citizens", "disabled", "student", "Adult");
            $rates = array(
              array(0, 1.20, 1.60, 1.60, 1.60, 2.10, 2.10, 2.10, 2.50, 2.50, 2.50),
              array(1.20, 0, 1.20, 1.60, 1.60, 1.60, 2.10, 2.10, 2.10, 2.50, 2.50),
              array(1.60, 1.20, 0, 1.20, 1.20, 1.60, 1.60, 1.60, 2.10, 2.10, 2.50),
              array(1.60, 1.60, 1.20, 0, 1.20, 1.20, 1.20, 1.60, 1.60, 2.10, 2.10),
              array(1.60, 1.60, 1.20, 1.20, 0, 1.20, 1.20, 1.60, 1.60, 1.60, 2.10),
              array(2.10, 1.60, 1.60, 1.20, 1.20, 0, 1.20, 1.20, 1.60, 1.60, 2.10),
              array(2.10, 2.10, 1.60, 1.20, 1.20, 1.20, 0, 1.20, 1.20, 1.60, 1.60),
              array(2.10, 2.10, 1.60, 1.60, 1.60, 1.20, 1.20, 0, 1.20, 1.20, 1.60),
              array(2.50, 2.10, 2.10, 2.10, 1.60, 1.60, 1.60, 1.20, 0, 1.20, 1.20),
              array(2.50, 2.50, 2.10, 2.10, 1.60, 1.60, 1.60, 1.20, 1.20, 0, 1.20),
              array(2.50, 2.50, 2.50, 2.10, 2.10, 2.10, 1.60, 1.60, 1.60, 1.20, 0),


            );

            $fromdest = $_REQUEST['from'];
            $todest = $_REQUEST['to'];
            $type = $_REQUEST["category"];
            $ways = $_REQUEST['trip'];
            $pax = $_REQUEST['pax'];
            $charge = $rates[$fromdest][$todest];

            if ($charge != 0) {
              switch ($ways) {

                case "Round trip":

                  switch ($type) {
                    case "senior citizens":
                      $charge = $rates[$fromdest][$todest];
                      $last = $charge * 0.25;
                      $okk = $charge - $last;
                      $final = $okk * 2;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];
                      echo "<br>";
                      echo "<h5>Type of trip: <b>Round Trip</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Senior Citizen</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";

                      break;

                    case "disabled":
                      $charge = $rates[$fromdest][$todest];
                      $last = $charge * 0.40;
                      $okk = $charge - $last;
                      $final = $okk * 2;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];
                      echo "<br>";
                      echo "<h5>Type of trip: <b>Round Trip</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Disabled</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";
                      break;

                    case "student":
                      $charge = $rates[$fromdest][$todest];
                      $last = $charge * 0.30;
                      $okk = $charge - $last;
                      $final = $okk * 2;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];
                      echo "<br>";
                      echo "<h5>Type of trip: <b>Round Trip</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Student</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";
                      break;

                    case "Adult":
                      $charge = $rates[$fromdest][$todest];
                      $final = $charge * 2;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];
                      echo "<br>";
                      echo "<h5>Type of trip: <b>Round Trip</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Adult</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";
                      break;

                    default:

                  }
                  break;


                case "One-way":

                  switch ($type) {
                    case "senior citizens":
                      $charge = $rates[$fromdest][$todest];
                      $last = $charge * 0.25;
                      $final = $charge - $last;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];

                      echo "<br>";
                      echo "<h5>Type of trip: <b>One-way</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Senior Citizen</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";
                      break;

                    case "disabled":
                      $charge = $rates[$fromdest][$todest];
                      $last = $charge * 0.40;
                      $final = $charge - $last;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];

                      echo "<br>";
                      echo "<h5>Type of trip: <b>One-way</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Disabled</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";
                      break;

                    case "student":
                      $charge = $rates[$fromdest][$todest];
                      $last = $charge * 0.30;
                      $final = $charge - $last;
                      $price = $final * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];

                      echo "<br>";
                      echo "<h5>Type of trip: <b>One-way</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Student</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity:  <b>" . ($pax) . "</b></h5>";
                      break;

                    case "Adult":
                      $charge = $rates[$fromdest][$todest];
                      $price = $charge * $pax;
                      $from = $from[$fromdest];
                      $to = $to[$todest];

                      echo "<br>";
                      echo "<h5>Type of trip: <b>One-way</b></h5>";
                      echo "<h5>To:  <b>" . $from . "</b></h5>";
                      echo "<h5>From:  <b>" . $to . "</b></h5>";
                      echo "<h5>Category:  <b>Adult</b></h5>";
                      echo "<h5>Total: <b>RM" . number_format($price, 2) . "</b></h5>";
                      echo "<h5>Quantity: <b>" . ($pax) . "</b></h5>";

                      

                      break;

                    default:

                  }
                  break;
                default:

              }
            } else {
              echo "<br>";
              echo "<h5>You just choose the same destination  from <b>$from[$fromdest]</b> to  <b>$from[$fromdest]</b>" . "</h5>";
              echo "<h5>Please press the back button below to start again</h5>";
              function myErrorHandler($errno, $errstr, $errfile, $errline)
              {
                if ($errno == E_WARNING) {
                  // ignore warning
                  return;
                }
                // handle other errors
              }
              set_error_handler('myErrorHandler');
            }

            $_SESSION['fromsss'] = $from;
            $_SESSION['tosss'] = $to;
            $_SESSION['categorys'] = $type;
            $_SESSION['trips'] = $ways;
            $_SESSION['paxx'] = $pax;
            $_SESSION['prices'] = $price;
            $_SESSION['username'];



            ?>&nbsp;
          </p>
            <?php
            if ($from != $to) {
              echo '<a href="/dev_monorail/calculate.php" style"justify-content: center;"
          class="u-active-grey-70 u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-1">Back</a>
        <a href="/dev_monorail/ticket.php"';
                    echo 'class="u-active-grey-70 u-border-none u-btn u-button-style u-hover-palette-1-dark-2 u-btn-2">Confirm
        </a>';
            }
            else {
              echo '<a href="/dev_monorail/calculate.php"
          class="u-active-grey-70 u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-11">Back</a>';
            }

          ?>
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