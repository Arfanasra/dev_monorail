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
  <title>Buy Now</title>
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
      <a href="/dev_monorail/index.html" class="u-image u-logo u-image-1" data-image-width="240"
        data-image-height="101">
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
            $pax = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
            $destination = array("KL Sentral", "Tun Sambathan", "Maharajalela", "Hang Tuah", "Imbi", "Bukit Bintang", "Raja Chulan", "Bukit Nenas", "Medan Tuanku", "Chow Kit", "Titiwangsa");
            $category = array("senior citizens", "disabled", "student", "Adult");
            ?>



          <div class="form-container">

            <form method=" get" action="confirm.php">
              <fieldset>
                <h1>Welcome
                  <span>
                    <?php echo $_SESSION['user_name'] ?>
                  </span>
                </h1>
                <br>

                <b>Category : </b>
                <input type='radio' name='trip' value="One-way" checked><label><b>One-way</b></label>
                <input type='radio' name='trip' value="Round trip"><b>Round trip</b>
                <br>
                <br>

                <?php
                $_SESSION['username'] = $_SESSION['user_name']
                  ?>
                <b><label for='quantity'>Token Quantity ( Max - 10 ) : </label></b>
                <input type='number' value="1" id='quantity' name='pax' min='1' max='10'>

                <br><br>

                <b>Category : </b>
                <br>
                <input type='radio' name='category' value='Adult' checked> <label><b>Adult</b></label>
                <br>
                <input type='radio' name='category' value='senior citizens'> <b>Senior citizens</b><br>
                <input type='radio' name='category' value='disabled'> <b>Disable</b>
                <br>
                <input type='radio' name='category' value='student'> <b>Student</b>

                <br><br>

                <b>From:</b>
                <select name='from' required>
                  <option value=''>Choose your destination</option>
                  <?php
                  for ($row = 0; $row < 11; $row++) {
                    echo "<option value='$row'>" . $destination[$row] . "</option>";
                  }
                  ?>
                </select>
                <br><br>
                <b>To:</b>
                <select name='to' required>
                  <option value=''>Choose your destination</option>
                  <?php
                  for ($col = 0; $col < 11; $col++) {
                    echo "<option value='$col'>" . $destination[$col] . "</option>";
                  }
                  ?>
                </select>
                <br><br>
                <input type="submit" value="Confirm"
                  class="u-active-grey-70 u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-1" />
                <input type="reset"
                  class="u-active-grey-70 u-border-none u-btn u-button-style u-hover-palette-1-dark-2 u-btn-2">
              </fieldset>
            </form>

          </div>
        </div>
        &nbsp;
        </p>


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