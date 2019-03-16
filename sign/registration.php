<?php 
include('form.php');?>

<!DOCTYPE html>
<html>
   <head>
       <title>Registration Form</title>
       <link rel="stylesheet" href="signup.css">
   </head>
    <body>
      
        <form action="form.php" method="POST">
        <div class="container">
            <h1> Registration</h1>
            <hr>
        <label for="name"><b>Name</b></label><br>
        <input type="text" name="name"  value="<?php echo $name;?>">
        <br>
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email" value="<?php echo $email;?>">
      <br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="password" value="<?php echo $password;?>">
      <br>
        <label for="dob"><b>Dob:</b></label>
        <input type="date" name="dob" value="<?php echo $dob;?>">
    <br> <br>
        <label for="gerder"><b>Gender:</b></label>
        <input type="radio" name="gender" value="<?php echo $gender;?>"> Male
        <input type="radio" name="gender" value="<?php echo $gender;?>"> Female
        <input type="radio" name="gender" value="<?php echo $gender;?>"> Other  
    <br>
    <br>
    <div class="signup">
            <button type="submit" name="submit" class="signup">Sign Up</button>
          </div>
</body>       </div>
</form>
</html>