<?php
$servername = "[servername]";
$username = "[username]";
$password = "[password]";
$dbname = "[database name]";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        ?>
        <script>console.log("Connection failed: ");</script>
        <?php
    } else {
        ?>
        <script>console.log("Connection Completed!");</script>
        <?php
    }



?>
