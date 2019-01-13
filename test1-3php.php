<!DOCTYPE html>
<html>
<head>
   <body style="background-color: beige;"> 
    <?php

    $radioErr = $radio1Err = $radio2Err = $radio3Err = $radio4Err = 
    $result1 = $result2 = $result3 = $result4 = $result5 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["radio"])) {
                $radioErr = "*Choose an option*";
        }
        else    {
                $result1 = $_POST["radio"];
                }
        if (empty($_POST["radio1"])) {
                $radio1Err = "*Choose an option*";
        }
        else    {
                $result2 = $_POST["radio1"];
                }
        if (empty($_POST["radio2"])) {
                $radio2Err = "*Choose an option*";
        }
        else    {
                $result3 = $_POST["radio2"];
                }
        if (empty($_POST["radio3"])) {
                $radio3Err = "*Choose an option*";
        }
        else    {
                $result4 = $_POST["radio3"];
                }
        if (empty($_POST["radio4"])) {
                $radio4Err = "*Choose an option*";
        }
        else    {
                $result5 =  $_POST["radio4"];
                }
}
    
?>

<form action="test1-3php.php" method="post">
    
    <h1>Test 1.3</h1>

<?php
    
 echo "<strong>1- Which of the following is used to declare a constant</strong>";
 echo "&nbsp;&nbsp;&nbsp;<font color='red'>&nbsp$radioErr</font>";
 
 $answer1=["A) const",
           "B) constant",
          "C) define",
           "D) #pragma"];

foreach( $answer1 as $answer1s)
{	   
		echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
};


echo "<strong>2- Which of the following is NOT a valid PHP comparison operator?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio1Err</font>"; 

 $answer2=["A) !=","B) >=",
          "C) <=>","D) <>"];

foreach( $answer2 as $answer2s)
{	   
		echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
};

echo "<strong>3- What is the strpos() function used for?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio2Err</font>"; 

 $answer3=["A) Find the last character of a string",
           "B) Both b and c",
          "C) Search for character within a string",
           "D) Locate position of a string's first character"];

foreach( $answer3 as $answer3s)
{	   
		echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
};

echo "<strong>4- Which of the following differences are valid between PHP 4 and PHP 5</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio3Err</font>"; 

 $answer4=["A)  Built-in native support for SQLite",
           "B) Both a and c",
          "C) Improved MySQL support",
          "D) Support for inheritance"];

foreach( $answer4 as $answer4s)
{	   
		echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
};

echo "<strong>5- Can we use include ('test.php') two times in a PHP page 'test1.PHP'?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio4Err</font>"; 

 $answer5=["A) Yes","B) No"];

foreach( $answer5 as $answer5s)
{	   
		echo '<p><input type="radio" name="radio4" value="'.$answer5s.'"> '.$answer5s.'</p>';
};
    
    ?>
    <input type = "submit" value = "Get Result"/>
    <a href="start.html"><input type="button" value="Return"></a>
    </form>
       
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$totalCorrect = 0;

if ($result1 == "C) define") {$totalCorrect++;}
if ($result2 == "C) <=>") {$totalCorrect++;}
if ($result3 == "C) Search for character within a string") {$totalCorrect++;}
if ($result4 == "B) Both a and c") {$totalCorrect++;}
if ($result5 == "A) Yes") { $totalCorrect++;}

echo "<div id='results'><h1>Your score is  $totalCorrect / 5 </h1></div>";
    
}
       ?>
    </body>
    </head>
</html>