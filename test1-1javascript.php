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

<form action="test1-1javascript.php" method="post">
    
    <h1>Test 1.1</h1>

<?php
    
 echo "<strong>1- Which of the following is a server-side Java Script object?</strong>";
 echo "&nbsp;&nbsp;&nbsp;<font color='red'>&nbsp$radioErr</font>";
 
 $answer1=["A) Function",
           "B) File",
          "C) FileUpload",
           "D) Date"];

foreach( $answer1 as $answer1s)
{	   
		echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
};


echo "<strong>2- Java script can be used for Storing the form's contents to a database file on the server</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio1Err</font>"; 

 $answer2=["A) False",
           "B) True"];

foreach( $answer2 as $answer2s)
{	   
		echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
};

echo "<strong>3- C-style block-level scoping is not supported in Java script</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio2Err</font>"; 

 $answer3=["A) True",
           "B) False"];

foreach( $answer3 as $answer3s)
{	   
		echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
};

echo "<strong>4- Which of the below is used in Java script to insert special characters?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio3Err</font>"; 

 $answer4=["A) & ",
           "B) \ ", 
          "C) - ",
           "D) % "];

foreach( $answer4 as $answer4s)
{	   
		echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
};

echo "<strong>5- How does Java Script store dates in objects of Date type?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio4Err</font>"; 

 $answer5=["A) The number of days since January 1st, 1900",
           "B) The number of seconds since January 1st, 1970",
           "C) The number of milliseconds since January 1st, 1970",
           "D) The number of picoseconds since January 1st, 1970"];

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

if ($result1 =="B) File") {$totalCorrect++;}
if ($result2 =="A) False") {$totalCorrect++;}
if ($result3 =="A) True") {$totalCorrect++;}
if ($result4 =="B) \ ") {$totalCorrect++;}
if ($result5 =="C) The number of milliseconds since January 1st, 1970"){ $totalCorrect++;}

echo "<div id='results'><h1>Your score is  $totalCorrect / 5 </h1></div>";
    
}
       ?>
    </body>
    </head>
</html>