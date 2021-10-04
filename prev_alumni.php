<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEC Diamond Jubilee</title>
    <link rel="stylesheet" href="st.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.material.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    

</head>

<body>

    <div class="head">
        <div class="part1">
            <div class="hide" id="myBtn-notification">
                <h1>|||</h1>
            </div>
        </div>
        <div class="part2">
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
    </div>

    <?php include('nav.php'); ?>

    <main>
    

        <div id="myModal" class="modal">
        <table id="datatable" class="mdl-data-table">
                <thead style="background-color: lightgray;">
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Date</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;">Branch</th>
                    <th style="text-align:center;">Batch</th>
                    <th style="text-align:center;">Membership No.</th>
                    <th style="text-align:center;">Amount</th>
                    <th style="text-align:center;">Mode of payment</th>
                    <th style="text-align:center;">Book no.</th>
                    <th style="text-align:center;">Phone</th>
                </thead>
                <tbody>

                    <?php
                      include "connect.php";
                      $sql="select * from prev_alumni";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                          echo'<tr">';
                                echo'<td text-align:center;">'.$row[0].'</td>';
                                echo'<td text-align:center;">'.$row[1].'</td>';
                                echo'<td text-align:center;">'.$row[2].'</td>';
                                echo'<td text-align:center;">'.$row[3].'</td>';
                                echo'<td text-align:center;">'.$row[4].'</td>';
                                echo'<td text-align:center;">'.$row[5].'</td>';
                                echo'<td text-align:center;">'.$row[6].'</td>';
                                echo'<td text-align:center;">'.$row[7].'</td>';
                                echo'<td text-align:center;">'.$row[8].'</td>';
                                echo'<td text-align:center;">'.$row[9].'</td>';
                                
                                
                                
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







<script>
$(document).ready(function() {
    $('#datatable').DataTable( {
        autoWidth: false,
        columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell'
            }
        ]
    } );
} );
</script>
<script src="modal-nav.js"></script>

</body>

</html>

