<?php
$PageTitle = "Gallery";
$SideImage = "";
include "header.php";
?>

<link rel="stylesheet" href="inc/jquery.fancybox.css">
<script type="text/javascript" src="inc/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
  $(document).ready(function() { $(".fancybox").fancybox(); });
</script>

<h3>Gallery</h3>

<strong>Share Your Photos &amp; Videos With Us!</strong><br>
Your Louie's Committee is looking for pictures to share with everyone on Facebook. Show off any great photos (or videos) you've taken on the <a href="http://www.facebook.com/LouiesLastRegatta">Louie's Last Regatta Facebook page</a>.<br>
<br>

100% of the proceeds from your photo purchases goes straight to Children's Hospital of Wisconsin!<br>
<br>

<strong>2016 Louie's Last Regatta</strong><br>
<div id="gallery-foto">
  <?php
  $main_dir = "images/galleries/2016";

  $files = scandir($main_dir);
  foreach($files as $file) {
    // Ignore non-files
    if ($file == "." || $file == "..") continue;

    // Put results into an array
    $results[] = $main_dir . "/" . $file;
  }

  natcasesort($results);

  foreach($results as $result) {
    echo "<a href=\"$result\" class=\"swipebox\"><img src=\"$result\" alt=\"\"></a><br><br>\n";
  }
  ?>

  <div style="clear: both;"></div><br>
  <br>

  <strong>Photo Booth</strong><br>
  <?php
  $results = array();
  $main_dir = "images/galleries/2016-photobooth";

  $files = scandir($main_dir);
  foreach($files as $file) {
    // Ignore non-files
    if ($file == "." || $file == "..") continue;

    // Put results into an array
    $results[] = $main_dir . "/" . $file;
  }

  natcasesort($results);

  foreach($results as $result) {
    echo "<a href=\"$result\" class=\"swipebox\"><img src=\"$result\" alt=\"$name\"></a><br><br>\n";
  }
  ?>

  <div style="clear: both;"></div>
</div>

<script type="text/javascript" src="//widget.fotomoto.com/stores/script/950b78e7b7b6a212636d43a95f2a3cbf8ab66b37.js"></script>
<noscript>If Javascript is disabled in your browser, to place orders please visit the page where I <a href=' http://my.fotomoto.com/store/950b78e7b7b6a212636d43a95f2a3cbf8ab66b37'>sell my photos</a>, powered by <a href='http://my.fotomoto.com'>Fotomoto</a>.</noscript>

<?php include "footer.php"; ?>