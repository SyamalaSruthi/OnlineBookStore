<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Finally, destroy the session.
session_destroy();
if(isset($_GET['redirect'])) {
 header('Location: '.base64_decode($_GET['redirect']));
} else {
 header('Location: index.php');
}
?>
