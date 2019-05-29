<?php

ini_set('display_errors', 1);

include 'dbcon.php';

$conn = OpenCon();

$userlatitude = $_POST['lat'];
$userlongitude = $_POST['long'];

echo $userlatitude;
echo $userlongitude;

$sql = "INSERT INTO log (longitude, latitude)
VALUES ('$userlongitude', '$userlatitude')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

CloseCon($conn);

?>