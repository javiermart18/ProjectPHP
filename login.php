<?php
$page_title = 'Login';

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  require ('mysqli_connect.php'); // Connect to the db.
  
  $errors = array(); // Initialize an error array.

  // Check for a username:
	if (empty($_POST['username'])) {
		$errors[] = 'You forgot to enter your username.';
	} else {
		$un = mysqli_real_escape_string($dbc, trim($_POST['username']));
  }

  	// Check for a password:
	if (empty($_POST['pass'])) {
		$errors[] = 'You forgot to enter your password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
  }
  
  if (empty($errors)) {
    
      // Search the user in the database...
      
      // Make the query:
      $q = "SELECT user_id, username, pass FROM users WHERE username='$un'";	
      $r = @mysqli_query ($dbc, $q); // Run the query.

      // Variable $row hold the result of the query
    	$row = mysqli_fetch_assoc($r);
	
      // Variable $hash hold the password hash on database
      $hash = $row['pass'];
      $pass = SHA1($_POST['pass']);
      if ($pass == $hash) {
        //Create session
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['uname'] = $row['username'];
        header('Location: start.php');
      } else {
        	// Public message:	
      header('Location: login.php');
      }	
      mysqli_close($dbc); // Close the database connection.
      
          // Include the footer and quit the script:
          //include ('includes/footer.html'); 
          exit();
          
    } else { // Report the errors.
          
            echo '<h1>Error!</h1>
            <p class="error">The following error(s) occurred:<br />';
            foreach ($errors as $msg) { // Print each error.
              echo " - $msg<br />\n";
            }
            echo '</p><p>Please try again.</p><p><br /></p>';
            
    } // End of if (empty($errors)) IF.
          
          mysqli_close($dbc); // Close the database connection.
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="includes/css/quizsamar.css" rel="stylesheet">   
<style>
    
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
</style>
</head>
<body>
    <div class="container1">
        <form action="login.php" method="post">
            <center><h2>Sign in</h2></center>
  <div class="imgcontainer">
    <center><img src="includes/images/imglogin.png" alt="Avatar" class="avatar" width="50px" height="50px"></center>
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
      
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    
    <button type="submit">Sign in</button>

  </div> 
  <div>
    <center><p>If you have not registered in this page, <a href="register.php">click here</a></p></center>
  </div>
</form>
</div>
</body>
</html>
