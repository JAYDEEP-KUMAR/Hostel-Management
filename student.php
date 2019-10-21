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
    <link rel="stylesheet" href="style/bootstrap.min.css">
    
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
            width: auto;
            height: 50px;
        }

        .button_design:hover {
            background-color: red;
        }

        .button_design_sign_up:hover {
            background-color: dodgerblue;
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
            <a href="comp/comp_register.php"><button class="button_design">Complaint Register</button></a>
        <a href="comp/studentshow.php"><button class="button_design">Show Status</button></a>
        </center>
        
        
    </div>
    
    
    <script>
        
        window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}
    </script>
    
</body>

</html>
