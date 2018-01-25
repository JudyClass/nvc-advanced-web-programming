<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/



// 01. Create and Call at least one function.

$yas= "Awesome sauce";

function myFirstFunction() {
	echo $yas;
}

myFirstFunction();


// 02. Create a For Loop





// 03. Create a While Loop





// 04. Create an Array

$cars = [
	"Acura",
	"Ford",
	"Toyota"
];
print_r($cars);


// 05. Sort an Array


$selectedCar = $cars[rand(0,2)];

$countCars = count($cars);
for($x = 0; $x < $countCars; $x++) {
    echo $cars[$x];
    echo "<br>";
}

// 01. Create a Switch Statement

$title = null;

switch  (date('h')) {
	case 01:
	  $title = "NVC Early";
	  break;
	case 05:
	  $title = "NVC Breakfast";
	  break;
	case 07:
		$title = "NVC"; 
		break;
	default: 
		$title = "Northwest Vista College";
}


?>

<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $title; ?></h1>
		<p><?php echo "It is " . date('h') . " hours"; ?></p>
		<p><?php echo "You won a new " . $selectedCar . "!"?></p>
		<p><?php echo "Alpha sorting " . $alphaCarOrder ?></p>

	</body>
</html>