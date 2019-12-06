<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>



<body>
<?php include("main.php"); ?>




<form method="post" action="Registration.php" id ="resgister" >
   <filedset>
    <legend><h2>Register</h2></legend>

       <div class="row">
           <div class="col-30">
               <label for="name">Name</label>
           </div>
           <div class="col-40">
               <input type="text" name="name" placeholder="Enter your name..">
           </div>
       </div>
       <div class="row">
           <div class="col-30">
               <label for="email">Email</label>
           </div>
           <div class="col-40">
               <input type="email" name="email" placeholder="Enter your email..">
           </div>
       </div>
       <div class="row">
           <div class="col-30">
               <label for="dateOfBirth">Date of Birth</label>
           </div>
           <div class="col-40">
<!--             <input type="date" name="dateOfBirth" placeholder="YYYY-MM-DD" >-->
<!-- to-do         dataformatas="yyyy mm dd" required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))"-->
           </div>
       </div>


       <div class="row">
           <div class="col-30">
               <label for="address">Address</label>
           </div>
           <div class="col-40">
               <input type="text" name="address" placeholder="Enter your Address..">
           </div>
       </div>

       <div class="row">
           <div class="col-30">
               <label for="phone">Telephone</label>
           </div>
           <div class="col-40">
               <input type="number" name="phone" placeholder="Enter your phone number..">
           </div>
       </div>
       <div class="row">
           <div class="col-30">
               <label for="password">Password</label>
           </div>
           <div class="col-40">
               <input type="password" name="password" placeholder="Enter password..">
           </div>
       </div>

       <div class="row">
               <input type="submit" name="submit">
       </div>

       <?php

       // Check if request is POST
       if($_SERVER['REQUEST_METHOD'] === 'POST' ) {

           // This file contains the database access information.
           // This file also establishes a connection to MySQL
           // and selects the database.
           // Set the database access information as constants:
           $dbhost = "1170381.studentswebprojects.ritaj.ps";
           $dbuser = "c107_1170381_19";
           $dbpass = "comp334!";
           $dbname = "c107_project_store";

           // create PDO Object:
           $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;port=3306",$dbuser, $dbpass);

           if(!$pdo ) {
               die("Could not connect to database");
           }else echo "Connected to Database";

           // Write the SQL statement string to select all items
           $sqlStatement = "INSERT INTO customers ( name , email, address , phone , password) VALUES (?,?,?,?,?,?)";
//to-do birth daaateeee
           // Prepare the statement
           $stmt = $pdo->prepare($sqlStatement);

           // Execute the SQL query and get all rows
           $status = $stmt->execute([$_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['password']]);

           // Check the status
           if($status ) {
               echo 'Data inserted successfully';
           }
           else {
               echo $stmt->error;
           }

           // PHP will automatically close
           // the connection when the script ends

       }?>


</body>

</html>

