<?php // Prepare and bind
include 'db_open_conn.php'; // Include the database connection file
include 'db_close_conn.php'; // Include the database close connection file)")
$conn=fun_open_db_conn();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo "hello world!";
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $dobap = $_POST["dobap"];
    $docom = $_POST["docom"];
    $door_no = $_POST["door_no"];
    $house_name = $_POST["house_name"];
    $street = $_POST["street"];
    $post = $_POST["post"];
    $pincode = $_POST["pincode"];
    $phone1 = $_POST["phone1"];
    $phone2 = $_POST["phone2"];
    
    //echo "$fname,$lname,$gender,$dob,$dobap,$docom,$door_no,$house_name,$street,$post,$pincode,$phone1,$phone2";
} 
    //insert family data
    $stmt = $conn->prepare("INSERT INTO family_head (first_name,last_name,sex,dob,dobap,docom,door_no,house_name,street,post,pincode,phone1,phone2) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssisssiii", $fname,$lname,$gender,$dob,$dobap,$docom,$door_no,$house_name,$street,$post,$pincode,$phone1,$phone2); //i-integer s-string   d-double b-blob
    
    // Set parameters and execute  
    //$family_id = $name;
    
    if ($stmt->execute()) {
        echo "New family registered successfully. Please wait to redirect to Home page...";
    } else {
        echo "Error: " . $stmt->error;
    }
    fun_close_db_conn($stmt,$conn);  
    header("Refresh:3; index.php");
?>