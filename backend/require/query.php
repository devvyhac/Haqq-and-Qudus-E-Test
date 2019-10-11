<?php 
    session_start();
    require_once('database.php');

    if(!class_exists('QUERY')){

        class QUERY{
            public function query($sql){
                global $db;

                $query = "SELECT * FROM examiner";

                return $db->select($query);

            }
        }

    }

    $query = new QUERY;

?>