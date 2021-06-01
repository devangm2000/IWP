<!DOCTYPE html>
<html>
<body>
    <center>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>DoB</th>
                <th>Department</th>
                <th>Salary</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cyclesheet3");
            if ($conn === false) {
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            $sql1 = "UPDATE employee SET salary=(1.1)*salary WHERE department='Sales';";
            $result1 = $conn->query($sql1);
            $sql2 = "SELECT * FROM employee WHERE department='Sales';";
            $result2 = $conn->query($sql2);

            if ($result2->num_rows > 0) {
                while($row = $result2->fetch_assoc()) {
                    echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["Salary"] . "</td></tr>";
                }
                echo "</table>";
            } else { echo "0 results"; }

            $conn->close();
            ?>
    </center>
</body>
</html>