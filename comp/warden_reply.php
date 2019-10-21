<?php

$id = $_POST['id'];
$reply = $_POST['reply'];
require_once("../db/connection.php");

/*
echo $id;
echo $reply;

*/

$sql = "update comp set reply = '$reply' where id = $id";
$result = $conn -> query($sql);
$sql2 = "update comp set status = 'On Process' where id = $id";
$result2 = $conn -> query($sql2);
if($result)
{
     header("Refresh:5,url=show.php");
    echo "Data is updated";
}
else
{
    echo "error";
}




?>