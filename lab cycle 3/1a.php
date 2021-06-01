<html>
    <head>
    <title> Question 1 </title>
    </head>
<body>
<form action="1a.php" method="post">
<label for="name">Enter your name</label>
<input type="text" name="name" id="name"><br>
<br><button type="submit">Submit</button>
</form>

<?php
$name= $_REQUEST['name'];
echo "Welcome " . $name;
?>

</body>
</html>