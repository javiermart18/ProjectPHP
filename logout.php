<?php
// Initialize the session. 
session_start();

// Destroy all session variables. 
$_SESSION = array();

// Finally, destroying the session. 
session_destroy();

echo "<center><h1 style='margin-top:12%'>
      The session has been successfully closed.<br>
      Click <a href='index.html'>here</a> to access the main page 
      </h1></center>";
?>
