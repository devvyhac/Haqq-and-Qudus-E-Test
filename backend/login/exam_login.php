<?php
session_start();
    if(isset($_POST['submit'])){
        
        require_once("../require/database.php");
        $db->connection('examination');

        $examiner_id = $db->connect->real_escape_string($_POST['examId']);
        $password = $db->connect->real_escape_string($_POST['examPass']);

        if(empty($examiner_id) || empty($password)){
            header('location: ../../examiner_login.php?login=empty');
            echo 'empty form';
            exit();
        }else{
            $sql = "SELECT * FROM examiners WHERE user_id_number='$examiner_id'";
            $result = $db->select($sql);
            $result_check = mysqli_num_rows($result);

            if($result_check < 1){
                header('location: ../../examiner_login.php?login=no record');
                echo 'no record in the database';
                exit();
            }else{
                if($row = $result->fetch_assoc()){
                    $hash_check = md5($password);
                    
                    if($hash_check !== $row['password']){
                        header('Location: ../../examiner_login.php?login=error3');
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

                            header('Location: ../../dashboard/welcome.php?login=success');
                            exit();
                        }
                    }
                }
            }
        }
    }else{
        header('Location: ../../examiner_login.php?login=error222');
        exit();
    }
    
?>