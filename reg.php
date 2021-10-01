<?php
include('connect.php');

$phone = $_POST["phone"];
$name = $_POST["name"];
$address = $_POST["address"];
$occupation = $_POST["occupation"];
$yop = $_POST["yop"];
$branch = $_POST["branch"];
$hostel = $_POST["hostel"];
$hostel_no = empty($_POST['hostel_no']) ? '0' : $_POST['hostel_no'];
$contribution = $_POST["contribution"];
$add_contribution = empty($_POST['add_contribution']) ? '0' : $_POST['add_contribution'];




				$query = "INSERT INTO `alumni` (`id`, `phone`, `name`, `address`, `occupation`, `yop`, `branch`, `hostel`, `hostel_no`, `contribution`, `add_contribution`, `reg_date`) VALUES (null, '$phone', '$name', '$address', '$occupation', '$yop', '$branch', '$hostel', '$hostel_no', '$contribution', '$add_contribution', CURRENT_TIMESTAMP()) ON DUPLICATE KEY UPDATE   
				`add_contribution`= '$add_contribution', `reg_date`=CURRENT_TIMESTAMP()";

				if (mysqli_query($con, $query)) {
					header("location:index.php");
				} else {
					echo mysqli_error($con);
				}
            
?>