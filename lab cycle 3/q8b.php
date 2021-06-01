<!DOCTYPE html>
<html>

<body>
    <center>
        <form action="" method="post">
            <p>
                <label for="department">Department:</label>
                <input type="text" name="department" id="department">
            </p>
            <input type="submit" value="Submit">
        </form>

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
            $department = $_POST['department'];

            $sql = "SELECT * FROM employee WHERE department='$department'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["Salary"] . "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>

        </table>
    </center>

</body>

</html>