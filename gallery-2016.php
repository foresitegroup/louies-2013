<?php
$PageTitle = "Gallery";
$SideImage = "";
include "header.php";
?>

<h3>Gallery</h3>

<strong>Share Your Photos &amp; Videos With Us!</strong><br>
Your Louie's Committee is looking for pictures to share with everyone on Facebook. Show off any great photos (or videos) you've taken on the <a href="http://www.facebook.com/LouiesLastRegatta">Louie's Last Regatta Facebook page</a>.<br>
<br>

<strong>2016 Louie's Last Regatta</strong><br>
<div id="gallery">
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
    list($width, $height, $type, $attr) = getimagesize($result);

    $ratio = ceil(($width / $height) * 100);
    $adjust = ($ratio - 100) / 2;

    $adj_pos = ($width/$height > 1) ? "width: " . $ratio . "%; left: -" . $adjust . "%;" : "width: 100%; top: " . $adjust . "%;";

    $name = pathinfo(basename($result), PATHINFO_FILENAME);

    echo "<div class=\"resize\"><a href=\"$result\" class=\"swipebox\"><img src=\"$result\" alt=\"$name\" style=\"$adj_pos\"></a></div>\n";
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
    list($width, $height, $type, $attr) = getimagesize($result);

    $ratio = ceil(($width / $height) * 100);
    $adjust = ($ratio - 100) / 2;

    $adj_pos = ($width/$height > 1) ? "width: " . $ratio . "%; left: -" . $adjust . "%;" : "width: 100%; top: " . $adjust . "%;";

    $name = pathinfo(basename($result), PATHINFO_FILENAME);

    echo "<div class=\"resize\"><a href=\"$result\" class=\"swipebox\"><img src=\"$result\" alt=\"$name\" style=\"$adj_pos\"></a></div>\n";
  }
  ?>

  <div style="clear: both;"></div>
</div>

<?php include "footer.php"; ?>