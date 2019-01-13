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

<form action="test1-1php.php" method="post">
    
    <h1>Test 1.1</h1>

<?php
    
 echo "<strong>1- PHP is a ...</strong>";
 echo "&nbsp;&nbsp;&nbsp;<font color='red'>&nbsp$radioErr</font>";
 
 $answer1=["A) Server-side programming language","B) Website",
          "C) Marking language","D) Homepage"];

foreach( $answer1 as $answer1s)
{	   
		echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
};


echo "<strong>2- In PHP, $ language['php'] is an example of</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio1Err</font>"; 

 $answer2=["A) Associative Array","B) Multidimensional array",
          "C) Superglobal array","D) The previous answers are not correct "];

foreach( $answer2 as $answer2s)
{	   
		echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
};

echo "<strong>3- In PHP, what is the next code for? if (isset ($ variable))</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio2Err</font>"; 

 $answer3=["A) Check if $ variable is defined and has a non-zero value",
           "B) Check if $ variable is a variable of scalar type",
          "C) Check if $ variable is a variable of vector type (array)",
           "D) The previous answers are not correct"];

foreach( $answer3 as $answer3s)
{	   
		echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
};

echo "<strong>4- What does PHP mean?</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio3Err</font>"; 

 $answer4=["A) Private Home Page",
           "B) PHP: Hypertext Preprocessor",
          "C) Personal Hypertext Processor",
           "D) Personal Home Page"];

foreach( $answer4 as $answer4s)
{	   
		echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
};

echo "<strong>5- In PHP, all the variables start with the symbol</strong>";  echo "<font color='red'>&nbsp;&nbsp;&nbsp;$radio4Err</font>"; 

 $answer5=["A) !","B) &","C) $","D) #"];

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

if ($result1 =="A) Server-side programming language") {$totalCorrect++;}
if ($result2 =="A) Associative Array") {$totalCorrect++;}
if ($result3 =="A) Check if $ variable is defined and has a non-zero value") {$totalCorrect++;}
if ($result4 =="B) PHP: Hypertext Preprocessor") {$totalCorrect++;}
if ($result5 =="C) $") { $totalCorrect++;}

echo "<div id='results'><h1>Your score is  $totalCorrect / 5 </h1></div>";
    
}
       ?>
    </body>
    </head>
</html>