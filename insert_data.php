<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "hello world!";
    $name = $_POST["family_id"];
    $family_name = $_POST["family_name"];
    $head_of_family = $_POST["head_of_family"];
    echo "Family id: $name, Family Name: $family_name, Head of Family: $head_of_family";
} 

?>