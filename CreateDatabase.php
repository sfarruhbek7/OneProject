<?php
include 'connection.php';
$sql = "Create Database NewDataBase3";
if(mysqli_query($connection, $sql))
//if($connection->query($sql)===True)
{
    echo "DataBase Create successfully";
}
else
{
    echo "Error Creating DataBase".$connection->error;
                                //.mysqli_error($connection);
}
$connection->close();
//mysqli_close($connection);
?>