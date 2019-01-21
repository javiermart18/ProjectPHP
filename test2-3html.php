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
                        if ($_POST["radio"] =="C) Center") {$totalCorrect++;}
                        if ($_POST["radio1"] =="D) padding-left") {$totalCorrect++;}
                        if ($_POST["radio2"] =="B) margin: 5px 10px 0 5px") {$totalCorrect++;}
                        if ($_POST["radio3"] =="B) border-style, border-width, border-color") {$totalCorrect++;}
                        if ($_POST["radio4"] =="A) p{ width:250px; height:200px;}") { $totalCorrect++;}
                        require ('../../mysqli_connect.php'); // Connect to the db.
                        require ('insertquiz.php'); //Insert quiz in database.
                }
                else{
?>

        <form action="test2-3html.php" method="post">
        
        <center  style="margin-top:5%"><h1>Test 2.3 - ADVANCED LEVEL HTML</h1></center>
        <center style="margin-top:5%">
        <?php
        
        echo "<strong>1- Where is the content in the box model?</strong><br><br>";
        
        $answer1=["A) The outside",
                "B) The left",
                "C) Center",
                "D) No where"];
        foreach( $answer1 as $answer1s)
        {	   
                        echo '<p><input type="radio" name="radio" value="'.$answer1s.'"> '.$answer1s.'</p>';
        };
        echo "<br><br><br><strong>2- Which option will put padding on the left of an object?</strong>"; 
        $answer2=["A) padding-top",
                "B) padding-right",
                "C) padding-bottom",
                "D) padding-left"];
        foreach( $answer2 as $answer2s)
        {	   
                        echo '<p><input type="radio" name="radio1" value="'.$answer2s.'"> '.$answer2s.'</p>';
        };
        echo "<br><br><br><strong>3- What is the shorthand way of putting margin on an object?</strong>"; 
        $answer3=["A) margin-right: 10px; margin-top: 5px;",
                "B) margin: 5px 10px 0 5px",
                "C) padding:10px;",
                "D) margin-left:10px;"];
        foreach( $answer3 as $answer3s)
        {	   
                        echo '<p><input type="radio" name="radio2" value="'.$answer3s.'"> '.$answer3s.'</p>';
        };
        echo "<br><br><br><strong>4- What are all the properties a border needs?</strong>"; 
        $answer4=["A)  border-width",
                "B) border-style, border-width, border-color",
                "C) 1px",
                "D) border-solid"];
        foreach( $answer4 as $answer4s)
        {	   
                        echo '<p><input type="radio" name="radio3" value="'.$answer4s.'"> '.$answer4s.'</p>';
        };
        echo "<br><br><br><strong>5-  If you have a container of 300px all around, which size < p > will fit in the container?</strong>"; 
        $answer5=["A) p{ width:250px; height:200px;}",
                "B) p{width:200px; height:500;}",
                "C) p{width:301px; height:259px;}",
                "D) p{ width:500px; height:500px;}"];
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
