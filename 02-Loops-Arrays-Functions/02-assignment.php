<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/



// 01. Create and Call at least one function.



function myFirstFunction($yas= "Awesome sauce") {
	echo "Things are $yas. <br>";
}

echo "<h2>These are function calls</h2>";
myFirstFunction(); 
myFirstFunction('ok');





// 02. Create a For Loop

echo "<h2>This is a loop</h2>";
for($i=1; $i<=15; $i++){
    echo "The number is " . $i . "<br>";
}





// 03. Create a While Loop
echo "<h2>This is a while loop</h2>";

$a = rand(0, 25);
$b = rand(0, 25);
do 
{
echo "$a is less than $b <br>";
$a++;
}
while ($a < $b);




// 04. Create an Array
echo "<h2>This is an array</h2>";

$cars = [
	"Acura",
	"Ford",
	"Toyota"
];
print_r($cars);





// 05. Sort an Array
echo "<h2>This is some array sorting.</h2>";

//min,max (because there are only 3 cars in my array)
$selectedCar = $cars[rand(0,2)];

echo "You won a new " . $selectedCar . "!";






// 01. Create a Switch Statement
echo "<h2>This is a switch statement</h2>";

date_default_timezone_set("America/Chicago");

$title = null;

switch  (date('H')) {
	case 01:
	  $title = "TOO Early";
	  break;
	case 05:
	  $title = "WAKE UP";
	  break;
	case 07:
		$title = "Good Morning"; 
		break;
	case 16:
		$title = "Evening Time"; 
		break;
	case 17:
		$title = "Evening Time"; 
		break;
	case 18:
		$title = "Night Time"; 
		break;			
	default: 
		$title = "a Good Day";
}

echo date('h:i:s');
echo "<br>It is $title !"; 


?>

<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		
     <?php // Nothing in the body yet! ?>
 
	</body>
</html>
