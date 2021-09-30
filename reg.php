<?php
include('connect.php');

$phone = $_POST["phone"];
$name = $_POST["name"];
$address = $_POST["address"];
$occupation = $_POST["occupation"];
$yop = $_POST["yop"];
$branch = $_POST["branch"];
$hostel = $_POST["hostel"];
$hostel_no = $_POST["hostel_no"];
$contribution = $_POST["contribution"];
$add_contribution = $_POST["add_contribution"];




				$query = "INSERT INTO `alumni` (`id`, `phone`, `name`, `address`, `occupation`, `yop`, `branch`, `hostel`, `hostel_no`, `contribution`, `add_contribution`) VALUES (null, '$phone', '$name', '$address', '$occupation', '$yop', '$branch', '$hostel', '$hostel_no', '$contribution', '$add_contribution')";

				if (mysqli_query($con, $query)) {
					header("location:index.php");
				} else {
					echo mysqli_error($con);
				}
            
?>