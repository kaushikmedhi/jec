<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEC Diamond Jubilee</title>
    <link rel="stylesheet" href="st.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="head">
        <div class="hide" id="nav_button" onclick="nav_button()">
            <h1>|||</h1>
        </div>
        
        <div class="logo">
            <img src="logo.jpg" alt="logo">
        </div>
        <div class="text">
            <h1>Jorhat Engineering College</h1>
            <p>Diamond Jubilee Celebration.</p>
        </div>
        <div class="logo">
            <img src="logo2.jpg" alt="logo2">
        </div>

    </div>

    <main>
    
        <nav id="nav">
            <h1>Diamond Jubilee Registration</h1>
            <br>
            <div class="line"></div>
            <br><br>
            <a href="index.php">Alumni Registration</a>
            <br><br>
            <a href="student.php">Student Registration</a>
            <br><br>
            <a href="viewalu.php">View Alumni</a>
            <br><br>
            <a href="viewstu.php">View Student</a>
        </nav>

        <div id="myModal" class="modal">
        <table id="datatable" class="my-table-all">
                <thead >
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">ID</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Phone</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Name</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Address</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Occupation</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">YOP</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Branch</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Hostel</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Hostel No</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Contribution</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Additonal Contribution</th>
                    <th class="my-text-white" style="text-align:center;width:20%; background-color: #770677;">Total Contribution</th>
                </thead>
                <tbody>

                    <?php
                      include "connect.php";
                      $sql="select * from alumni";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr class="my-white" style="border-width: 0px;">';
                                echo'<td style="width:20%; text-align:center;">'.$row[0].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[1].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[2].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[3].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[4].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[5].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[6].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[7].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[8].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[9].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[10].'</td>';
                                echo'<td style="width:20%; text-align:center;">'.$row[11].'</td>';
                                
                                
                                
                        echo'</tr>';
                          }   
                      ?>   
                    
                </tbody>
            </table>
        </div>


    </main>


<script>
        function nav_button() {
            var nav_button = document.getElementById("nav_button");
            var nav = document.getElementById("nav");

            if (nav.style.display == "block") {
                nav.style.display = "none";
                nav_button.style.transform = "rotate(90deg)";
            } else {
                nav.style.display = "block";
                nav_button.style.transform = "rotate(0deg)";
            }
        }
    </script>





<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


<script>
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>


</body>

</html>

