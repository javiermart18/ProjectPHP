<!DOCTYPE html>
<html>
    <body> 
    <?php
    session_start();
    error_reporting(0);
    if ($_SESSION['loggedin']){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalCorrect = 0;
            if ($_POST["radio"] == "C) getFile()") {$totalCorrect++;}
            if ($_POST["radio1"] == "A) _LINE_") {$totalCorrect++;}
            if ($_POST["radio2"] == "A) Numeric Array") {$totalCorrect++;}
            if ($_POST["radio3"] == "A) True") {$totalCorrect++;}
            if ($_POST["radio4"] == "C) filesize()") { $totalCorrect++;}
            require ('../../mysqli_connect.php'); // Connect to the db.
            require ('insertquiz.php'); //Insert quiz in database.
        }
        else{
?>

    <form action="test1-2php.php" method="post">
        
        <center  style="margin-top:5%"><h1>Test 1.2 - MEDIUM LEVEL PHP</h1></center>
        <center style="margin-top:5%">

    <?php
        
    echo "<strong>1- Which of the following method of Exception class returns source filename?</strong><br><br>";
    
    $answer1=["A) getMessage()",
            "B) getCode()",
            "C) getFile()",
            "D) getLine()"];
    foreach( $answer1 as $answer1s)
    {	   
            echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
    };
    echo "<br><br><br><strong>2- Which of the following magic constant of PHP returns current line number of the file?</strong><br><br>";   
    $answer2=["A) _LINE_","B) _FILE_",
            "C) _FUNCTION_","D) _CLASS_"];
    foreach( $answer2 as $answer2s)
    {	   
            echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
    };
    echo "<br><br><br><strong>3- Which of the following array represents an array with a numeric index?</strong><br><br>";   
    $answer3=["A) Numeric Array",
            "B) Associative Array",
            "C) Multidimentional Array",
            "D) None of the above"];
    foreach( $answer3 as $answer3s)
    {	   
            echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
    };
    echo "<br><br><br><strong>4- If there is any problem in loading a file then the include() function generates a warning but the script will continue execution.</strong><br><br>";   
    $answer4=["A) True","B) False"];
    foreach( $answer4 as $answer4s)
    {	   
            echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
    };
    echo "<br><br><br><strong>5- Which of the following function is used to get the size of a file?</strong><br><br>"; 
    $answer5=["A) fopen()","B) fread()","C) filesize()","D) file_exist()"];
    foreach( $answer5 as $answer5s)
    {	   
            echo '<p><input type="radio" name="radio4" value="'.$answer5s.'"> '.$answer5s.'</p>';
    };
        
    ?>
        <input type = "submit" value = "Get Result"/>
        <a href="../../start.html"><input type="button" value="Return"></a>
        </form>
    <?php }} else{echo "<center><img src='../images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='../../login.php'>here</a><h1></center>";} ?>
    </body>
</html>
