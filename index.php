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

    <div class="head">
        <div class="hide" id="nav_button" onclick="nav_button()">
            <h1>|||</h1>
        </div>
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
            <a href="">Alumni Registration</a>
            <br><br>
            <a href="">Student Registration</a>
        </nav>

        <div id="myModal" class="modal">
            <div class="modal-content">

                <form action="reg.php" method="POST">
                    <div class="row">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone" onkeyup="GetDetail(this.value)" placeholder="Phone" required>
                    </div>
                    <div class="row">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>
                    <div class="row">
                        <label>Address</label>
                        <input type="text" name="address" id="address" placeholder="Address" required>
                    </div>
                    <div class="row">
                        <label>Occupation</label>
                        <input type="text" name="occupation" id="occupation" placeholder="Current Occupation" required>
                    </div>
                    <div class="row">
                        <label>Year of passing</label>
                        <input type="text" name="yop" id="yop" placeholder="Year of passing" required>
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
                        <select name="hostel" id="hostel">

                            <option value="" selected disabled>Select Hostel Option</option>

                            <option value="yes">yes</option>

                            <option value="no">no</option>


                        </select>
                    </div>
                    <div class="row">
                        <label>Hostel no.</label>
                        <input type="text" name="hostel_no" id="hostel_no" placeholder="Hostel no." required>
                    </div>

                    <div class="row">
                        <label>Contribution</label>
                        <input type="text" name="contribution" id="contribution" placeholder="Contribution" required>
                    </div>

                    <div class="row">
                        <label for="">Additional Contribution</label>
                        <input type="number" name="add_contribution" id="add_contribution" placeholder="Additional Contribution" required>
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

</body>

</html>