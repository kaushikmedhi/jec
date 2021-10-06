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
            <div class="modal-content">

                <form action="reg.php" method="POST">

                     <div class="row">
                        <label>Phone</label>
                        <input type="number" minlength="10" maxlength="10" name="phone" id="phone" placeholder="Phone" onkeyup="GetDetail(this.value)">
                    </div>

                    <div class="row">
                        <label>E-mail</label>
                        <input type="email" name="email" id="email"  placeholder="E-mail" required>
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
                        <label>Batch</label>
                        <input type="number" min="1963" max="2021" name="yop" id="yop" placeholder="Year of passing">
                    </div>

                    <div class="row">
                        <label>Chapter</label>
                        <select name="chapter" id="chapter">

                            <option value="" selected disabled>Select Chapter</option>

                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>

                            <option value="Bengaluru">Bengaluru</option>

                            <option value="Central Commitee">Central Commitee</option>

                            <option value="Delhi NCR">Delhi NCR</option>

                            <option value="Dibrugarh">Dibrugarh</option>

                            <option value="Digboi">Digboi</option>

                            <option value="Duliajan">Duliajan</option>

                            <option value="Guwahati">Guwahati</option>

                            <option value="Jorhat">Jorhat</option>

                            <option value="Kolkata">Kolkata</option>

                            <option value="Lakhimpur">Lakhimpur</option>

                            <option value="Manipur">Manipur</option>

                            <option value="Mumbai">Mumbai</option>

                            <option value="Nagaon">Nagaon</option>

                            <option value="NRL">NRL</option>

                            <option value="Silchar">Silchar</option>

                            <option value="Sivasagar">Sivasagar</option>

                            <option value="Tezpur">Tezpur</option>

                            <option value="USA">USA</option>

                            <option value="Other">Other</option>

                        </select>
                    </div>

                    <div class="row">
                        <label>Address</label>
                        <input type="text" name="address" id="address" placeholder="Address">
                    </div>

                    <!-- <div class="row">
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
                    </div> -->

                    <div class="row">
                        <label>Contribution</label>
                        <input type="text" name="contribution" id="contribution" placeholder="Contribution" required>
                    </div>

                    <div class="row">
                        <label for="">Additional Contribution</label>
                        <input type="number" min="0" name="add_contribution" id="add_contribution" placeholder="Additional Contribution">
                    </div>

                    <div class="row">
                        <label for="">Date</label>
                        <input type="date" name="date" id="date" required>
                    </div>

                    <div class="row">
                        <input type="submit" class="createAc" value="Submit" onclick="confirm1()">
                    </div>
                </form>

            </div>
        </div>


    </main>

    <script>
        function confirm1() {
            var iframe = document.createElement("IFRAME");
            iframe.setAttribute("src", 'data:text/plain,');
            document.documentElement.appendChild(iframe);
            if (window.frames[0].window.confirm("Are you sure?")) {
                // what to do if answer "YES"
            } else {
                // what to do if answer "NO"
            }
        }
    </script>


    <script>
        function GetDetail(str) {
            input_name = document.getElementById("name");
            input_email = document.getElementById("email");
            input_branch = document.getElementById("branch");
            input_yop = document.getElementById("yop");
            input_chapter = document.getElementById("chapter");
            input_address = document.getElementById("address");
            input_contribution = document.getElementById("contribution");
            input_add_contribution = document.getElementById("add_contribution");
            input_date = document.getElementById("date");

            if (str.length == 0) {



                input_name.value = "";
                input_email.value = "";
                input_branch.value = "";
                input_yop.value = "";
                input_chapter.value = "";
                input_address.value = "";
                input_contribution.value = "";
                input_add_contribution.value = "";
                input_date.value = "";
                return;
            } else {


                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {

                    if (this.readyState == 4 &&
                        this.status == 200) {

                        var myObj = JSON.parse(this.responseText);

                        if (myObj === null) {
                            input_name.readOnly = false;
                            input_address.readOnly = false;
                            input_email.readOnly = false;
                            input_yop.readOnly = false;
                            input_branch.disabled = false;
                            input_chapter.disabled = false;
                            input_contribution.readOnly = false;

                            input_name.value = "";
                            input_address.value = "";
                            input_email.value = "";
                            input_yop.value = "";
                            input_branch.value = "";
                            input_chapter.value = "";
                            input_contribution.value = "";
                            input_add_contribution.value = "";
                            input_date.value = "";
                        }

                        input_name.value = myObj[0];
                        input_email.value = myObj[1];
                        input_branch.value = myObj[2];
                        input_yop.value = myObj[3];
                        input_chapter.value = myObj[4];
                        input_address.value = myObj[5];
                        input_contribution.value = myObj[6];
                        input_add_contribution.value = myObj[7];
                        input_date.value = myObj[8];


                        
                    }


                };

                xmlhttp.open("GET", "getdetails.php?phone=" + str, true);

                xmlhttp.send();
            }
        }
    </script>

    <!-- hostel field show/hide -->
    <!-- <script>
        function yesno(that) {
            if (that.value == "yes") {
                document.getElementById("yes").style.display = "flex";
            } else {
                document.getElementById("yes").style.display = "none";
            }
        }
    </script> -->

    <script src="modal-nav.js"></script>

</body>

</html>