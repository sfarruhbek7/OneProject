<?php
include 'connection.php';
$sql="Create Table TableE(id int(7) unsigned auto_increment primary key,firsname varchar(30) not null,lastname varchar(30) not null,email varchar(50))";
if($connection->query($sql)===True)
//if(mysqli_query($connection,$sql))
{
    echo "Table NewTable create successfully";
}
else
{
    echo "Error creating table: ".$connection->error;
                               //.mysqli_error($conn);
}

// use exec() because no results are returned
//$conn->exec($sql);
//echo "Table MyGuests created successfully";
//} catch(PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//$conn = null;


$connection->close();
//mysqli_close($connection);
?>