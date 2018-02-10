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
   
     // down below!
   
   // 03. This criterion is linked to a Learning Outcome Echo the session value to display on the page
   
     // down below!
   
   
   if (!empty($_POST['email'])) {
   
     $_SESSION['email'] = $_POST['email'];
   
   }
   
   
   $states = [
   	"Texas",
   	"New Mexico",
   	"Arizona"
   ]
   
   
   ?>
   
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <title><?php echo $title; ?></title>
   </head>
   <body>
      <div class="jumbotron jumbotron-fluid">
         <div class="container">
            <h1 class="display-4">Assignment 4</h1>
            <p class="lead">$_SESSION</p>
         </div>
      </div>
      <div class="container">
         <?php if (empty($_SESSION['email']) && empty($_POST['first_name'])) { ?>
         <form action="./04-assignment.php" method="POST">
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" placeholder="First name" name="first_name" value="<?php echo $_GET['first_name']; ?>">
               </div>
               <div class="form-group col-md-6">
                  <label for="fname">Last Name</label>
                  <input type="text" class="form-control" id="lname" placeholder="Last name" name="last_name" value="<?php echo $_GET['last_name']; ?>">
               </div>
            </div>
            <div class="form-group">
               <label for="emailInput">Email</label>
               <input type="email" class="form-control" id="emailInput" placeholder="Email" name="email" <?php echo $_GET['email']; ?>>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="City">
               </div>
               <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control" name="class">
                     <?php foreach ($states as $state) : ?>
                     <option value="<?php echo $state; ?>"><?php echo $state; ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="12345" >
               </div>
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT IT!</button>
         </form>
         <?php } else { ?>
         <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">This is for assignment 4 <?php echo $_POST['first_name']; ?>,</h4>
            <p>Here is the echo of the session value to display on the page:  <?php echo $_SESSION['email']; ?>.</p>
         </div>
         <?php session_destroy(); } ?>
      </div>
   </body>
</html>