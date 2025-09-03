<?php // Prepare and bind
include 'db_open_conn.php'; // Include the database connection file
include 'db_close_conn.php'; // Include the database close connection file
$conn=fun_open_db_conn();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo "hello world!";
    $name = $_POST["family_no"];
  
    //echo "Family id: $name";
}   //show all data
    $stmt=$conn->prepare("Select * from family_head");
    $stmt->execute();
   
    $stmt->bind_result($family_no, $fname, $lname, $gender, $dob, $dobap, $docom, $door_no, $house_name, $street, $post, $pincode, $phone1, $phone2);
     $stmt->store_result();
    /*//show family data
    $stmt = $conn->prepare("SELECT family_no, first_name, last_name FROM family_head WHERE family_no = ?");
    $stmt->bind_param("i", $family_no); //i-integer s-string
    $family_no = $name;
    
    $stmt->execute();
    $stmt->bind_result($family_no, $fname, $lname);
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        while ($stmt->fetch()) {
            echo "<table border=1><tr><th>Family No</th><th>First Name</th><th>Last Namey</th></tr>
            <tr><th>$family_no</th><th>$fname</th><th>$lname</th></tr></table><br>";
        }
    } else {
        echo "No family found with ID: $name";
    }*/
fun_close_db_conn($stmt,$conn);

?>