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
                        if ($_POST["radio"] =="A) Server-side programming language") {$totalCorrect++;}
                        if ($_POST["radio1"] =="A) Associative Array") {$totalCorrect++;}
                        if ($_POST["radio2"] =="A) Check if $ variable is defined and has a non-zero value") {$totalCorrect++;}
                        if ($_POST["radio3"] =="B) PHP: Hypertext Preprocessor") {$totalCorrect++;}
                        if ($_POST["radio4"] =="C) $") { $totalCorrect++;}
                        require ('../../mysqli_connect.php'); // Connect to the db.
                        require ('insertquiz.php'); //Insert quiz in database.
                }
                else{
        ?>
                <form action="test1-1php.php" method="post">
    
                        <center  style="margin-top:5%"><h1>Test 1.1 - INTRODUCTION TO PHP</h1></center>
                        <center style="margin-top:5%">
                <?php
                echo "<strong>1- PHP is a ...</strong><br><br>";
                
                $answer1=["A) Server-side programming language","B) Website",
                        "C) Marking language","D) Homepage"];
                foreach( $answer1 as $answer1s)
                {	   
                        echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
                };

                echo "<br><br><br><strong>2- In PHP, $ language['php'] is an example of</strong><br><br>";
                $answer2=["A) Associative Array","B) Multidimensional array",
                        "C) Superglobal array","D) The previous answers are not correct "];
                foreach( $answer2 as $answer2s)
                {	   
                                echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
                };
                echo "<br><br><br><strong>3- In PHP, what is the next code for? if (isset ($ variable))</strong><br><br>";  
                $answer3=["A) Check if $ variable is defined and has a non-zero value",
                        "B) Check if $ variable is a variable of scalar type",
                        "C) Check if $ variable is a variable of vector type (array)",
                        "D) The previous answers are not correct"];
                foreach( $answer3 as $answer3s)
                {	   
                                echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
                };
                echo "<br><br><br><strong>4- What does PHP mean?</strong><br><br>";  
                $answer4=["A) Private Home Page",
                        "B) PHP: Hypertext Preprocessor",
                        "C) Personal Hypertext Processor",
                        "D) Personal Home Page"];
                foreach( $answer4 as $answer4s)
                {	   
                                echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
                };
                echo "<br><br><br><strong>5- In PHP, all the variables start with the symbol</strong><br><br>";   
                $answer5=["A) !","B) &","C) $","D) #"];
                foreach( $answer5 as $answer5s)
                {	   
                                echo '<p><input type="radio" name="radio4" value="'.$answer5s.'"> '.$answer5s.'</p>';
                };
                
                ?>
                <br><br><br>
                <input type = "submit" value = "Get Result"/>
                <a href="../../start.php"><input type="button" value="Return"></a>
                </center>
                </form>
        <?php }}
        // If you have not logged in you can not access the page 
        else{echo "<center><img src='../images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='../../login.php'>here</a><h1></center>";
        }?>
    </body>
</html>
