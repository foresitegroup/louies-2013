<?php
$PageTitle = "Become a Sponsor";
$SideImage = "sponsors/foresite-group.png|sponsors/milwaukee-brewing-company.png|sponsors/ameriprise-financial.png|sponsors/north-sails.png";
include "header.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "Remedi";
?>

<h3>Become a Sponsor</h3>

<?php
if (isset($_POST['submit']) && $_POST['confirmation'] == "") {
  $SendTo = "contactus@louieslast.org";
  $Subject = "Sponsor Enquery";
  $From = "From: Contact Form <sponsors@louieslast.org>\r\n";
  if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
  
  if ($_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $Message .= "Name: " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])];
  if ($_POST[md5('organization' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $Message .= "\nOrganization / Company: " . $_POST[md5('organization' . $_POST['ip'] . $salt . $_POST['timestamp'])];
  if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $Message .= "\nEmail: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])];
  if ($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
    $Message .= "\nPhone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])];

  if ($_POST['interest'] != "")
    $Message .= "\n\nWe are interested in: " . implode(", ", $_POST['interest']);

  if ($_POST['comment'] != "")
    $Message .= "\n\nComment\n" . $_POST['comment'] . "\n";
  
  mail($SendTo, $Subject, $Message, $From);
  //echo "<pre>".$Message."</pre>";
  
  echo "Thank you for your interest in sponsoring Louie's Last Regatta. We will contact you soon.";
} else {
?>

<script type="text/javascript">
  function checkform (form) {
    if (document.getElementById('name').value == "") { alert('Name required.'); document.getElementById('name').focus(); return false ; }
    if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
    if (document.getElementById('phone').value == "") { alert('Phone required.'); document.getElementById('phone').focus(); return false ; }
    if (document.getElementById('comment').value == "") { alert('Comment required.'); document.getElementById('comment').focus(); return false ; }
    return true;
  }
</script>

<form action="become-a-sponsor.php" method="POST" onSubmit="return checkform(this)">
  <div>
    <label for="name">Name</label>
    <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name"><br>
    <br>
    
    <label for="organization">Organization / Company</label>
    <input type="text" name="<?php echo md5("organization" . $ip . $salt . $timestamp); ?>" id="organization"><br>
    <br>
    
    <label for="email">Email</label>
    <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email"><br>
    <br>

    <label for="phone">Phone</label>
    <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone"><br>
    <br>

    <label for="interest">We are interested in:</label>
    <div class="form-left">
      <input type="checkbox" name="interest[]" id="interest" value="Donating money"> Donating money<br>
      <input type="checkbox" name="interest[]" id="interest" value="Donating time"> Donating time
    </div>
    <div class="form-right">
      <input type="checkbox" name="interest[]" id="interest" value="Contributing raffle item(s)"> Contributing raffle item(s)<br>
      <input type="checkbox" name="interest[]" id="interest" value="Other"> Other
    </div>
    <div style="clear: both;"></div>
    <br>
    
    <label for="comment" style="width: auto;">Comment</label>
    <textarea name="comment" id="comment"></textarea><br>
    <br>
    
    <input type="text" name="confirmation" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>
    
    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
    
    <input type="submit" name="submit" value="Submit" id="submit">
  </div>
</form>

<?php } ?>

<?php include "footer.php"; ?>