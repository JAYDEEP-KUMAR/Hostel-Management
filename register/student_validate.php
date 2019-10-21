<?php
if (isset($_POST['submit'])) {
    
    require_once("../db/connection.php");
    
    $name     = $_POST['name'];
    $regno   = $_POST['regno'];
    $password = md5($_POST['password']);
    $mobile   = ($_POST['mobile']);
    $block    = $_POST['block'];
    $roomno    = $_POST['roomno'];
    
    $sql2    = "select regno from student where regno='$regno' and mobile='$mobile'";
    $result2 = $conn->query($sql2);
    $row2    = mysqli_fetch_array($result2);
    $b2      = $row2[0];
    
    $sql1    = "select regno from student where regno='$regno'";
    $result1 = $conn->query($sql1);
    $row1    = mysqli_fetch_array($result1);
    $b1      = $row1[0];
    
    
    if ($regno != $b2) {
        
        if ($regno != $b1) {
            
            $sql = "INSERT INTO student (name,regno,password,mobile,block,roomno) VALUES ('$name','$regno','$password','$mobile','$block','$roomno')";
            
            if (!$result = $conn->query($sql)) {
                header("Refresh: 10,url=register_student.php");
               // die('There was an error running the query [' . $conn->error . ']');
                
            } else {
                header("Refresh: 10,url=../login/login_student.html");
                echo "your are regitered succesfull...";
                
            }
        } else {
            header("Refresh: 10,url=register_student.php");
            echo "user id already exist choose another id";
            
        }
    } else {
        header("Refresh: 10,url=../login/login_student.html");
        echo "you are already register";
        
    }
    
}


else {
    header("Refresh: 5,url=../index.html");
    echo "you can't access page .  . . ";
    
}
?>
</body>

</html>