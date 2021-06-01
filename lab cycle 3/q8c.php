<!DOCTYPE html>
<html>
<body>
    <center>
        <table>
                <tr>
                    <th>Department</th>
                    <th>Count</th>
                </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cyclesheet3");
            if ($conn === false) {
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            $sql = "SELECT COUNT(Id) AS cnt, department FROM employee GROUP BY department ORDER BY COUNT(Id) DESC;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["department"] . "</td><td>" . $row["cnt"] . "</td></tr>";
                }
                echo "</table>";
            } else { echo "0 results"; }

            $conn->close();
            ?>
    </center>
</body>
</html>