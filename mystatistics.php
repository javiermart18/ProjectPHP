<?php
session_start();
error_reporting(0);
// If you are not logged in we will skip an error because do not find the following variable
// For this reason we used previously error recording
//It is not advisable to use it, but in this case because we know that there are no errors we use it 
if ($_SESSION['loggedin']){
$url = array_pop(explode('/', $_SERVER['PHP_SELF']));
include ('includes/html/header.php');
$id = $_SESSION['id'];
$un = $_SESSION['uname'];
$page_title = 'Ranking QuizSaMar';

require ('mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(id_quiz) FROM quiz WHERE id_user = $id";
	$r = @mysqli_query ($dbc, $q);
	$row = @mysqli_fetch_array ($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

// Determine the sort...
// Default is by registration date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';

// Determine the sorting order:
switch ($sort) {
	case 'name':
		$order_by = 'name ASC';
		break;
	case 'sc':
		$order_by = 'score DESC';
		break;
	case 'dt':
		$order_by = 'date DESC';
		break;
	default:
		$order_by = 'date DESC';
		$sort = 'rd';
		break;
}
	
// Define the query:
$q = "SELECT name, score, date
	  FROM quiz
	  WHERE  id_user = $id
	  ORDER BY $order_by LIMIT $start, $display";		
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo "<br><br>";
echo "<center><h1>Your Game Record, ".$un."</h1>";
echo "<br><br>";
echo '<table align="center" cellspacing="0" cellpadding="5" width="50%">
<tr>
	<td align="center"><b><a href="mystatistics.php?sort=name">Quiz Name</a></b></td>
	<td align="center"><b><a href="mystatistics.php?sort=dt">Date</a></b></td>
	<td align="center"><b><a href="mystatistics.php?sort=sc">Score</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee'; 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="center">' . $row['name'] . '</td>
		<td align="center">' . $row['date'] . '</td>
		<td align="center">' . $row['score'] . '</td>
	</tr>
	';
} // End of WHILE loop.

echo '</table></center>';
echo '<br><br><br>';
mysqli_free_result ($r);

mysqli_close($dbc);

// Make the links to other pages, if necessary.
if ($pages > 1) {
	
	echo '<br /><center><p>';
	$current_page = ($start/$display) + 1;
	
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="mystatistics.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="mystatistics.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="mystatistics.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	
	echo '</p></center>'; // Close the paragraph.
	
} // End of links section.
include ('includes/html/footer.html');
} // End of if
// If you have not logged in you can not access the page
else{
	echo "<center><img src='includes/images/samar.png' widht='25%' style='margin-top:10%'><h1 style='margin-top:15%'>Please login before you access this page.<br>To access the login page click <a href='login.php'>here</a><h1></center>";
}
?>
