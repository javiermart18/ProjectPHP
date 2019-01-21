<!DOCTYPE html>
<html>
<head>
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
                        if ($_POST["radio"] =="B) Hypertext Markup Language") {$totalCorrect++;}
                        if ($_POST["radio1"] =="B) Select multiple or no options") {$totalCorrect++;}
                        if ($_POST["radio2"] =="D) The way of correctly marking up and defining data") {$totalCorrect++;}
                        if ($_POST["radio3"] =="A) Divides content") {$totalCorrect++;}
                        if ($_POST["radio4"] == "B) To write text") { $totalCorrect++;}
                        require ('../../mysqli_connect.php'); // Connect to the db.
                        require ('insertquiz.php'); //Insert quiz in database.
                }
                else{
        ?>

        <form action="test2-1html.php" method="post">
        <center  style="margin-top:5%"><h1>Test 2.1 - INTRODUCTION TO HTML</h1></center>
        <center style="margin-top:5%">
        <?php

        echo "<strong>1- What does HTML stand for?</strong>";
        
        $answer1=["A) Hyper Throttle Manly Language ",
                "B) Hypertext Markup Language",
                "C) How to make language ",
                "D) How to move language "];
        foreach( $answer1 as $answer1s)
        {	   
                        echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
        };
        echo "<br><br><br><strong>2- With a checkbox, you can...</strong>"; 
        $answer2=["A) Select only one option",
                "B) Select multiple or no options",
                "C) Type a message",
                "D) Input a password"];
        foreach( $answer2 as $answer2s)
        {	   
                        echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
        };
        echo "<br><br><br><strong>3- What is semantic HTML?</strong>"; 
        $answer3=["A) Not marking anything up ",
                "B) A whole bunch of coding",
                "C) HTML and CSS)",
                "D) The way of correctly marking up and defining data"];
        foreach( $answer3 as $answer3s)
        {	   
                        echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
        };
        echo "<br><br><br><strong>4- What does the < div > tag do?</strong>"; 
        $answer4=["A) Divides content",
                "B) Makes text bold",
                "C) Makes text bigger",
                "D) Puts text into a list"];
        foreach( $answer4 as $answer4s)
        {	   
                        echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
        };
        echo "<br><br><br><strong>5- The < p > tag is used for what purpose?</strong>"; 
        $answer5=["A) To make a list",
                "B) To write text",
                "C) To display a heading",
                "D) It's not used for anything"];
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
        <?php }}
        // If you have not logged in you can not access the page 
        else{echo "<center><img src='../images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='../../login.php'>here</a><h1></center>";
        }?>
    </body>
</html>
