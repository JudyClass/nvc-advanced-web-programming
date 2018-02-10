<?php
   session_start();
   
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
            <h1 class="display-4">Assignment 3</h1>
            <p class="lead">$_GET, $_POST, $_SESSION</p>
         </div>
      </div>
      <div class="container">
         <?php if (empty($_SESSION['email']) && empty($_POST['first_name'])) { ?>
         <form action="./03-assignment.php" method="POST">
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
            <h4 class="alert-heading">You've done it <?php echo $_POST['first_name']; ?>,</h4>
            <p>Now we have your email: <?php echo $_SESSION['email']; ?>.</p>
            <hr>
            <p class="mb-0"><strong>Get ready for SPAM TOWN!</strong></p>
         </div>
         
         <?php session_destroy(); } ?>
         
      </div>
   </body>
</html>