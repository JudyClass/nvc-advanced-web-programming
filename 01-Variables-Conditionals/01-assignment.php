<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/



// 01. Create and use a string variable

	$cat = "Mr. Jingles";


// 02. Create and use an integer variable


 $number = 1834895993827;


// 03. Create and use a boolean variable


 $boolFool = true;


// 04. Create and call one or more function(s)
 


function sauce() {
    echo "Awesome Sauce!";
}


// 05. Basic conditional statement


function hello() {
	
	$t = date("H");

if ($t > "17") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
 }

// 01. Echo to page


?>

<html>
	<head>
		<title>Assignment Stuffs</title>
	</head>
	<body>
		<p>01.<?php echo $cat; ?> is a cat!</p>
		<p>02.<?php echo $number; ?> is how much money I would like to make per year.</p>
		<p>03. True or False (aka 1 or 0): <?php echo $boolFool; ?></p>
		<p>04. Function call: <?php sauce(); ?></p>
		<p>05. <?php hello(); ?></p>
	</body>
</html>

