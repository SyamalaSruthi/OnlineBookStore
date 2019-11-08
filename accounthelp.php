<?php
  session_start();

  require "./template/header.php";
?>
<h3><b> HELP </b></h3>
<ol>
  <li>Need to sign in? click <a href = "login.php">Here</a>.</li><br/>
  <li>Need help in checking out, click <a href = "checkout.php">Here</a>.</li><br/>
  <li>Update user information, click <a href="profile.php">Here</a>.</li><br/>
</ol>
<h3><b> FAQ </b></h3>
<ul><li> How do I create my own account?</ul>
  <p>Need help with Registration, click <a href = "register.php">Here</a>.<p></br>
<ul><li> How do I know if the book I wanted to request is available? </ul>
  <p>If you want to ask any question to the librarian, please click <a href = "contact.php">Here</a>.</p></br>
<ul><li> How do I make payments </ul>
  <p>Have Billing Questions? call to +180-123-4567</p></br>
<br><br><br>

<?php
  require "./template/footer.php";
?>
