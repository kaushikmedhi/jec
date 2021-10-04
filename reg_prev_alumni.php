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

                <form action="reg_prev.php" method="POST">
                <div class="row">
                        <label>Date</label>
                        <input type="date" name="date" id="date" placeholder="Date" required>
                    </div>

                    <div class="row">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>

                    <div class="row">
                        <label for="Branch">Branch</label>
                        <select name="branch" id="branch">

                            <option value="" selected disabled>Select Branch</option>

                            <option value="null">NOT AVAILABLE</option>

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
                        <input type="number" min="1500" max="2022" name="batch" id="batch" placeholder="Batch" >
                    </div>

                    <div class="row">
                        <label>Membership No.</label>
                        <input type="text" name="mem_no" id="mem_no" placeholder="Membership No." >
                    </div>

                    <div class="row">
                        <label>Amount</label>
                        <input type="number" name="amount" id="amount" placeholder="Amount" required>
                    </div>
                    
                    <div class="row">
                        <label for="mop">Mode of payment</label>
                        <select name="mop" id="mop">

                            <option value="" selected disabled>Select mode of payment </option>

                            <option value="Online">Online</option>

                            <option value="Cheque">Cheque</option>

                            <option value="Cash">Cash</option>


                        </select>
                    </div>
                    

                    <div class="row">
                        <label>Book No.</label>
                        <input type="text" name="book_no" id="book_no" placeholder="Book No." >
                    </div>

                    <div class="row">
                        <label>Phone</label>
                        <input type="number" min="10" name="phone" id="phone"  placeholder="Phone" >
                    </div>

                    <div class="row">
                        <input type="submit" class="createAc" value="Submit" onclick="confirm1()">
                    </div>
                </form>

            </div>
        </div>


    </main>

<script>
    function confirm1(){
        var iframe = document.createElement("IFRAME");
iframe.setAttribute("src", 'data:text/plain,');
document.documentElement.appendChild(iframe);
if(window.frames[0].window.confirm("Are you sure?")){
    // what to do if answer "YES"
}else{
    // what to do if answer "NO"
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

<script src="modal-nav.js"></script>

</body>

</html>