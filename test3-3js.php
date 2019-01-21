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
                        if ($_POST["radio"] =="C) define") {$totalCorrect++;}
                        if ($_POST["radio1"] =="C) <=>") {$totalCorrect++;}
                        if ($_POST["radio2"] =="C) Search for character within a string") {$totalCorrect++;}
                        if ($_POST["radio3"] =="B) Both a and c") {$totalCorrect++;}
                        if ($_POST["radio4"] =="A) Yes") { $totalCorrect++;}
                        require ('../../mysqli_connect.php'); // Connect to the db.
                        require ('insertquiz.php'); //Insert quiz in database.
                }
                else{
?>

        <form action="test3-3js.php" method="post">
        
        <center  style="margin-top:5%"><h1>Test 3.3 - ADVANCED LEVEL JAVASCRIPT</h1></center>
        <center style="margin-top:5%">
        <?php
        echo "<strong>1- Which of the following is used to declare a constant</strong><br><br>";
        
        $answer1=["A) const",
                "B) constant",
                "C) define",
                "D) #pragma"];
        foreach( $answer1 as $answer1s)
        {	   
                        echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
        };
        echo "<br><br><br><strong>2- Which of the following is NOT a valid PHP comparison operator?</strong>";
        $answer2=["A) !=","B) >=",
                "C) <=>","D) <>"];
        foreach( $answer2 as $answer2s)
        {	   
                        echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
        };
        echo "<br><br><br><strong>3- What is the strpos() function used for?</strong>"; 
        $answer3=["A) Find the last character of a string",
                "B) Both b and c",
                "C) Search for character within a string",
                "D) Locate position of a string's first character"];
        foreach( $answer3 as $answer3s)
        {	   
                        echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
        };
        echo "<br><br><br><strong>4- Which of the following differences are valid between PHP 4 and PHP 5</strong>"; 
        $answer4=["A)  Built-in native support for SQLite",
                "B) Both a and c",
                "C) Improved MySQL support",
                "D) Support for inheritance"];
        foreach( $answer4 as $answer4s)
        {	   
                        echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
        };
        echo "<br><br><br><strong>5- Can we use include ('test.php') two times in a PHP page 'test1.PHP'?</strong>"; 
        $answer5=["A) Yes","B) No"];
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
