<html>

    <head>
        <title> Question 1 </title>
    </head>

    <body>
        <form action="1c.php" method="post">

            <input type="radio" name="colour" value="red">
            <label>RED</label><br>
            <input type="radio" name="colour" value="green">
            <label>GREEN</label><br>
            <input type="radio" name="colour" value="blue">
            <label>BLUE</label><br>
            <input type="radio" name="colour" value="white">
            <label>WHITE</label><br>
            <input type="radio" name="colour" value="black">
            <label>BLACK</label><br>
            <input type="radio" name="colour" value="orange">
            <label>ORANGE</label><br>
            <br><button type="submit">Submit</button>

        </form>
        <?php
error_reporting(0);
        $colour1=$_POST["colour"];
        switch ($colour1) 
        {
            case red:
                echo "<body bgcolor= 'red'>";
                break;
            case green:
                echo "<body bgcolor= 'green'>";
                break;
            case blue:
                echo "<body bgcolor= 'blue'>";
                break;
            case white:
                echo "<body bgcolor= 'white'>";
                break;
            case black:
                echo "<body bgcolor= 'black'>";
                break;
            case orange:
                echo "<body bgcolor= 'orange'>";
                break;
        }
    
?>
    </body>

</html>
