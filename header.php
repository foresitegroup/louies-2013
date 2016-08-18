<?php
function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Louie's Last Regatta<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="A fun filled weekend of sailing and fund raising for Children's Hospital of Wisconsin, held off the Milwaukee shoreline in the summer warmed waters of Lake Michigan.">
    <meta name="keywords" content="Louie's Last Regatta, 10th, children's hospital, Maggie Bersch, Milwaukee charity, Mount Gay Rum, Milwaukee yacht club, sailing Milwaukee, charity regatta, best charities, best regattas, top ten regatta, sailing magazine, south shore yacht club, ale house, Milwaukee brewing company, Louie's Demise, MCSC, community sailing center, McKinley marina, Foresite Group, Remedi Creative, Harken, PHRF, Crew Challenge">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Bevan|Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime(realpath(dirname(__FILE__)) . "/inc/main.css"); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-toggle-box.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.swipebox.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle2.center.min.js"></script>
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/swipebox.css">
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        $(".swipebox").swipebox();
      });
    </script>

    <!--[if lt IE 9]><script src="<?php echo $TopDir; ?>inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->

    <?php
    if (basename(dirname($_SERVER['PHP_SELF'])) == "blog") {
      //wp_head();
      echo '<link rel="stylesheet" type="text/css" media="all" href="' . $TopDir . 'blog/wp-content/themes/louies/style.css" />';
    }
    ?>

    <!-- BEGIN Google Analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29664215-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- END Google Analytics -->
  </head>
  <body<?php if ($PageTitle == "") echo " id=\"home\""; ?>>

    <div id="sticky-footer">
      <div id="header-wrap">
        <header>
          <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Louie's Last Regatta" id="logo"></a>

          <a id="menu-toggle" data-toggle="collapse" data-target="#menu"></a>

          <nav id="menu" class="collapse">
            <ul class="clearfix">
              <li><a href="<?php echo $TopDir; ?>.">Home</a></li>
              <li>
                <a href="<?php echo $TopDir; ?>the-event.php">The Event</a>
                <ul>
                  <li><a href="<?php echo $TopDir; ?>regatta.php">Regatta</a></li>
                  <li><a href="http://mhyc.org/club-2/events/2016-poker-run/">Poker Run</a></li>
                  <li><a href="<?php echo $TopDir; ?>trophies.php">Trophies</a></li>
                  <li><a href="<?php echo $TopDir; ?>raffle.php">Raffle/Silent Auction</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo $TopDir; ?>louies-last-story.php">Louie's Last Story</a>
                <ul>
                  <li><a href="<?php echo $TopDir; ?>results.php">Results</a></li>
                  <li><a href="<?php echo $TopDir; ?>media-press.php">Media / Press</a></li>
                  <li><a href="<?php echo $TopDir; ?>gallery.php">Gallery</a></li>
                  <li><a href="<?php echo $TopDir; ?>videos.php">Videos</a></li>
                  <li><a href="<?php echo $TopDir; ?>blog">Kids Win!</a></li>
                </ul>
              </li>
              <li>
                <a href="<?php echo $TopDir; ?>sponsors.php">Sponsors</a>
                <ul>
                  <li><a href="<?php echo $TopDir; ?>become-a-sponsor.php">Become a Sponsor</a></li>
                </ul>
              </li>
              <li><a href="http://www.chw.org/giving-and-volunteers/about-childrens-hospital-foundation/2013-annual-report/kids-you-help/">About the Kids</a></li>
              <li><a href="<?php echo $TopDir; ?>giving.php">Giving</a></li>
              <li><a href="<?php echo $TopDir; ?>entry.php">Entry</a></li>
              <li><a href="<?php echo $TopDir; ?>contact.php">Contact</a></li>
            </ul>
          </nav>
        </header>
      </div> <!-- END header-wrap -->

      <div id="content-wrap">
        <article>
