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
    <center>
    <div class="search">
                <input type="text" id="search" placeholder="Type here to Search...">
            </div>
    </center>
    
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
                                ?>
                                <tr>
                                <td text-align:center;><?php echo $row[0]; ?></td>
                                
                                <td text-align:center; ><?php echo $row[1]; ?></td>
                                
                                <td text-align:center; ><?php echo $row[2]; ?></td>
                                
                                <td text-align:center; <?php if($row[3] == "null") {echo 'style="background-color:rgba(160, 4, 4, 0.314);"';} ?>><?php echo $row[3]; ?></td>
                                
                                <td text-align:center; <?php if($row[4] == "0000") {echo 'style="background-color:rgba(160, 4, 4, 0.314);"';} ?>><?php echo $row[4]; ?></td>
                                
                                <td text-align:center; <?php if($row[5] == "null") {echo 'style="background-color:rgba(160, 4, 4, 0.314);"';} ?>><?php echo $row[5]; ?></td>

                                <td text-align:center; ><?php echo $row[6]; ?></td>
                                
                                <td text-align:center;><?php echo $row[7]; ?></td>
                                
                                <td text-align:center; <?php if($row[8] == "null") {echo 'style="background-color:rgba(160, 4, 4, 0.314);"';} ?>><?php echo $row[8]; ?></td>
                                

                                <td text-align:center; <?php if($row[9] == "null") {echo 'style="background-color:rgba(160, 4, 4, 0.314);"';} ?>><?php echo $row[9]; ?></td>
                                <?php
                        echo '</tr>';
                          }   
                      ?>   
                    
                </tbody>
            </table>
        </div>


    </main>



<script>
$(document).ready(function() {
    dTable=$('#datatable').DataTable( {
        autoWidth: false,
        columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell'
            }
        ],
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

