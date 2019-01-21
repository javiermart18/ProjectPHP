<?php
session_start();
error_reporting(0);
// If you are not logged in we will skip an error because do not find the following variable
// For this reason we used previously error recording
//It is not advisable to use it, but in this case because we know that there are no errors we use it 
if ($_SESSION['loggedin']){
  $url = array_pop(explode('/', $_SERVER['PHP_SELF']));
  include ('includes/html/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz SaMar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="includes/css/quizsamar.css" rel="stylesheet">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <h1>The rules</h1>
    <br>
      <p>We do not like rules very much, but as all games have some, then we explain them to you.</p>
      <p>It is not necessary to answer all the questions</p>
      <p>Incorrect or unanswered questions do not remain</p>
      <p>You can not go back once the test is done</p>
      <p>You can not repeat the same test until after one day</p>
      <p>If the above occurs, we may disqualify you and you may not be in the ranking</p>
      <br>
      <h4>These are our rules, if you agree with them you can start to perform the tests</h2>
    </div>
    <div class="col-sm-8 text-center"> 
      <h1>WELCOME <?php echo $_SESSION['uname']?></h1>
      <p>Welcome to QuizSaMar, a page where you can test programming languages, while you learn you can compete against other users of the page to see who is able to get more points.</p>
      <p>The programming languages ​​are currently php, html and javascript but we will be updating more languages.</p>
      <p>Let the game begin... LUCK</p>
      <hr>

      <h3>PHP</h3>
      <p><a href="includes/test/test1-1php.php">Test 1.1 - Introduction to PHP</a></p>
      <p><a href="includes/test/test1-2php.php">Test 1.2 - Medium level</a></p>
      <p><a href="includes/test/test1-3php.php">Test 1.3 - Advanced level</a></p>
    
      <h3>HTML5</h3>
      <p><a href="includes/test/test2-1html.php">Test 2.1 - Introduction to HTML</a></p>
      <p><a href="includes/test/test2-2html.php">Test 2.2 - Medium level</a></p>
      <p><a href="includes/test/test2-3html.php">Test 2.3 - Advanced level</a></p>
        
      <h3>JAVASCRIPT</h3>
      <p><a href="includes/test/test3-1js.php">Test 3.1 - Introduction to JAVASCRIPT</a></p>
      <p><a href="includes/test/test3-2js.php">Test 3.2 - Medium level</a></p>
      <p><a href="includes/test/test3-3js.php">Test 3.3 - Advanced level</a></p>

      <br><br><h3>SOON C#...</h3>
      <br><br><p>Do not cheat, we will be watching you</p>
    </div>
  </div>
</div>
<?php  require("includes/html/footer.html");}
// If you have not logged in you can not access the page
else{echo "<center><img src='includes/images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='login.php'>here</a><h1></center>";}?>
</body>
</html>
