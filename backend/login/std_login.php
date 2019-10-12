<?php
session_start();
    if(isset($_POST['submit'])){
        require_once("../require/database.php");
        global $db;

        $student_id = $db->connect->real_escape_string($_POST['stId']);
        $password = $db->connect->real_escape_string($_POST['stPass']);

        if(empty($student_id) || empty($password)){
            header('location: ../../student_login.php?login=empty');
            echo 'empty form';
            exit();
        }else{
            $sql = "SELECT * FROM students WHERE user_id_number='$student_id'";
            $result = $db->select($sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header('location: ../../student_login.php?login='.$result_check);
                echo 'no record in the database';
                exit();
            }else{
                if($row = $result->fetch_assoc()){
                    $hash_check = md5($password);
                    
                    if($hash_check !== $row['password']){
                        header('Location: ../../student_login.php?login=error3');
                        echo 'hash cant be verified';
                        exit();
                    }
                    else{
                        if($hash_check === $row['password']){

                            $_SESSION['firstname'] = $row['firstname'];
                            $_SESSION['lastname'] = $row['lastname'];
                            $_SESSION['id'] = $row['user_id_number'];
                            $_SESSION['gender'] = $row['gender'];
                            $_SESSION['grade'] = $row['grade'];
                            $_SESSION['picture'] = $row['picture'];

                            header('Location: ../../dashboard/exam_hall.php');
                            exit();
                        }
                    }
                }
            }
        }
    }else{
        header('Location: ../../student_login.php?login=error222');
        exit();
    }
    
?>