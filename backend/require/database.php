<?php

if(!class_exists('DB')){
    class DB{
        public function connection($dbname){

            $host = 'localhost';
            $username = 'root';
            $password = '';
            // $dbname = 'examination';

            $mysql = new mysqli($host, $username, $password, $dbname);

            if($mysql->connect_errno){
                printf("cannot connect to Database", $mysql->connect_errno);
                exit();
            }

            $this->connect = $mysql;
        }

        // public function setter($name){

        //     $this->dbname = $name;

        // }

        public function insert($query){

            $result = $this->connect->query($query);
            
            return $result;

        }

        public function select($query){

            $result = $this->connect->query($query);

            // while($results = mysqli_fetch_assoc($result)){
            //     $result = $results;
            // }

            return $result;

        }
    }
}

$db = new DB;

?>