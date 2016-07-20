        </article>

        <aside>
          <?php if ($PageTitle != "") { ?>
          <!-- <a href="<?php //echo $TopDir; ?>fundraising-levels-and-awards.php" class="spiff spiff-right">
            <span class="arrow">&rsaquo;</span>
            <h2 style="line-height: 1.1em;">Fundraising Levels and Awards</h2>
            Louie's gear and apparel will be awarded for achieving fundraising levels.
          </a> -->
          <?php if (strtotime("now") <= strtotime("4 September 2014 11:59pm")) { // Note: server is on Eastern Time ?>
          <a href="https://www.regattanetwork.com/clubmgmt/applet_storefront.php?regatta_id=8833" class="spiff spiff-mid" id="banner">
            <h2 style="line-height: 1.1em;">Technical Tees Preorder Available Through September 4th Only</h2>
            <strong>Very few will be available for sale at the event so order now!</strong>
          </a>
          <?php } ?>
          <!-- <div style="clear: both; height: 2em;"></div> -->
          <?php } ?>

          <a href="<?php echo $TopDir; ?>entry.php" class="spiff spiff-left">
            <span class="arrow">&rsaquo;</span>
            <h2>Enter the Race</h2>
            Register to participate online. See the rules, important dates and times here.
          </a>
          <a href="<?php echo $TopDir; ?>giving.php" class="spiff spiff-mid">
            <span class="arrow">&rsaquo;</span>
            <h2>Giving Options</h2>
            There are many ways to give and raise funds. You Sail, You Pledge, The Kids Win!
          </a>
          <a href="http://www.chw.org/giving-and-volunteers/about-childrens-hospital-foundation/2013-annual-report/kids-you-help/" class="spiff spiff-right">
            <span class="arrow">&rsaquo;</span>
            <h2>All About The Kids</h2>
            Louie's has raised over $1,088,000 for the kids at Children's Hospital of WI.
          </a>

          <?php
          if ($SideImage != "") {
            echo "
            <div id=\"side-image\">
              <div style=\"clear: both; height: 1em;\"></div>
            ";

            if (strpos($SideImage, "|") !== false) {
              echo "<div class=\"cycle-slideshow\" data-cycle-speed=\"1500\" data-cycle-timeout=\"3000\" data-cycle-auto-height=\"calc\" data-cycle-center-horz=\"true\">\n";

              $imgs = explode("|", $SideImage);
              foreach($imgs as $img) {
                echo "<img src=\"" . $TopDir . "images/$img\" alt=\"\">\n";
              }

              echo "</div>\n";
            } else {
          ?>
              <img src="<?php echo $TopDir; ?>images/<?php echo $SideImage; ?>" alt="">
            </div>
          <?php } } ?>
        </aside>

        <div style="clear: both;"></div>
      </div> <!-- END content-wrap -->
    </div> <!-- END sticky-footer -->

    <div id="footer-wrap">
      <footer>
        <a href="http://www.chw.org"><img src="<?php echo $TopDir; ?>images/logo-childrens-hospital.png" alt="Children's Hospital of Wisconsin" id="ch-logo"></a>
        
        <div id="social">
          <!-- <a href="#"><img src="<?php //echo $TopDir; ?>images/social-google-plus.png" alt="Google+"></a> -->
          <a href="http://www.facebook.com/LouiesLastRegatta"><img src="<?php echo $TopDir; ?>images/social-facebook.png" alt="Facebook"></a>
          <a href="http://twitter.com/llregatta"><img src="<?php echo $TopDir; ?>images/social-twitter.png" alt="Twitter"></a>
          <a href="https://instagram.com/louieslast"><img src="<?php echo $TopDir; ?>images/social-instagram.png" alt="Instagram"></a>
          <a href="https://www.youtube.com/channel/UCTqEGfa9SrdH_9lX22aKaqQ"><img src="<?php echo $TopDir; ?>images/social-youtube.png" alt="YouTube"></a>
        </div>
      </footer>
    </div> <!-- END footer-wrap -->

  </body>
</html>