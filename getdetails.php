<?php

// Get the phone no.
$phone = $_REQUEST['phone'];

include 'connect.php';

if ($phone !== "") {

      $query = mysqli_query($con, "SELECT * FROM alumni WHERE phone='$phone'");

      if (mysqli_num_rows($query) > 0) {
      
      $row = mysqli_fetch_array($query);

      $name = $row["name"];
      $address = $row["address"];
      $occupation = $row["occupation"];
      $yop = $row["yop"];
      $branch = $row["branch"];
      $hostel = $row["hostel"];
      $hostel_no = $row["hostel_no"];
      $contribution = $row["contribution"];

      $result =  mysqli_query($con, "SELECT * FROM alumni WHERE phone=$phone ");

     

      // Store it in a array
      $result = array("$name", "$address", "$occupation", "$yop", "$branch", "$hostel", "$hostel_no", "$contribution");
   }else {
      $result = array(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
   }
}



// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;