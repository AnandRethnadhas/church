<?php 
 function fun_close_db_conn($stmt,$conn) {// Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
