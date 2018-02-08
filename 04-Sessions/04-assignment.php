<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/



// 01. Initiate/start a PHP session by using the script


session_start();



// 02. Set a value to a session


if (!empty($POST['email'])) {
	
	$SESSION['email'] = $_POST['email'];
}


// 03. This criterion is linked to a Learning Outcome Echo the session value to display on the page





?>

we will email you to <?php echo $SESSION['email']; ?>