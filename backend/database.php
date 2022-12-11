<?php
    function conn() {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'webdesigngroup9';
        
        $mysqli = new mysqli($host, $username, $password, $dbname);
        if($mysqli->connect_errno){
            die('Connection Error' . $mysqli->connect_error);
        }
        
        return $mysqli;
    }
?>