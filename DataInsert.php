<?php
include 'connection.php';
$sql="INSERT into NewTable(firsname,lastname,email) values ('Farruhbek','Satimbayev','satimbayevfarruhbek@gmail.com')";
if($connection->query($sql)===True)
//if (mysqli_query($connection, $sql))
{
    echo "New Data Insert to Table";
}
else
{
    echo "Error: ".$sql."<br>".$connection->error;
    //. mysqli_error($connection);
}

//  $conn->exec($sql);
//  echo "New record created successfully";
//} catch(PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;

$connection->close();
//mysqli_close($connection);
?>