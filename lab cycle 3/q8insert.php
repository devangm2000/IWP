<!DOCTYPE html>
<html>

<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "cyclesheet3");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $id =  $_REQUEST['id_num'];
        $name = $_REQUEST['name'];
        $dob =  $_REQUEST['dob'];
        $department = $_REQUEST['department'];
        $salary = $_REQUEST['sal'];

        $sql = "INSERT INTO employee  VALUES ('$id', 
            '$name','$dob','$department','$salary')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored successfully.";
            echo nl2br("\n$id\n $name\n "
                . "$dob\n $department\n $salary");
        } else {
            echo "ERROR:Sorry $sql. "
                . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>