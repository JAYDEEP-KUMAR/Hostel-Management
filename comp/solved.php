<?php

require_once("../db/connection.php");

$id = $_GET['id'];

$sql2 = "update comp set status = 'Solved' where id = $id";
$result2 = $conn -> query($sql2);

if($result2)
{
     header("Refresh:5,url=show.php");
    echo "Data is updated";
}
else
{
    echo "error";
}

?>