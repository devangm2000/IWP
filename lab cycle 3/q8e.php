<!DOCTYPE html>
<html>

<body>
    <center>
        <form action="" method="post">
            <p>
                <label for="Id">Id:</label>
                <input type="text" name="id_num" id="id_num">
            </p>
            <input type="submit" value="Submit">
        </form>

        <?php
            $conn = mysqli_connect("localhost", "root", "", "cyclesheet3");
            if ($conn === false) {
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            $id = $_POST['id_num'];

            $sql = "DELETE FROM employee WHERE Id='$id';";
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted " .$id. " successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            $conn->close();
        ?>

        </table>
    </center>

</body>

</html>