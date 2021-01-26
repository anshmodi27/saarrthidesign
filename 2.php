<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "contactus";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}
$sql = "CREATE TABLE `details` ( `S.no` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(10) NOT NULL , `Msg` TEXT NOT NULL , PRIMARY KEY (`S.no`)) ENGINE = InnoDB";

$result = mysqli_query($con , $sql);

if ($result) {
    echo "Hurrey!🥳!The Table Is Created Successfully.";
} else {
    echo "Your Badluck!☹️! The Table Not Created." . mysqli_error($con);
}



?>
