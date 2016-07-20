<?php
$PageTitle = "Contact";
$SideImage = "";
include "header.php";
?>

<h3>Contact</h3>

<div class="mailchimp">
  Please submit your email address to receive timely information about Louie's Last Regatta<br>
  <!-- Begin MailChimp Signup Form -->
  <form action="http://louieslast.us4.list-manage.com/subscribe/post" method="POST" style="width: 100%;">
    <div>
      <input type="hidden" name="u" value="b23085d512d7c9313b2f75d84">
      <input type="hidden" name="id" value="7615da59fd">

      <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">

      <input type="submit" name="submit" value="Subscribe" id="submit">
    </div>
  </form>
  <!-- End MailChimp Signup Form -->
</div>

<div class="one-half">
  <strong>Event<br>Milwaukee Ale House</strong><br>
  233 N. Water Street #1<br>
  Milwaukee, WI 53202<br>
  <strong>Phone</strong> 414-276-2337<br>
  <br>

  <strong>Mailing Address</strong><br>
  Louie's Last Regatta<br>
  PO Box 45<br>
  Milwaukee, WI 53201<br>
  <br>

  <strong>Email</strong><br>
  <?php email("contactus@louieslast.org"); ?>
</div>

<div class="one-half last">
  <strong>Committee</strong><br>
  Gordy King<br>
  Mary Livingston<br>
  Rebecca Mueller<br>
  Sir Jon Mueller<br>
  Tiffany Cvikota<br>
  Song Xiong<br>
  Angie Doggett<br>
  Francis Morton<br>
  Nick Cusatis
</div>

<div style="clear: both;"></div>

If you have time, talent, and desire to help continue growing Louie's and fundraising for Children's Hospital of Wisconsin, we want to talk to you!  This could be at the official board level, and/or informally as part of the dozens of volunteers needed on various sub-committees.  Please email the board at <?php email("contactus@louieslast.org"); ?>!<br>
<br>

Louie's Last Regatta, Inc. is a 501(c)3 charitable organization. The IRS issued EIN is 27-0984021; date of exemption status September 23, 2009.

<?php include "footer.php"; ?>