<?php
if (isset($_POST['submit'])) {
    
    
  require_once("../db/connection.php");
    
    $name     = $_POST['name'];
    $userid   = $_POST['userid'];
    $password = md5($_POST['password']);
    $mobile   = ($_POST['mobile']);
    $block    = $_POST['block'];
    
    $sql2    = "select userid from warden where userid='$userid' and mobile='$mobile'";
    $result2 = $conn->query($sql2);
    $row2    = mysqli_fetch_array($result2);
    $b2      = $row2[0];
    
    $sql1    = "select userid from warden where userid='$userid'";
    $result1 = $conn->query($sql1);
    $row1    = mysqli_fetch_array($result1);
    $b1      = $row1[0];
    
    
    if ($userid != $b2) {
        
        if ($userid != $b1) {
            
            $sql = "INSERT INTO warden (name,userid,password,mobile,block) VALUES ('$name','$userid','$password','$mobile','$block')";
            
            if (!$result = $conn->query($sql)) {
                header("Refresh: 10,url=register_warden.php");
                die('There was an error running the query [' . $conn->error . ']');
                
            } else {
                header("Refresh: 5,url=../login/login_warden.html");
                echo "your are regitered succesfull...";
                
            }
        } else {
            header("Refresh: 10,url=register_warden.php");
            echo "user id already exist choose another id";
            
        }
    } else {
        header("Refresh: 10,url=../login/login_warden.php");
        echo "you are already register";
        
    }
    
}


else {
    header("Refresh: 5,url=register_warden.php");
    echo "you can't access page .  . . ";
    
}
?>
</body>

</html>