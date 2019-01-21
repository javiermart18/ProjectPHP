<!DOCTYPE html>
<html>
        <body> 
        <?php
        session_start();
        error_reporting(0);
        // If you are not logged in we will skip an error because do not find the following variable
        // For this reason we used previously error recording
        //It is not advisable to use it, but in this case because we know that there are no errors we use it 
        if ($_SESSION['loggedin']){
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $totalCorrect = 0;
                        if ($_POST["radio"] =="B) File") {$totalCorrect++;}
                        if ($_POST["radio1"] =="A) False") {$totalCorrect++;}
                        if ($_POST["radio2"] =="A) True") {$totalCorrect++;}
                        if ($_POST["radio3"] =="B) \ ") {$totalCorrect++;}
                        if ($_POST["radio4"] =="C) The number of milliseconds since January 1st, 1970") { $totalCorrect++;}
                        require ('../../mysqli_connect.php'); // Connect to the db.
                        require ('insertquiz.php'); //Insert quiz in database.
                }
                else{
?>

        <form action="test3-1js.php" method="post">
        
        <center  style="margin-top:5%"><h1>Test 3.1 - INTRODUCTION TO JAVASCRIPT</h1></center>
        <center style="margin-top:5%">
        <?php
        
        echo "<strong>1- Which of the following is a server-side Java Script object?</strong><br><br>";
        
        $answer1=["A) Function",
                  "B) File",
                 "C) FileUpload",
                  "D) Date"];
       foreach( $answer1 as $answer1s)
       {	   
                       echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
       };
       echo "<br><br><br><strong>2- Java script can be used for Storing the form's contents to a database file on the server</strong>"; 
        $answer2=["A) False",
                  "B) True"];
       foreach( $answer2 as $answer2s)
       {	   
                       echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
       };
       echo "<br><br><br><strong>3- C-style block-level scoping is not supported in Java script</strong>"; 
        $answer3=["A) True",
                  "B) False"];
       foreach( $answer3 as $answer3s)
       {	   
                       echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
       };
       echo "<br><br><br><strong>4- Which of the below is used in Java script to insert special characters?</strong>"; 
        $answer4=["A) & ",
                  "B) \ ", 
                 "C) - ",
                  "D) % "];
       foreach( $answer4 as $answer4s)
       {	   
                       echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
       };
       echo "<br><br><br><strong>5- How does Java Script store dates in objects of Date type?</strong>"; 
        $answer5=["A) The number of days since January 1st, 1900",
                  "B) The number of seconds since January 1st, 1970",
                  "C) The number of milliseconds since January 1st, 1970",
                  "D) The number of picoseconds since January 1st, 1970"];
       foreach( $answer5 as $answer5s)
       {	   
                       echo '<p><input type="radio" name="radio4" value="'.$answer5s.'"> '.$answer5s.'</p>';
       };
        
        ?>
        <br><br><br>
        <input type = "submit" value = "Get Result"/>
        <a href="../../start.html"><input type="button" value="Return"></a>
        </center>
        </form>   
        <?php  }}
        // If you have not logged in you can not access the page 
        else{echo "<center><img src='../images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='../../login.php'>here</a><h1></center>";
        }
        ?>
    </body>
</html>
