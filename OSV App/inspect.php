<?php
    ini_set('display_errors', 1);
    
    include 'dbcon.php';
    
    $conn = OpenCon();

    $sql = "Select * FROM log";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "latitude: " . $row["latitude"]. " longitude ". $row["longitude"]. "<br>";
        }
    }
    else{
        echo "0 results";
    }

    $conn->close();
?>