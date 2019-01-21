<?php
        session_start();
        $url = array_pop(explode('/', $_SERVER['PHP_SELF']));
        $urls = explode('.', $url);
        $name = $urls[0];
        $id = $_SESSION['id'];
        $q = "INSERT INTO quiz (id_quiz, id_user, name, score, date) VALUES ('0','$id', '$name', $totalCorrect, NOW())";		
        $r = @mysqli_query ($dbc, $q); // Run the query.
        //Insert in the table quiz
        if ($r){
                echo "<center><div id='results style='margin-top:20%'><h1>Your score is  $totalCorrect / 5 </h1>";
                
                if ($totalCorrect==5){
                        echo "<img src='../images/giphy.gif'>";
                }
                elseif($totalCorrect>3) {
                        echo "<img src='../images/4.gif'>";
                }
                elseif($totalCorrect==3){
                        echo "<img src='../images/masmenos.gif'>";
                }
                else {
                        echo "<img src='../images/12.gif'>";
                }
                echo "<br><br><p>Click <a href='../../start.php'>here</a> to access the main screen</p></div></center>";
        }

        // Select to collect total_points of the current user
        $q = "SELECT total_points FROM users WHERE user_id=$id";		
        $r = @mysqli_query ($dbc, $q); // Run the query.
        $row = $row = mysqli_fetch_assoc($r);
        $hash = $row['total_points'];
        if ($r){
                //We add the current value of total_points plus the points obtained with the quiz
                $total = $totalCorrect + $hash;
                // Update total_points of the current user
                $q = "UPDATE users SET total_points='$total' WHERE user_id=$id";		
                $r = @mysqli_query ($dbc, $q); // Run the query.
        }
        mysqli_close($dbc); // Close the database connection.
        exit();
?>
