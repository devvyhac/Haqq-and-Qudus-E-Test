<?php 

session_start();
if(isset($_SESSION['id'])){

require_once("../backend/require/query.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard || <?php  echo $_SESSION['firstname']; ?> - <?php  echo $_SESSION['id']; ?></title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="fontawesome/font-awesome.css">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
</head>
<body id="dashboard">
    <header>
        <span><h2><i class="fas fa-book-open"></i> E-Test</h2></span>
        <img src="../backend/signup/<?php  echo $_SESSION['picture']; ?>" alt="it is working">
        <nav id="open">
            <a><?php  echo $_SESSION['firstname']; ?> - <?php  echo $_SESSION['id']; ?></a>
            <form action="../backend/logout/logout.php" class="" method="POST">
                <button name="submit">Logout <i class="fas fa-sign-out-alt"></i></button>
            </form>
        </nav>
    </header>
    <div class="holder">
        <div class="side">
            <a href="#dashboard"><i class="fas fa-desktop"></i> Dashboard</a>
            <a href="#question"><i class="fas fa-question"></i> Question Tab</a>
            <a href="#"><i class="fas fa-list-alt"></i> Results</a>
            <a href="#students"><i class="fas fa-users"></i> Students</a>
            <a href="#"><i class="fas fa-user"></i> Profile</a>
            <a href=""><i class="fas fa-cogs"></i> Settings</a>
        </div>
        <div class="main">
            <div class="jumbo">
                <div class="description">
                    Dashboard / Overview <span>
                        <?php if (isset($_GET['message'])) {
                                  echo $_GET['message'];
                                  if (time() + 3) {
                                    $_GET['message'] = '';
                                    echo $_GET['message'];
                                  }
                              }
                              elseif (!isset($_GET['message'])) {
                                  echo "";
                              }
                        ?>
                    </span>
                </div>
                <div class="total">
                    <p><?php echo mysqli_num_rows($result); ?> Total <i class="fas fa-users"></i></p> 
                </div>
                <div class="submitted">
                    <p>34 Submitted <i class="fas fa-check"></i></p>
                </div>
                <div class="pending">
                    <p>44 Pending <i class="fas fa-hourglass-half"></i></p>
                </div>
                <div class="problem">
                    <p>0 Issue(s) <i class="fas fa-bug"></i></p>
                </div>
            </div>

            <div class="question" id="question">
                <div class="heading">
                    <h1>Upload Your Questions Here</h1>
                </div>
                <div class="form">
                    <form action="../backend/upload/upload.php" method="POST">
                        <h2 style="text-align: center">Upload Custom Questions</h2>
                        <?php require "selectdb.php" ?>
                        <?php require "select.php" ?>
                        <input type="text" placeholder="Enter Your Question Here" name="question">
                        <input type="text" placeholder="Option 1" name="opt1">
                        <input type="text" placeholder="Option 2" name="opt2">
                        <input type="text" placeholder="Option 3" name="opt3">
                        <input type="text" placeholder="Option 4" name="opt4">
                        <input type="text" placeholder="Correct Answer" name="answer">
                        <button name="submit" value="submit">Upload</button>
                    </form>
                </div>
                <div class="upload">
                    <div class="heading">
                        <h2>Upload Your Exam Documents Here</h2>
                    </div>
                    <form class="upload-csv form-upload" action="../backend/upload/upload_csv.php" method="POST" name="csv" enctype="multipart/form-data">
                        <div class="data-container">
                            <label for="data">Upload CSV File</label>
                            <br>
                            <?php require "selectdb.php" ?>
                            <?php require "select.php" ?>
                            <input type="file" class="data" name="mycsv" id="data" accept=".csv">
                            <button type="submit" class="import" id="import" name="import" >Upload File</button>
                        </div>
                        <!-- <div class="uploaderr">

                        </div> -->
                    </form>

                    <form class="upload-excel form-upload" action="upload_xsl.php" method="POST" name="csv" enctype="multipart/form-data">
                        <div class="data-container">
                            <label>Upload Excel File</label>
                            <br>
                            <?php require "selectdb.php" ?>
                            <?php require "select.php" ?>
                            <input type="file" class="data" name="myfile" id="data" accept=".xsl">
                            <button type="submit" class="import" id="import" name="excel" >Upload File</button>
                        </div>
                        <!-- <div class="uploaderr">

                        </div> -->
                    </form>
                </div>
            </div>

            <table id="students">
                <caption>List Of Students</caption>
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Id Number</th>
                        <th>Gender</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
            <?php 
            while($res = $result->fetch_assoc()) {
            
            ?>
                    <tr>
                        <td><?php  echo $res['firstname']; ?></td>
                        <td><?php  echo $res['lastname']; ?></td>
                        <td><?php  echo $res['user_id_number']; ?></td>
                        <td><?php  echo $res['gender']; ?></td>
                        <td><?php  echo $res['grade']; ?></td>
                    </tr>
            <?php 

                }
            ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Id Number</th>
                        <th>Gender</th>
                        <th>Grade</th>
                    </tr>
            </tfoot>
            </table>
        </div>
    </div>

    <footer>
        <span><h2><i class="fas fa-book-open"></i> E-Test</h2></span>
        <br>
        <div class="address">
            <h4><i class="fas fa-phone"></i> +2349034726175</h4>
            <h4><i class="fas fa-map-marker"></i> Ilorin GRA, 21109</h4>
            <h4><i class="fas fa-map"></i> Nigeria</h4>
            <h4><i class="fas fa-envelope"></i> haqq_and_qudus@gmail.com</h4>
        </div>
        <div class="copyright">
            <span><h4 class="copy">Copyright © 2019 || All Rights Reserved :: Design by Ismail Abdulqudus & Abdulhaqq Olayemi</h4></span>
        </div>
    </footer>

<script src="../js/jquery.js"></script>
<script src="../js/ajax.js"></script>
</body>
</html>

<?php 
}
else{
    header('Location: ../examiner_login.php');
}
?>

