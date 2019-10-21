<?php
if(isset($_POST['submit'])){
 //including the connection file for database connection 
    require_once("../db/connection.php");
    //include_once 'connection.inc.php';
    // defining variables for inserting
    
    session_start();
    
    $regno = $_SESSION['regno'];
    $comp = $_POST['comp'];
    
    
    

    if(isset($_FILES['photo']) && !empty($_FILES['photo']['name']))
    {
    
    
    $photo = getimagesize($_FILES["photo"]["tmp_name"]);
    
    if($photo != false){
        $image = $_FILES['photo']['tmp_name'];
        $imgcontent = addslashes(file_get_contents($image));
    }
    
//inserting 
    
$sql="INSERT INTO comp (regno,comp,photo) VALUES ('$regno','$comp','$imgcontent')";
    
    
    
    }
    else
    {
        $sql="INSERT INTO comp (regno,comp) VALUES ('$regno','$comp')";
    }
    
    
    
    
    
    
    
    
    
    
    
    
$result = $conn->query($sql);
if(!$result){
  
}
else{
    header("Refresh:0,url=studentshow.php");
    //echo "Registered successfully :)";
   // header("Refresh: 5,url=display_book_jay.php");
}    
}
else{  
    header("Refresh: 5,url=index.html");
    echo "Access denied!";
   
}

?>