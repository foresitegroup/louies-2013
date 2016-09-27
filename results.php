<?php
$PageTitle = "Louie's Last Results";
$SideImage = "stats-side.jpg";
include "header.php";
?>

<h3>Louie's Last Results</h3>

Past Louie's Winners and Total Money Raised for Children's Hospital of Wisconsin<br>
<br>

<strong>Maggie Bersch Cup*</strong> is awarded to the top skipper who's boat raises the most money.<br>
<em>*Formerly named the Maggie Bersch Memorial Trophy.</em><br>
<br>

<strong>Louie's Last Cup</strong> is for overall winner of regatta.<br>
<br>

<strong>Louie's Challenge</strong> is awarded to the top money raiser(s).<br>
<br>

<strong>Grassroots Cup</strong> is awarded the boat that raises the greatest number of individual donors of over $15.<br>
<br>

<strong>The Flounder</strong> is awarded to the boat with the longest elapsed time around the marks.<br>
<br>

<br>

<?php
function Color($spiff) {
  switch ($spiff) {
    case left:
      $spiff = "mid";
      break;
    case mid:
      $spiff = "right";
      break;
    default:
    case right:
      $spiff = "left";
      break;
  }
  return $spiff;
}
?>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2016</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <!-- <a href="pdfs/2016_Results.pdf">Complete Results</a><br>
    <br> -->
    <a href="http://www.regattanetwork.com/clubmgmt/applet_regatta_results.php?regatta_id=13313&show_divisions=1">Complete Results</a><br>
    <br>

    <strong>O-Gii</strong><br>
    1st - Defiance<br>
    2nd - Promo<br>
    3rd - Imeldi<br>
    <br>

    <strong>Outboard</strong><br>
    1st - Sabotage<br>
    2nd - Debbia<br>
    3rd - Meltdown<br>
    <br>

    <strong>Cutlass - Most Uniquely Attired Crew</strong><br>
    MAI TAI<br>
    <br>

    <strong>Maggie Bersch Memorial Cup for Top Fundraiser</strong><br>
    1st - Debbia<br>
    2nd - Dirty Vicar Racing<br>
    3rd - Firefly<br>
    Honorable Mention - YOLO<br>
    <br>

    <strong>Debbia Grassroots Cup for Highest Number of Individual Donors</strong><br>
    1st - Debbia<br>
    2nd - YOLO<br>
    3rd - Firefly<br>
    Honorable Mention - Eclipse<br>
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2015</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2015_Results.pdf">Complete Results</a><br>
    <br>

    <strong>Louie's Cup - Love Rock Section</strong><br>
    1st - Defiance (Dale Smirl)<br>
    2nd - Imedi (Mark Hauf)<br>
    3rd - Blue (Michael Schoendorf)<br>
    <br>

    <strong>Louie's Cup - Solomon Juneau Section</strong><br>
    1st - Prop Job (Joe McBride)<br>
    2nd - Chautauqua (Mark Ernst)<br>
    3rd - Kindred Spirit (Karl Krueger)<br>
    <br>

    <strong>Flounder</strong><br>
    Solomon Juneau - Allegro (Joe Buck)<br>
    <br>

    <strong>Cutlass - Most Uniquely Attired Crew</strong><br>
    Instigator (Matthew Merger)<br>
    <br>

    <strong>Maggie Bersch Memorial Cup for Top Fundraiser</strong><br>
    1st - YOLO (Darryl Green)<br>
    2nd - Get Kraken (Robin Olson)<br>
    3rd - Debbia (Mike Kenny)<br>
    <br>

    <strong>Debbia Grassroots Cup for Highest Number of Individual Donors</strong><br>
    1st - Debbia (Mike Kenny) - 212 donations<br>
    2nd - Eclipse (Ken Quant) - 164 donations<br>
    3rd - YOLO (Darryl Green) - 74 donations<br>
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2014</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2014_Results.pdf">Complete Results</a><br>
    <br>

    <strong>Louie's Cup - Love Rock Section</strong><br>
    1st - Defiance (Dale Smirl)<br>
    2nd - Blue (Michael Schoendorf)<br>
    3rd - Imedi (Mark Hauf)<br>
    <br>

    <strong>Louie's Cup - Solomon Juneau Section</strong><br>
    1st - Chautauqua (Mark Ernst)<br>
    2nd - Typhoon Mary (Tom Molinski)<br>
    3rd - WHO (Mike Aita)<br>
    <br>

    <strong>Poker Run</strong><br>
    1st - Steely Dan (Patric Kuptz) - Royal Flush of Diamonds<br>
    2nd - Endless Summer (Dave Erbstoetzer) - Royal Flush of Spades<br>
    3rd - Bin-Sea (Kevin Radcliffe) - Full House<br>
    <br>

    <strong>Flounder</strong><br>
    Love Rock - Sandpiper (Dick Pfoertsch)<br>
    Solomon Juneau - Windrider (Adam Brzezicka)<br>
    <br>

    <strong>Cutlass - Most Uniquely Attired Crew</strong><br>
    Meatloaf Express (Brian Kennalley, Edward Mui, &amp; Craig Roehl)<br>
    <br>

    <strong>North Sails Ugliest Spinnaker Award</strong><br>
    Mai Tai (Rick Hake)<br>
    <br>

    <strong>Maggie Bersch Memorial Cup for Top Fundraiser</strong><br>
    1st - Cayenne (Adam &amp; Susie Brotz) - $10,541<br>
    2nd - Hobgoblin (Dick Hobbs) - $8,440<br>
    3rd - s/v Debbia (Mike Kenny) - $7,600<br>
    <br>

    <strong>Debbia Grassroots Cup for Highest Number of Individual Donors</strong><br>
    1st - s/v Debbia (Mike Kenny) - 203 donations<br>
    2nd - Eclipse (Ken Quant &amp; Melissa Suring) - 102 donations<br>
    3rd - Dock Holiday (Rick &amp; Susan Kremel) - 47 donations<br>
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2013</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2013_Results.pdf">Complete Results</a><br>
    <br>

    <strong>Louie's Cup - Love Rock Section</strong><br>
    1st - Widespread Panic / Tom Peterson<br>
    2nd - TRI n Catch Me / John Achim<br>
    3rd - Blueprint / Chris Moll<br>
    <br>

    <strong>Louie's Cup - Solomon Juneau Section</strong><br>
    1st - Little Rafiki / Whitney Kent<br>
    2nd - Rafiki Mufasa / Alison Kent<br>
    3rd - Laser / Dave Poquette<br>
    <br>

    <strong>Flounder</strong><br>
    WILD IRISH / Joe Kiehm<br>
    <br>

    <strong>First Ever Poker Run</strong><br>
    1st - TAPd Out / Tom Peterson<br>
    2nd - Lakefront Condo / Robert Roberson<br>
    3rd - Seas the Day / Jesse Jacobs<br>
    <br>

    <strong>Cutlass - Most Uniquely Attired Crew</strong><br>
    HOPE / Michael Leland:  "Star Wars"<br>
    <br>

    <strong>North Sails Ugliest Spinnaker Award</strong><br>
    WHO / Mike Aita<br>
    <br>

    <strong>Maggie Bersch Memorial Cup for Top Fundraiser</strong><br>
    1st - Yippee-Ki-Yay / Gordy &amp; Jayne King<br>
    2nd - Hobgoblin / Dick Hobbs &amp; Mike Kuptz<br>
    3rd - s/v Debbia / Mike Kenny<br>
    <br>

    <strong>Debbia Grassroots Cup for Highest Number of Individual Donors</strong><br>
    1st - s/v Debbia / Mike Kenny<br>
    2nd - Hasten / Fred Stritt<br>
    3rd - Eclipse / Ken Quant &amp; Melissa Suring
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2012</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2012_Results.pdf">Complete Results</a><br>
    <br>

    <strong>Louie's Cup</strong><br>
    <strong>Love Rock Section (twice around)</strong><br>
    1st - Golden Goose - Art Mitchell<br>
    2nd - REDRUM - Scott Bruesewitz &amp; Bernie Reinhard<br>
    3rd - IMEDI - Linc Yates &amp; Marc Hauf<br>
    <br>

    <strong>Solomon Juneau Section (once around)</strong><br>
    1st - Mind the Gap - Phillip Peterson<br>
    2nd - Laser - Dave Poquette<br>
    3rd - Chance - Bob &amp; Cindy Kraus<br>
    <br>

    <strong>Flounder Award for Last Place</strong><br>
    Love Rock Section: Caribbean Soul - Glenn &amp; Wendy Ponting<br>
    Solomon Juneau Section: Green Eyed Girl - Michael Pritzkow<br>
    <br>

    <strong>Most Uniquely Attired Crew</strong><br>
    "Peter Pan" - Harry Corbett &amp; The Crew of TFWB Relentless<br>
    <br>

    <strong>North Sails Ugliest Spinnaker Award</strong><br>
    Vesta - Pete Duecker<br>
    <br>

    <strong>Maggie Bersch Cup for Top Fundraiser</strong><br>
    1st - Yippie-Ki-Yay - Gordy &amp; Jayne King<br>
    2nd - Dock Holiday - Richard Kremel<br>
    3rd - The Sliders - Emma, Ainsley &amp; Fiona Berger<br>
    <br>

    <strong>The Debbia Grassroots Cup for Highest Number of Individual Donors</strong><br>
    1st - Debbia - Mike Kenny<br>
    2nd - Eclipse - Ken Quant &amp; Melissa Suring<br>
    3rd - Defiance - Dale Smirl
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2011</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    No race was sailed in 2011 due to water spouts<br>
    <br>

    <strong>Flaming Damsel Section Skippers' Footrace Awards</strong><br>
    Louie's Last Cup - 1st Mike Sabinash / Sabotage<br>
    2nd - Jeremy Burns / Heatwave<br>
    3rd - Greg Adams / Sociable<br>
    <br>

    <strong>Solomon Juneau Card Draw Awards</strong><br>
    Louie's Last Cup - 1st Don Doggett / Summer Hours<br>
    2nd - Ed Purcell / F-Stop<br>
    3rd - John Sutphen / Second Edition<br>
    <br>

    Flounder Award - For Last Place - Mark Johnson / Dirty Rat<br>
    The Cutlass - For The Most Uniquely Attired Crew - Michael Leland the crew on HOPE (Pregnant) Snow White and the Seven Dwarves<br>
    <br>

    <strong>Fund-Raising Awards</strong><br>
    Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
    For The Top Fund Raising Skippers and Crews<br>
    1st - Adam Brotz/Preston Wake and the crew of Chance/Twister<br>
    2nd - Adam Berger and the crew of Impetuous<br>
    3rd - Jim &amp; Cheryl Kelly and the crew of Bounder<br>
    <br>

    $69,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2010</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2010_Results.pdf">Complete Results</a><br>
    <br>

    112 boats finished the race out of 135 registered<br>
    <br>

    <strong>Flaming Damsel Section (twice around)</strong><br>
    Louie's Last Cup - 1st Scott Conger / Alliance<br>
    2nd - Art Mitchel / Snow Goose<br>
    3rd - Chris Moll / Blue Moon<br>
    <br>

    <strong>Solomon Juneau Section (once around)</strong><br>
    Louie's Last Cup -1st Phil Peterson / Mind the Gap<br>
    2nd - Mark Ernst / Chautauqua<br>
    3rd -Dave Poquette / Laser 187723<br>
    <br>

    Flounder Award (Flaming Damsel) - For Last Place - Ken Deboer / Pirate Dog<br>
    Flounder Award (Solomon Juneau) - For Last Place - Doug Gallus / Mousekateer<br>
    The Cutlass - For The Most Uniquely Attired Crew - Alice Martin and her crew on Painkiller 4<br>
    <br>

    <strong>Fund-Raising Awards</strong><br>
    Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
    For The Top Fund Raising Skippers and Crews<br>
    1st - Jayne and Gordy King and crew of Yippe-Ki-Yay<br>
    2nd - Dan Wright and crew on Maggie<br>
    3rd - Adam Brotz and the crew of Chance<br>
    <br>

    $125,015 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2009</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2009_Results.pdf">Complete Results</a><br>
    <br>

    Louie's Last Cup - 1st Tassi deFelice / Skimbishanks<br>
    2nd - Scott and Debbie Bruesewitz / REDRUM<br>
    3rd - Jamie Hummert / Scout<br>
    <br>

    Flounder Award - For Last Place - Rick Schoos / Phantom<br>
    The Cutlass - For The Most Uniquely Attired Crew - Whitney and Alison Kent on Impetuous II<br>
    <br>

    <strong>Fund-Raising Awards</strong><br>
    Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
    For The Top Fund Raising Skippers and Crews<br>
    1st - Dan Wright / Maggie<br>
    2nd - Jayne &amp; Gordy King / Yippie-Ki-Yay<br>
    3rd - Michael Nauman / Windhunter
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2008</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2008_Results.pdf">Complete Results</a><br>
    <br>

    Louie's Last Cup - 1st Bill Schanen III / Main Street<br>
    2nd - Jamie Hummert / Scout<br>
    3rd - Auggie Barkow / Big Wheels<br>
    <br>

    Flounder Award - For Last Place - Jim Kerlin / Blue Pearl<br>
    The Cutlass - For The Most Uniquely Attired Crew - Adam Berger &amp; Crew / Impetuous<br>
    <br>

    <strong>Fund-Raising Awards</strong><br>
    Louie's Challenge for the Maggie Bersch Memorial Trophy<br>
    For The Top Fund Raising Skippers and Crews<br>
    1st - Fred &amp; Cynthia Stritt / Hasten<br>
    2nd - Scott &amp; Debbie Bruesewitz / Redrum<br>
    3rd - John &amp; Ellen Kuber / Promo
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2007</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2007_Results.pdf">Complete Results</a><br>
    <br>

    Louie's Last Cup - 1st - deFelice / Looking for a Name<br>
    2nd - Brown / Naiya - Team Impetuous<br>
    3rd - Reinhard &amp; Bruesewitz / REDRUM<br>
    <br>

    Flounder Award - For Last Place- Roedig / Trimatic<br>
    The Cutlass - For Most Uniquely Attired Crew - Rob Morton / Edge<br>
    <br>

    Louie's Challenge (green flag) - John &amp; Ellen Kuber and Clay &amp; Cynthia Feller / Promo<br>
    Scott &amp; Debbie Bruesewitz / REDRUM<br>
    Gordy King / Yippi-Ki-Yay<br>
    <br>

    $131,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2006</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2006_Results.pdf">Complete Results</a><br>
    <br>

    Louie's Last Cup - 1st - Special Sauce<br>
    2nd - Strait Jacket<br>
    3rd - Veloce<br>
    <br>

    Flounder Award - Mai Tai<br>
    Maggie Bersch Memorial Trophy - Scott &amp; Debbie Bruesewitz / Some Assembly Required<br>
    <br>

    Louie's Challenge (green flag) - Scott &amp; Debbie Bruesewitz / Some Assembly Required<br>
    John &amp; Ellen Kuber / Promo<br>
    Richard &amp; Christine Hobbs / Hobgoblin
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2005</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    <a href="pdfs/2005_Results.pdf">Complete Results</a><br>
    <br>

    Louie's Last Cup - 1st - Naiya<br>
    2nd- Stealth<br>
    3rd- Hasten<br>
    <br>

    Maggie Bersch Memorial Trophy - Michael Bersch / Dirty Vicar<br>
    <br>

    Louie's Challenge - Michael Bersch / Dirty Vicar<br>
    Matt Suminski / The Concept<br>
    John &amp; Ellen Kuber / Promo<br>
    <br>

    $80,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2004</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    Louie's Last Cup - 1st - Strait Jacket<br>
    2nd - Still Married After All These Beers<br>
    3rd - Hasten<br>
    <br>

    Louie's Challenge - Tom Young / Forever Young<br>
    Michael Bersch / Dirty Vicar<br>
    Clay Feller / Bullseye<br>
    <br>

    $60,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2003</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    Louie's Last Cup - Mosquito<br>
    Louie's Challenge - Clay Feller / Quicksilver<br>
    Matt Suminski / Dirty Vicar<br>
    <br>

    $30,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2002</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    Louie's Last Cup - Alliance<br>
    Louie's Challenge - Clay Feller / Bullseye<br>
    Matt Suminski / The Concept<br>
    <br>

    $30,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2001</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    Louie's Last Cup - LBS<br>
    Louie's Challenge - Richard Hobbs / Hobgoblin<br>
    $12,500 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>2000</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    Louie's Last Cup - Alliance<br>
    <br>

    $5,000 raised for Children's Hospital
  </div>
</div>

<div class="toggle-box spiff-<?php $spiff = Color($spiff); echo $spiff; ?>">
  <h3>1999</h3>
  <div class="toggle-control" data-text="expand &#9660;" data-expanded-text="contract &#9650;">expand &#9660;</div>
  <div style="clear: both;"></div>
  <div class="toggle-content">
    Louie's Last Cup - Ragdoll<br>
    <br>

    $900 raised for Children's Hospital
  </div>
</div>

<?php include "footer.php"; ?>