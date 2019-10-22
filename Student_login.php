<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

  <form action="backend/login/std_login.php" method="POST">
    <div class="container">
      <h2>Student's Login</h2>
      <label for="stId"><br>STUDENT ID<br></label>
      <input type="text" name="stId" class="text-box" placeholder="Student Id" required> <br>

      <label for="stPass"><br>PASSWORD<br></label> 
      <input type="password" name="stPass" class="text-box" placeholder="Password" required>

      <br>
      <br>
      <button type="submit" name="submit">Login</button>
      <div class="Forgot-pass">
        <span>Forgot <a href="#">password?</a></span>
      </div>
    </div>
   
  </form>
</body>
</html>