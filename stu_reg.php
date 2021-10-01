<?php

include('connect.php');

    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];
    $hostel = $_POST['hostel'];
    $hostel_no = empty($_POST['hostel_no']) ? '0' : $_POST['hostel_no'];
    $degree = $_POST['degree'];

   $query= mysqli_query($con, "INSERT INTO `student` (`sid`, `name`, `phone`, `branch`, `hostel`, `hostelno`, `degree`) VALUES (null, '$name', '$phone', '$branch', '$hostel', '$hostel_no', '$degree')"); 

        header("location:student.php");
  
?>