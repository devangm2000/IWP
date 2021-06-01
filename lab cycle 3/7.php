<html>
    <head></head>
    <body>
    <form action="" method="post">
        <label for="name">Enter Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <input type="submit" name="btn" value="Submit">
        </form>

        <?php
        if(isset($_POST['btn']))
        {
            $name = $_POST['name'];
            setcookie("username", $name, 0, '/');
        }
        ?>
    </body>
</html>


