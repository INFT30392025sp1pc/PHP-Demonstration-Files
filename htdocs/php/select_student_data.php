<?php
    $servername = "ls-d569aff0f012a672548dfa141c2ff6da29f4a426.cx4g6oyqyv3o.ap-southeast-2.rds.amazonaws.com";
    $username = "dbmasteruser";
    $password = ",urI{;P+E-97C<Is>,AZkgnDZ5V313mw";
    $dbname = "dbmaster";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT student_ID, first_name, last_name FROM student_data";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["student_ID"]."</td><td>".$row["first_name"]." ".$row["last_name"]."</td></tr>";
    }
    echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();
?>
