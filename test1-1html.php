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

<form action="test1-1html.php" method="post">
    
    <h1>Test 1.1</h1>

<?php
    
 echo "<strong>1- What does HTML stand for?</strong>";
 echo "&nbsp;&nbsp;&nbsp;<font color='red'>&nbsp$radioErr</font>";
 
 $answer1=["A) Hyper Throttle Manly Language ",
           "B) Hypertext Markup Language",
          "C) How to make language ",
           "D) How to move language "];

foreach( $answer1 as $answer1s)
{	   
		echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
};


echo "<strong>2- With a checkbox, you can...</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio1Err</font>"; 

 $answer2=["A) Select only one option",
           "B) Select multiple or no options",
          "C) Type a message",
           "D) Input a password"];

foreach( $answer2 as $answer2s)
{	   
		echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
};

echo "<strong>3- What is semantic HTML?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio2Err</font>"; 

 $answer3=["A) Not marking anything up ",
           "B) A whole bunch of coding",
          "C) HTML and CSS)",
           "D) The way of correctly marking up and defining data"];

foreach( $answer3 as $answer3s)
{	   
		echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
};

echo "<strong>4- What does the < div > tag do?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio3Err</font>"; 

 $answer4=["A) Divides content",
           "B) Makes text bold",
          "C) Makes text bigger",
           "D) Puts text into a list"];

foreach( $answer4 as $answer4s)
{	   
		echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
};

echo "<strong>5- The < p > tag is used for what purpose?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio4Err</font>"; 

 $answer5=["A) To make a list",
           "B) To write text",
           "C) To display a heading",
           "D) It's not used for anything"];

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

if ($result1 =="B) Hypertext Markup Language") {$totalCorrect++;}
if ($result2 =="B) Select multiple or no options") {$totalCorrect++;}
if ($result3 =="D) The way of correctly marking up and defining data") {$totalCorrect++;}
if ($result4 =="A) Divides content") {$totalCorrect++;}
if ($result5 =="B) To write text") { $totalCorrect++;}

echo "<div id='results'><h1>Your score is  $totalCorrect / 5 </h1></div>";
    
}
       ?>
    </body>
    </head>
</html>