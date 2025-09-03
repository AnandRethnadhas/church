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
    echo "Connection successful!";
    return $db_conn;
}

 function fun_close_db_conn($stmt,$conn) {// Close the statement and connection
    $stmt->close();
    $conn->close();
}

$conn=fun_open_db_conn();  

if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "hello world!";
    $name = $_POST["family_id"];
    $family_name = $_POST["family_name"];
    $head_of_family = $_POST["head_of_family"];
    echo "Family id: $name, Family Name: $family_name, Head of Family: $head_of_family";
} 
    //insert family data
    $stmt = $conn->prepare("INSERT INTO family (family_id, family_name, head_of_family) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $family_id, $family_name, $head_of_family); //i-integer s-string   d-double b-blob
    
    // Set parameters and execute  
    $family_id = $name;
    
    if ($stmt->execute()) {
        echo "New family registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
   
    fun_close_db_conn($stmt,$conn);  
?>