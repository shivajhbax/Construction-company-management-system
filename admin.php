



<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admin";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM customer";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr>&emsp;ID&emsp;&emsp;&emsp;&emsp;Name&emsp;&emsp;Salary&emsp;</tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["c_id"]."&emsp; &emsp;".$row["c_name"]." &emsp; &emsp;".$row["c_salary"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>