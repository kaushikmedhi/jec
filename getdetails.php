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
      $email = $row["email"];
      $yop = $row["yop"];
      $branch = $row["branch"];
      $chapter = $row["chapter"];
      $contribution = $row["contribution"];
      $add_contribution = $row["add_contribution"];
      $date = $row["reg_date"];

      $result =  mysqli_query($con, "SELECT * FROM alumni WHERE email=$email ");

     

      // Store it in a array
      $result = array("$name", "$email", "$branch", "$yop", "$chapter", "$address", "$contribution", "$add_contribution", "$date");
   }else {
      $result = null;
   }
}



// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;