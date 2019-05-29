<html>

<body>
    <?php
    
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "genericuser";
        $dbpassword = "Fisher1tech!";
        $db = "user_locations";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

    ?>

</body>

</html>
