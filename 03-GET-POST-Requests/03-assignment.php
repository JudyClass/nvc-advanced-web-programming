<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/



// 01. Create a form with at least 2 text inputs and a submit button


  // First form below!

// 02. This criterion is linked to a Learning Outcome Display URL parameter value for "first_name" text input


  // Integrated this one into my form from number one!


// 03. This criterion is linked to a Learning Outcome Display URL parameter value for "email" text input


  // Also, integrated this one into my form from number one!


// 04. This criterion is linked to a Learning Outcome Display POST data once form has been submitted


$classes = [
	"Algebra",
	"Spanish",
	"Digital Media"
]


?>

<html>
	<head>
		https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css

		<title><?php echo $title; ?></title>
	</head>
	<body>
		
		<?php if (empty($SESSION['email']) && empty($_POST['email'])) { ?>
		
		<form action="./03-assignment.php" method="POST">
		  First name:<br>
		  <input type="text" name="first_name" value="<?php echo $_GET['first_name']; ?>">
		  <br>
		  Last name:<br>
		  <input type="text" name="last_name" <?php echo $_GET['last_name']; ?>>
		  <br>
		  Email Adress<br>
		  <input type="email" name="email" <?php echo $_GET['email']; ?>>
		  <br>
		  age:<br>
		  <input type="text" name="age" <?php echo $_GET['age']; ?>>
		  <br><br>
		  <select name="class">
			 <?php foreach ($classes as $class) : ?>
			 
			 <option value="<?php echo $class; ?>"><?php echo $class; ?></option>
		<?php endforeach; ?>
		</select>
		<br>
		<br>
		  <input type="submit" value="Submit">
		</form> 
				
		<?php } else { ?>
		
		<h3>Thanks <?php echo $POST['first_name']; ?>!</h3>
		<p>We will email you at <?php echo $SESSION['email']; ?></p>
		
	  <?php } ?>
	
		 
		
	</body>
</html>


