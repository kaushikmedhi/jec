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

    <center>
    <div class="search">
                <input type="text" id="search" placeholder="Type here to Search...">
            </div>
    </center>

        <div id="myModal" class="modal">
        <table id="datatable" class="mdl-data-table">
                <thead style="background-color: lightgray;">
                    <th style="text-align:center; width:2%;">ID</th>
                    <th style="text-align:center; width:14%;">Name</th>
                    <th style="text-align:center; width:12%;">E-mail</th>
                    <th style="text-align:center; width:10%;">Phone</th>
                    <th style="text-align:center; width:10%;">Branch</th>
                    <th style="text-align:center; width:10%;">Batch</th>
                    <th style="text-align:center; width:10%;">Chapter</th>
                    <th style="text-align:center; width:12%;">Address</th>
                    <th style="text-align:center; width:10%;">Total Contribution</th>
                    <th style="text-align:center; width:10%;">Date</th>
                </thead>
                <tbody>

                    <?php
                      include "connect.php";
                      $sql="select * from alumni";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result))
                          {
                            ?>
                            <tr>
                            <td style="text-align:center; width:2%;"><?php echo $row[0]; ?></td>
                            
                            <td style="text-align:center; width:14%;" ><?php echo $row[3]; ?></td>
                            
                            <td style="text-align:center; width:12%;" ><?php echo $row[1]; ?></td>
                            
                            <td style="text-align:center; width:10%;<?php if($row[2] == "") {echo 'background-color:rgba(160, 4, 4, 0.314);';} ?>" ><?php echo $row[2]; ?></td>
                            
                            <td style="text-align:center; width:10%;<?php if($row[6] == "") {echo 'background-color:rgba(160, 4, 4, 0.314);';} ?>" ><?php echo $row[6]; ?></td>
                            
                            <td style="text-align:center; width:10%;<?php if($row[5] == "") {echo 'background-color:rgba(160, 4, 4, 0.314);';} ?>" ><?php echo $row[5]; ?></td>

                            <td style="text-align:center; width:10%;" ><?php echo $row[7]; ?></td>
                            
                            <td style="text-align:center; width:12%;<?php if($row[4] == "") {echo 'background-color:rgba(160, 4, 4, 0.314);';} ?>" ><?php echo $row[4]; ?></td>
                            
                            
                            <td style="text-align:center; width:10%;" ><?php echo $row[10]; ?></td>
                            
                            <td style="text-align:center; width:10%;" ><?php echo $row[11]; ?></td>

                            <?php
                    echo '</tr>';
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
    dTable=$('#datatable').DataTable( {
        responsive: true,
        "dom":"lrtip"
    } );
} );

$('#search').keyup(function(){  
        dTable.search($(this).val()).draw(); 
   })
</script>

<script src="modal-nav.js"></script>

</body>

</html>

