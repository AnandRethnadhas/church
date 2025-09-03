<?php // Prepare and bind
function fun_open_db_conn() {  // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "church";
    
    $db_conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($db_conn->connect_error) {
        die("Connection failed: " . $db_conn->connect_error);
        
    }
    //echo "Connection successful!";
    return $db_conn;
}