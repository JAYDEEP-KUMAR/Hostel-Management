<!doctype html>
<html>

<head>
   <meta name="description" content="A Hostel Utility Management System">
    <meta name="keywords" content="Register complaint and Update Status">
<title>Hostel Mangement System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#002244" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    
    <style type="text/css">
        body {
            background: url("https://images.static-collegedunia.com/public/college_data/images/campusimage/1472535639b5.jpg") no-repeat center center fixed;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .bg_img {
            color: orangered;
            box-sizing: border-box;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            max-width: 560px;
            margin-top: 90px;
            padding-top: 20px;
            border: none;
            outline: none;
            margin-bottom: 150px;
        }

        input[type=text],
        input[type=number],
        input[type=password],
        select[id="block"],
        .textarea {
            background-color: antiquewhite;
            border-radius: 10px;
            outline: none;
            background-color: #f1f1f1;
            border: none;
            width: calc(100%);
            text-align: center;
        }

        .button_design {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            opacity: 0.9;
            outline: none !important;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: none;
            outline: none;
            width: 70px;
        }

        .button_design:hover {
            background-color: red;
        }

        .button_design_sign_up:hover {
            background-color: dodgerblue;
        }

        input[type=text]:focus,
        input[type=number] : focus,
        input[type=password]:focus,
        select[id="block"]:focus {
            background-color: #ddd;
            outline: none;
        }

        .login_text {
            color: white;
            background-color: rebeccapurple;
            border-radius: 10px;
        }

    </style>
</head>

<body>
    <div class="container-fluid bg_img">
        <center>
            <p class="login_text">Student Registration Portal</p>
        </center>
        <form action="student_validate.php" method="post">
            <div>
                <label for="name">Full Name : </label>
                <input type="text" id="name" placeholder="Full Name" name="name" required>
            </div>
            <div>
                <label for="uname">Registration no : </label>
                <input type="text" id="uname" placeholder="registration no" name="regno" required>
            </div>
            <div>
                <label for="userpassword">Password : </label>
                <input type="password" id="userpassword" placeholder="Password" name="password" required>
            </div>
            <div>
                <label for="phone">Phone no: </label>
                <input type="number" id="phone" placeholder="mobileno" name="mobile" required>
            </div>
            <div>
                <label for="block">Block : </label>
                <select id="block" name="block" required>
                    <option disabled selected value="not_selected">select one</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
            <div>
                <label for="reg">Room No : </label>
                <input type="text" id="reg" placeholder="your room no" name="roomno" required>
            </div>
            <div>
                <center><button name="submit" type="submit" class="button_design">Register</button></center>
            </div>
        </form>
    </div>
</body>

</html>
