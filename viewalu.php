

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="my.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<title>Alumni</title>
<style>
body{
    font-family: 'Montserrat', sans-serif;
}
.nav{
    color:white;
}

.nav:hover{
  color: red;
  cursor: pointer;
}
header{
  position: sticky;
  top:0;
  z-index: 999;
}
.image{
  position:absolute;
    width:400px;
    left:0;
    bottom:0;
    z-index:997;
    margin-bottom:81px;
    margin-left:50px;
}
</style>

</head>
<body>




    <div class="my-content">
        <div class="my-container">
            <br><br><br><br>
      
  
        <br><br><br>
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
</div>




<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


<script>
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>






</body>
</html>