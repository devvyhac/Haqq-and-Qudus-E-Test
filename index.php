<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To Exam Portal</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <span><h2>E-Test</h2></span>
        <nav id="open">
            <a href="signup.php">SignUp</a>
            <a href="#" id="show">Login</a>
            <ul>
                <li id="stud"><a href="student_login.php">Student</a></li>
                <li id="exam"><a href="examiner_login.php">Examiner</a></li>
            </ul>
        </nav>
    </header>

    <i class="fas fa-user"></i>

    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>

</body>
</html>