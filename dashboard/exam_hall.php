<?php 

session_start();
if(isset($_SESSION['id'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard || <?php  echo $_SESSION['firstname']; ?> - <?php  echo $_SESSION['id']; ?></title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/examhall.css">
</head>
<body>
    <header>
        <span><h2>10:00</h2></span>
        <nav id="open">
            <a><?php  echo $_SESSION['firstname']; ?> - <?php  echo $_SESSION['id']; ?></a>
            <form action="../backend/logout/logout.php" class="" method="POST">
                <button name="submit">Logout</button>
            </form>
        </nav>
    </header>

    <div class="dashboard">
        <div class="profile">
            <div class="pic">
                <img src="../backend/signup/<?php  echo $_SESSION['picture']; ?>" alt="it is working">
            </div>
            <div class="info">
                <h3>Student Information</h3>
                    <br>
                <p class="stname"><b>Name: <?php echo $_SESSION["firstname"] ?> <?php echo $_SESSION["lastname"] ?></b></p>
                <hr>
                <p class="stid"><b>Student Id: <?php echo $_SESSION["id"] ?></b></p>
                    <br><br><br>
                <h3>INSTRUCTION</h3>
                    <br>
                <p class="instruct">answer all questions in all section</p>
                    <br><br>
                <button>Calculator</button>
            </div>
        </div>
        <div class="main">
            
        </div>
    </div>












    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
</body>
</html>

<?php 
    }
    else{
        header('Location: ../student_login.php');
    }
?>