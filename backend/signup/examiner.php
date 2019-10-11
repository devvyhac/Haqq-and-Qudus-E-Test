<?php
    session_start();

    require_once('../require/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if($_POST['examiner-pass'] === $_POST['examiner-confirm'] && isset($_POST)){

            if (isset($_POST['submit'])){
                
                $firstname = $db->connect->real_escape_string($_POST['firstname']);
                $lastname = $db->connect->real_escape_string($_POST['lastname']);
                $id = $db->connect->real_escape_string($_POST['id-number']);
                $gender = $db->connect->real_escape_string($_POST['gender']);
                $grade = $db->connect->real_escape_string($_POST['grade']);
                $password = md5($_POST['examiner-pass']);
                $picture = $db->connect->real_escape_string('examiner_image/'.$_FILES['picture']['name']);

                if(preg_match("!image!", $_FILES['picture']['type'])){

                    if(copy($_FILES['picture']['tmp_name'], $picture)){
                        $_SESSION['username'] = $firstname ." ". $lastname;
                        $_SESSION['picture'] = $picture;

                        $query = "INSERT INTO examiners (firstname, lastname, user_id_number, gender, grade, password, picture) VALUES ('$firstname', '$lastname', '$id', '$gender', '$grade', '$password', '$picture')";

                            if($db->insert($query) === true){
                                $_SESSION['message'] = 'User Added to the database successfully!';
                                header('Location: ../../dashboard/welcome.php');
                                return $db->insert($query);
                            }
                            else{
                                echo 'Unable to Access the database!';
                                header("Location: examiner.php");
                            }
                    }
                    else{
                        $_SESSION['message'] = 'Unable to Upload File!';
                    }
                }
                else{
                    $_SESSION['message'] = 'Please Upload only GIF, JPG or PNG images!';
                }
            }

        }
        else{
            $_SESSION['message'] = 'User password Can\'t be Verified!';
        }
    }
?>
