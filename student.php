<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEC Diamond Jubilee</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="head">
                <div class="logo">
                    <img src="logo.jpg" alt="logo">
                </div>
                <div class="text">
                    <h1>Jorhat Engineering College</h1>
                    <p>Diamond Jubilee Celebration.</p>
                    <h3>Student Registration</h3>
                    <p>
                    <button><a href="index.php" style="text-decoration: none;">Alumni</a></button>
                    <button><a href="viewstu.php " style="text-decoration: none;">View Student</a></button>
                    </p>
                </div>
                
                <div class="logo">
                    <img src="logo2.jpg" alt="logo2">
                </div>
            </div>
            <div class="line"></div>
            <form action="sreg.php" method="POST">
            <div class="row">
                   <input type="text" name="name" placeholder="Name" required>
                </div>

                <div class="row">
                    <input type="text" name="phone" placeholder="Phone" required>
                 </div>
               
              
                <br>
                <div class="row">
                <label for="Branch">Branch</label>
                <select name="branch" id="">
                        
                         <option value="" selected disabled>Select Branch</option>

                        <option value="CIVIL">CIVIL</option>

                        <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
                        
                        <option value="ELECTRICAL">ELECTRICAL</option>
                        
                        <option value="INSTRUMENTATION">INSTRUMENTATION</option>
                        
                        <option value="MECHANICAL">MECHANICAL</option>
                        
                        <option value="MCA">MCA</option>

                    </select>
                </div>
                <br>
                <label class="title" for="radio">Hostel</label>
                <div class="row">
                    <div class="radio-btn">
                        <label >Hosteller</label>
                        <input type="radio" name="hostel" value="yes">
                    </div>
                    <div class="radio-btn">
                        <label >Non-hosteler</label>
                        <input type="radio" name="hostel" value="no">
                    </div>
                   
                </div>
                <div class="row">
                    <input type="text" name="hostel_no" placeholder="Hostel no." required>
                </div>

                <div class="row">
                <label for="degree">degree</label>
                <select name="degree" id="">
                        
                         <option value="" selected disabled>Select Degree</option>

                        <option value="PG">PG</option>

                        <option value="UG">UG</option>
                        
                       

                    </select>
                </div>

              
                <div class="row">
                    <input type="submit" class="createAc" value="Submit">
                </div>
            </form>
            
        </div>
     </div>       
</body>
</html>