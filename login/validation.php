<?php
    session_start();  

if(isset($_POST['submit']))
{

    /////////////////////////////////////////////////////////////////////////////

require_once("../db/connection.php");

    
    if($_POST['who_are_you'] == 'warden') 
    {

//////////////////////////////////////////

    $userid = $_POST['userid'];
    $password = md5($_POST['password']);

    $sql = "select userid,password,name,block from warden where userid = '$userid' ";
    
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    
    $vid =$row[0];
    $vpass = $row[1];
    $vname = $row[2];
        $vblock = $row[3];
    
   
    
    if ($vid==$userid){ 
        
        if ($vpass==$password){
            header ("Refresh: 5,url=../warden.php");
            echo 'Successfully login ';
            
         
            
            $_SESSION['userid'] = $vid;
            $_SESSION['wname'] = $vname;
            $_SESSION['block'] = $vblock;
            
        }
        else{  
            echo 'Invalid password dude ';
            
        }
    }
    else{
        header ("Refresh: 5,url=../register/register_warden.php");
        echo 'Signup please.. you are not registered ';
        
    }
    
   //////////////////////////////////
    }
    else
    {
       
        
        ////////////////////////////////////////
        
        
            $regno = $_POST['regno'];
    $password = md5($_POST['password']);

    $sql = "select regno,password,name from student where regno = '$regno' ";
    
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    
    $vid =$row[0];
    $vpass = $row[1];
    $vname = $row[2];
    
   
    
    if ($vid==$regno){ 
        
        if ($vpass==$password){
            header ("Refresh: 5,url=../student.php");
            echo 'Successfully login ';
             
            
            $_SESSION['regno'] = $vid;
            $_SESSION['sname'] = $vname;
        }
        else{  
            echo 'Invalid password dude ';
            
        }
    }
    else{
        header ("Refresh: 5,url=../register/register_student.php");
        echo 'Signup please.. you are not registered ';
        
    }
    
   //////////////////////////////////
    }
    
    
    
    
    
///////////////////////////////  //////////////////////////////////////////////////////  
}
else
{
    echo "please login properly...";
}
    
    
    

?>