<?php
session_start();

if(isset($_POST["import"]) && isset($_POST["database"])){

    require_once("../require/database.php");
    $db->connection($_POST["database"]);

    $filename = $_FILES['mycsv']['tmp_name'];
    $subject = $_POST['subject'];
    if ($_FILES["mycsv"]["size"] > 0) {
        $file = fopen($filename, "r");
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sql = "INSERT INTO $subject (question, option1, option2, option3, option4, answer) VALUES ('$column[0]','$column[1]','$column[2]','$column[3]','$column[4]','$column[5]')";

            if($result = $db->insert($sql)){
                if (!empty($result)) {
                    $type = "Successful!";
                    $message = "CSV file imported into the database successfully!";
                    header("Location: ../../dashboard/welcome.php?message=$message&type=$type");
                }else{
                    $type = "Failed!";
                    $message = "CSV file import Error!";
                    header("Location: upload_csv.php?message=$message&type=$type");
                }
            }else{
                echo "error first";
            }
        }
    }else{
        echo "another error";
    }
}else{
    echo "click the botton first";
}









       

           
?>