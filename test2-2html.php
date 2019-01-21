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
                if ($result1 =="B) data list") {$totalCorrect++;}
                if ($result2 =="A) To label abbreviations and tell the user what it is") {$totalCorrect++;}
                if ($result3 =="B) Puts quotations around the quote") {$totalCorrect++;}
                if ($result4 =="A) It puts characters below the font line") {$totalCorrect++;}
                if ($result5 =="A) The Root folder") { $totalCorrect++;}
                require ('../../mysqli_connect.php'); // Connect to the db.
                require ('insertquiz.php'); //Insert quiz in database.
        }
        else{
?>

        <form action="test2-2html.php" method="post">
        <center  style="margin-top:5%"><h1>Test 2.2 - MEDIUM LEVEL HTML</h1></center>
        <center style="margin-top:5%">
        <?php
        
        echo "<strong>1- The < dl > tag stands for what?</strong><br><br>";
        
        $answer1=["A) definition letter",
                "B) data list",
                "C) definition list",
                "D) down low"];
        foreach( $answer1 as $answer1s)
        {	   
                        echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
        };
        echo "<br><br><br><strong>2- The < abbr > tag is used for what purpose?</strong>"; 
        $answer2=["A) To label abbreviations and tell the user what it is",
                "B) It has no purpose",
                "C) To over rule acronyms",
                "D) To make abbreviations pretty"];
        foreach( $answer2 as $answer2s)
        {	   
                        echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
        };
        echo "<br><br><br><strong>3- What does the < q > do?</strong>"; 
        $answer3=["A) Makes quotes pretty",
                "B) Puts quotations around the quote",
                "C) It doesn't do anything",
                "D) It puts the quote's writer's name next to the quote"];
        foreach( $answer3 as $answer3s)
        {	   
                        echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
        };
        echo "<br><br><br><strong>4- What does the < sub > tag do?</strong>"; 
        $answer4=["A) It puts characters below the font line",
                "B) It puts characters above the font line",
                "C) It won't do anything",
                "D) It puts quotes around characters"];
        foreach( $answer4 as $answer4s)
        {	   
                        echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
        };
        echo "<br><br><br><strong>5- What is the top level folder?</strong>"; 
        $answer5=["A) The Root folder",
                "B) The lib folder",
                "C) index.html",
                "D) a CSS file"];
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
        }
        ?>
    </body>
</html>
