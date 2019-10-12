<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create An Account</title>
        <meta content="utf-8">
        <link rel="stylesheet" href="css/signup.css">
    </head>
    <body>
        <h1>Exam Registration Form</h1>
        <div class="container" id="container">
            <div class="examiner" id="examiner">
                <form action="backend/signup/examiner.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <h2>Examiner's Form</h2>

                    <input type="text" name="firstname" id="exam-first" placeholder="Firstname" required>
                    <input type="text" name="lastname" id="exam-last" placeholder="Lastname" required>
                    <input type="text" placeholder="Examiners ID" name="id-number" id="examiner-id" required>
                    
                    <label for="exam-male">Male
                        <input type="radio" id="exam-male" name="gender" value="Male" required>
                        <span></span>
                    </label>
                      
                      
                    <label for="exam-female">Female
                        <input type="radio" id="exam-female" name="gender" value="Female" required>
                        <span></span>
                    </label>
    
                    <select name="grade" id="class" required>
                        <option >Select Grade</option>
                        <option value="JSS 1">JSS 1</option>
                        <option value="JSS 2">JSS 2</option>
                        <option value="JSS 3">JSS 3</option>
                        <option value="SSS 1">SSS 1</option>
                        <option value="SSS 2">SSS 2</option>
                        <option value="SSS 3">SSS 3</option>
                    </select>
                    <input type="password" id="examiner-pass" name="examiner-pass" placeholder="Password" autocomplete="new-password" required>
                    <input type="password" id="examiner-confirm" name="examiner-confirm" placeholder="Confirm Password" autocomplete="new-password" required>
                    <div class="avatar">
                        <label class="file-label">Select Your Profile Image: </label>
                        <input type="file" name="picture" accept="images/*" required>
                    </div>

                    <input type="submit" value="Register" id="examiner-reg" name="submit"> <a href="examiner-login.php">Login</a>
                </form>
            </div>

        <!-- Student Area starts from here till before the footer -->

            <div class="student" id="student">
                <form action="backend/signup/student.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <h2>Student's Form</h2>

                    <input type="text" name="firstname" id="std-first" placeholder="Firstname" required>
                    <input type="text" name="lastname" id="std-last" placeholder="Lastname" required>
                    <input type="text" placeholder="Examiners ID" name="id-number" id="stud-id" required>
                    
                    <label for="stud-male">Male
                        <input type="radio" id="stud-male" name="gender" value="Male" required>
                        <span></span>
                    </label>
                      
                      
                    <label for="stud-female">Female
                        <input type="radio" id="stud-female" name="gender" value="Female" required>
                        <span></span>
                    </label>
    
                    <select name="grade" id="class" required>
                        <option >Select Grade</option>
                        <option value="JSS 1">JSS 1</option>
                        <option value="JSS 2">JSS 2</option>
                        <option value="JSS 3">JSS 3</option>
                        <option value="SSS 1">SSS 1</option>
                        <option value="SSS 2">SSS 2</option>
                        <option value="SSS 3">SSS 3</option>
                    </select>
                    <input type="password" id="stud-pass" name="stud-pass" placeholder="Password" autocomplete="new-password" required>
                    <input type="password" id="stud-confirm" name="stud-confirm" placeholder="Confirm Password" autocomplete="new-password" required>
                    <div class="avatar">
                        <label class="file-label">Select Your Profile Image: </label>
                        <input type="file" name="picture" accept="images/*" required>
                    </div>
 
                    <div>
                        <input type="submit" value="Register" id="student-reg" name="submit"> <a href="student-login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>

        <footer class="foot">

        </footer>
        <script src="js/signup.js"></script>
    </body>
</html>