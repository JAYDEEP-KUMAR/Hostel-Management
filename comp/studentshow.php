<?php
session_start();
?>

<html>
<head>
    <link rel="stylesheet" href="../style/bootstrap.min.css" type="text/css">
<script src="../style/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>



<?php

require_once("../db/connection.php");


    
 echo '<h1 style="text-align:center;">On Process</h1>';
    
    ///////////////////////////////////////////on progress////////////////////////////////////////////////////  
    
    
    
    
    $sql = "select * from comp where status='On Process' and regno = '".$_SESSION['regno']."'";
    //$sql = 'select * from comp where status="not_solved" and regno='.'$_SESSION['regno']'.'';
    $result = $conn -> query($sql);
    //$row = mysqli_fetch_array($result);
echo '<table class="table table-hover"> <thead><tr style="text-align:center;"><th>Photo</th><th>Comp</th><th>Message</th><th>Status</th></tr></thead><tbody>';
while($row = mysqli_fetch_array($result))
{
   echo '<tr style="text-align:center;"><td>';
    /*$b = $row[0];
    echo $b;*/
    if(!empty($row['photo']))
    {
    echo '<img class="image" style="width:200px;height:200px;" alt="Book" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" />';
    }
    else{
        echo "file not uploaded";
    }
    
    echo "</td><td>";
    
    
    echo $row['comp'];
    echo '</td><td>'.$row['reply'].'</td>';
    echo '<td>'.$row['status'].'</td>';
    echo "</tr>";
   

}
echo "</tbody></table>";
   
    
     echo '<h1 style="text-align:center;">Not solved</h1>';
///////////////////////////////////////////not solved yet/////////////////////////////////////////////////////    
    $sql = "select * from comp where status='not_solved' and regno = '".$_SESSION['regno']."'";
    //$sql = 'select * from comp where status="not_solved" and regno='.'$_SESSION['regno']'.'';
    $result = $conn -> query($sql);
    //$row = mysqli_fetch_array($result);
echo '<table class="table table-hover"> <thead><tr style="text-align:center;"><th>Photo</th><th>Comp</th><th>Status</th></tr></thead><tbody>';
while($row = mysqli_fetch_array($result))
{
   echo '<tr style="text-align:center;"><td>';
    /*$b = $row[0];
    echo $b;*/
    if(!empty($row['photo']))
    {
    echo '<img class="image" style="width:200px;height:200px;" alt="Book" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" />';
    }
    else{
        echo "file not uploaded";
    }
    
    echo "</td><td>";
    echo $row['comp'];
    echo '<td>'.$row['status'].'</td>';
    echo "</tr>";
   

}
echo "</tbody></table>";
   
    
    echo '<h1 style="text-align:center;">Solved</h1>';
    
    ///////////////////////////////////////////Solved/////////////////////////////////////////////////////    
    $sql = "select * from comp where status='Solved' and regno = '".$_SESSION['regno']."'";
    //$sql = 'select * from comp where status="not_solved" and regno='.'$_SESSION['regno']'.'';
    $result = $conn -> query($sql);
    //$row = mysqli_fetch_array($result);
echo '<table class="table table-hover"> <thead><tr style="text-align:center;"><th>Photo</th><th>Comp</th><th>Status</th></tr></thead><tbody>';
while($row = mysqli_fetch_array($result))
{
   echo '<tr style="text-align:center;"><td>';
    /*$b = $row[0];
    echo $b;*/
    if(!empty($row['photo']))
    {
    echo '<img class="image" style="width:200px;height:200px;" alt="Book" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" />';
    }
    else{
        echo "file not uploaded";
    }
    
    echo "</td><td>";
    echo $row['comp'];
    echo '<td>'.$row['status'].'</td>';
    echo "</tr>";
   

}
echo "</tbody></table>";
   
    
?>   
</body>
</html>