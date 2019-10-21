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


    
 echo '<h1 style="text-align:center;">New Complaint</h1>';
///////////////////////////////////////////first/////////////////////////////////////////////////////  
    $sql = 'SELECT comp.id,comp.regno,comp.comp,comp.status,comp.photo,comp.reply,student.regno,student.roomno,student.block FROM comp ,student,warden WHERE comp.regno=student.regno and comp.status="not_solved" and student.block ="'.$_SESSION['block'].'" ';
    //$sql = "select * from comp where status='not_solved' and regno = '".$_SESSION['regno']."'";
    //$sql = 'select * from comp where status="not_solved" and regno='.'$_SESSION['regno']'.'';
    $result = $conn -> query($sql);
    //$row = mysqli_fetch_array($result);
echo '<table class="table table-hover"> <thead><tr style="text-align:center;"><th>Regno</th><th>Room No</th><th>Photo</th><th>Comp</th><th>Action</th></tr></thead><tbody>';
while($row = mysqli_fetch_array($result))
{
   
    
    echo '<tr style="text-align:center;"><td>'.$row['regno'].'</td>';
    
    echo '<td>'.$row['block'].'-'.$row['roomno'].'</td>';
    
    echo '<td>';
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
    echo '</td><td><form action="warden_reply.php" method="post"><input type="number" name="id" value='.$row['id'].' hidden><input type="text" name="reply"><button>Send</button></form></td>';
    echo "</td></tr>";
   

}
echo "</tbody></table>";

////////////////////////////////////////////second///////////////////////////////////////////////////

    echo '<h1 style="text-align:center;">On Process</h1>';
    
    
    $sql2 = 'SELECT comp.id,comp.regno,comp.comp,comp.status,comp.photo,comp.reply,student.regno,student.roomno,student.block FROM comp ,student,warden WHERE comp.regno=student.regno and comp.status="On Process" and student.block ="'.$_SESSION['block'].'" ';
    
//$sql = "select * from comp where status='On Process' and regno = '".$_SESSION['regno']."'";
    //$sql = 'select * from comp where status="not_solved" and regno='.'$_SESSION['regno']'.'';
    $result2 = $conn -> query($sql2);
    //$row = mysqli_fetch_array($result);
echo '<table class="table table-hover"> <thead><tr style="text-align:center;"><th>Regno</th><th>Room No</th><th>Photo</th><th>Comp</th><th>Action</th></tr></thead><tbody>';
while($row = mysqli_fetch_array($result2))
{
    
    echo '<tr style="text-align:center;"><td>'.$row['regno'].'</td>';
    
    echo '<td>'.$row['block'].'-'.$row['roomno'].'</td>';
    
    echo '<td>';
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
    echo '<td><a href="solved.php?id='.$row['id'].'"><button>Solved</button></a></td>';
    echo "</td></tr>";
   

}
echo "</tbody></table>";
    
    
?>   
</body>
</html>