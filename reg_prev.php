<?php
include('connect.php');

$date = $_POST["date"];
$name = $_POST["name"];
$branch = $_POST['branch'];
$batch = empty($_POST['batch']) ? '0000' : $_POST['batch'];
$mem_no = empty($_POST['mem_no']) ? 'null' : $_POST['mem_no'];
$amount = $_POST["amount"];
$mop = $_POST["mop"];
$book_no = empty($_POST['book_no']) ? 'null' : $_POST['book_no'];
$phone = empty($_POST['phone']) ? 'null' : $_POST['phone'];




				$query = "INSERT INTO `prev_alumni` (`id`, `date`, `name`, `branch`, `batch`, `membership_no`, `amount`, `mop`, `book_no`, `phone`) VALUES (null, '$date', '$name', '$branch', '$batch', '$mem_no', '$amount', '$mop', '$book_no', '$phone')
                ";

				if (mysqli_query($con, $query)) {
					header("location:reg_prev_alumni.php");
				} else {
					echo mysqli_error($con);
				}
            
?>