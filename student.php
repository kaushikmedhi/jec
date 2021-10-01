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
            <a href="">Student Registration</a>
            <br><br>
            <a href="">View Alumni</a>
            <br><br>
            <a href="">View Student</a>
        </nav>

        <div id="myModal" class="modal">
            <div class="modal-content">

                <form action="stu_reg.php" method="POST">
                    <div class="row">
                        <label>Phone</label>
                        <input type="number" min="10" name="phone" id="phone" onkeyup="GetDetail(this.value)" placeholder="Phone" required>
                    </div>
                    <div class="row">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>
                   
                    <div class="row">
                        <label for="Branch">Branch</label>
                        <select name="branch" id="branch">

                            <option value="" selected disabled>Select Branch</option>

                            <option value="CIVIL">CIVIL</option>

                            <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>

                            <option value="ELECTRICAL">ELECTRICAL</option>

                            <option value="INSTRUMENTATION">INSTRUMENTATION</option>

                            <option value="MECHANICAL">MECHANICAL</option>

                            <option value="MCA">MCA</option>

                        </select>
                    </div>
                    <div class="row">
                        <label for="hostel">Hostel</label>
                        <select name="hostel" id="hostel" onchange="yesno(this);">

                            <option value="" selected disabled>Select Hostel Option</option>

                            <option value="yes">yes</option>

                            <option value="no">no</option>


                        </select>
                    </div>
                    <div class="row" id="yes" style="display: none;">
                        <label>Hostel no.</label>
                        <input type="text" name="hostel_no" id="hostel_no" placeholder="Hostel no.">
                    </div>


                    <div class="row">
                <label for="degree">Degree</label>
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


    </main>

    <script>
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("name").value = "";
                document.getElementById("address").value = "";
                document.getElementById("occupation").value = "";
                document.getElementById("yop").value = "";
                document.getElementById("branch").value = "";
                document.getElementById("hostel").value = "";
                document.getElementById("hostel_no").value = "";
                document.getElementById("contribution").value = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {

                    if (this.readyState == 4 &&
                        this.status == 200) {

                        var myObj = JSON.parse(this.responseText);


                        document.getElementById("name").value = myObj[0];
                        document.getElementById("address").value = myObj[1];

                        document.getElementById("occupation").value = myObj[2];
                        document.getElementById("yop").value = myObj[3];
                        document.getElementById("branch").value = myObj[4];
                        document.getElementById("hostel").value = myObj[5];
                        document.getElementById("hostel_no").value = myObj[6];
                        document.getElementById("contribution").value = myObj[7];
                    }
                };

                xmlhttp.open("GET", "getdetails.php?phone=" + str, true);

                xmlhttp.send();
            }
        }
    </script>
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
    function yesno(that) {
    if (that.value == "yes") {
        document.getElementById("yes").style.display = "flex";
    } else {
        document.getElementById("yes").style.display = "none";
    }
}
</script>

</body>

</html>