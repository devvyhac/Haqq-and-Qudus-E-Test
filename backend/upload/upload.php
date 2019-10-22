 <?php 
session_start();
if (isset($_POST["submit"]) && isset($_POST["database"])) {

    require_once("../require/database.php");
    $db->connection($_POST["database"]);

    if (isset($_POST["question"]) 
     && isset($_POST["opt1"]) && isset($_POST["opt2"]) && isset($_POST["opt3"]) 
     && isset($_POST["opt4"]) && isset($_POST["answer"]) && isset($_POST["subject"])) {

            $subject = $db->connect->real_escape_string($_POST["subject"]);
            $question = $db->connect->real_escape_string($_POST["question"]);
            $option1 = $db->connect->real_escape_string($_POST["opt1"]);
            $option2 = $db->connect->real_escape_string($_POST["opt2"]);
            $option3 = $db->connect->real_escape_string($_POST["opt3"]);
            $option4 = $db->connect->real_escape_string($_POST["opt4"]);
            $answer = $db->connect->real_escape_string($_POST["answer"]);

            $sql = "INSERT INTO $subject (question, option1, option2, option3, option4, answer) 
            VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";

            if($result = $db->insert($sql)){
                if (!empty($result)) {
                    $type = "Successful!";
                    $message = "Question added to the database successfully!";
                    header("Location: ../../dashboard/welcome.php?message=$message&type=$type");
                }else{
                    $type = "Failed!";
                    $message = "Question upload Error!";
                    header("Location: upload_csv.php?message=$message&type=$type");
                }
            }else{
                $type = "Failed!";
                $message = "unable to add question to the database!";
                header("Location: ../../dashboard/welcome.php?message=$message&type=$type");
            }
    }else{
        $type = "Failed!!";
        $message = "Please fill all the form input!";
        header("Location: ../../dashboard/welcome.php?message=$message&type=$type");
    }
}else{
    $type = "Failed!!";
    $message = "Please fill all the form input first!";
    header("Location: ../../dashboard/welcome.php?message=$message&type=$type");
}







?>