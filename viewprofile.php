<?php
session_start();
error_reporting(0);
// If you are not logged in we will skip an error because do not find the following variable
// For this reason we used previously error recording
//It is not advisable to use it, but in this case because we know that there are no errors we use it 
if ($_SESSION['loggedin']){
  $url = array_pop(explode('/', $_SERVER['PHP_SELF']));
  require ('includes/html/header.php');
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('mysqli_connect.php'); // Connect to the db.
              
            $errors = array(); // Initialize an error array.
            
            // Check for a username:
            if (empty($_POST['username'])) {
              $errors[] = 'You forgot to enter your username.';
            } else {
              $un = mysqli_real_escape_string($dbc, trim($_POST['username']));
            }
            
            // Check for a email:
            if (empty($_POST['email'])) {
              $errors[] = 'You forgot to enter your email.';
            } else {
              $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
            }
            // Check for a password and match against the confirmed password:
            if (!empty($_POST['pass1'])) {
              if ($_POST['pass1'] != $_POST['pass2']) {
                $errors[] = 'Your password did not match the confirmed password.';
              } else {
                $p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
              }
            } else {
              $errors[] = 'You forgot to enter your password.';
            }
            
            if (empty($errors)) {
            // Register the user in the database...
            // Make the query:
            $id = $_SESSION['id'];
            $q = "UPDATE users SET username='$un', pass=SHA1('$p'), email='$e'  WHERE user_id='$id'";		
            $r = @mysqli_query ($dbc, $q); // Run the query.
            // Variable $row hold the result of the query
            $row = mysqli_fetch_assoc($r);

            if ($r) { // If it ran OK.
              header('Location: login.php');
              mysqli_close($dbc); // Close the database connection.
              exit();
            } else { // If it did not run OK.
              // Public message:
                echo '<h1>System Error</h1>
                <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
                // Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
                    }
            }
            else{
              echo '<h1>Error!</h1>
              <p class="error">The following error(s) occurred:<br />';
              foreach ($errors as $msg) { // Print each error.
                echo " - $msg<br />\n";
              }// End of if ($r) IF.
              echo '</p><p>Please try again.</p><p><br /></p>';
            }// End of if (empty($errors)) IF.
            mysqli_close($dbc); // Close the database connection.
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ViewProfile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="includes/css/quizsamar.css" rel="stylesheet">   
</head>
<body>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 text-center" style="margin-left:25%">
        <div class="form">
      <h1>Change Your User Data </h1> 
      <p>Here you can change your user data, if you do not want to change your username or email just enter your current data </p>
      <br>
<form action="viewprofile.php" method="POST">
    <b>Username:</b>
    <input type="text" name="username" size="10" maxlength="20" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
    <b>Email Address:</b>
    <input type="email" name="email" size="10" maxlength="50" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
    <b>New Password:</b>
    <input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>">
    <b>Confirm New Password:</b> 
    <input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">
    <br>
    <br>
	    <button type="submit">Save changes</button>
</form>
    </div>
  </div>
</div>
</div>
<?php include("includes/html/footer.html");
}
// If you have not logged in you can not access the page
else{echo "<center><img src='includes/images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='login.php'>here</a><h1></center>";}?>
</body>
</html>
