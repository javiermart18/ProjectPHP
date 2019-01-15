<?php
$page_title = 'Register';

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
      $q = "SELECT username, pass FROM users WHERE username='$un'";	
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
        //$_SESSION['id'] = $row['user_id'];
        $_SESSION['uname'] = $row['username'];	
        header('Location: start.php');
      } else {
        echo "Wrong arguments";
        /*
        echo "<div class='alert alert-danger' role='alert'>Email or Password are incorrects!
        <p><a href='login.html'><strong>Please try again!</strong></a></p></div>";	
        */		
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
 <link href="loginCSS.css" rel="stylesheet">   
<style>
    
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
</style>
</head>
<body>
    <div class="container4">
    <h2>Welcome to QuizSaMar</h2>
    </div>
    <br>

    <div class="container1">
        <form action="login.php" method="post">
            <center><h2>Sign in</h2></center>
  <div class="imgcontainer">
    <img src="images/imglogin.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
      
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    
    <button type="submit">Sign in</button>

  </div> 
  <div>
    <p>If you have not registered in this page, <a href="register.php">click here</a></p>
  </div>
</form>
    </div>
    
<div class="footer">
  <p>© 2019 QuizSaMar, Inc. All rights reserved.</p>
</div>
    

</body>
</html>
