<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "loginSystem";
$db = mysqli_connect($server,$username,$password,$database);

/////////////////////////////////////////////////////////

$name = "";
$address = "";
$dob = "";
$phone = "";
//////////////////////////////////////////////////////////

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];
    $hostel = $_POST['hostel'];
    

    mysqli_query($db, "INSERT INTO student (name, address, dob, phone) VALUES (NULL,'$name', '$phone',  '$branch', '$hostel')"); 
    header('location: student_reg.php');


}

?>