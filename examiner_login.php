<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Examiner Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <form action="backend/login/exam_login.php" method="POST">
    <div class="container">
      <h2>Examiner's Login</h2>
      <label for="stId"><br>EXAMINER ID<br></label>
      <input type="text" name="examId" class="text-box" placeholder="Examiner Id" required> <br>

      <label for="stPass"><br>PASSWORD<br></label> 
      <input type="password" name="examPass" class="text-box" placeholder="Password" required>

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