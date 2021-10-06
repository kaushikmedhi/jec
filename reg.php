<?php
include('connect.php');

$email = $_POST["email"];
$phone =  empty($_POST['phone']) ? null :  $_POST["phone"];
$name = $_POST["name"];
$chapter = $_POST["chapter"];
$address =  empty($_POST['address']) ? null :  $_POST["address"];
$occupation =  empty($_POST['occupation']) ? null : $_POST["occupation"];
$yop =  empty($_POST['yop']) ? null : $_POST["yop"];
$branch =  empty($_POST['branch']) ? null : $_POST["branch"];
$contribution = $_POST["contribution"];
$add_contribution = empty($_POST['add_contribution']) ? '0' : $_POST['add_contribution'];
$total = $contribution + $add_contribution;
$date = $_POST['date'];




				$query = "INSERT INTO `alumni` (`id`, `email`, `phone`, `name`, `address`, `yop`, `branch`, `chapter`, `contribution`, `add_contribution`, `total`, `reg_date`) VALUES (null, '$email', '$phone', '$name', '$address', '$yop', '$branch', '$chapter', '$contribution', '$add_contribution', '$total', CURRENT_TIMESTAMP()) ON DUPLICATE KEY UPDATE   
				`add_contribution`= '$add_contribution', `reg_date`='$date', `total` = '$total' ";

				if (mysqli_query($con, $query)) {
					header("location:index.php");
				} else {
					echo mysqli_error($con);
				}
            
?>
