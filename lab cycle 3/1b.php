<html>
<head><title> Question 1 </title></head>
<body>
<form action="1b.php" method="post">
<label for="name">Enter your name</label>
<input type="text" name="name" id="name"><br><br>
<button type="submit">Submit</button>
</form>

<?php 
if(isset($_POST['name']))
{
    $name = $_POST['name']; 
    date_default_timezone_set('Asia/Calcutta');
    $hr =  date('G');
    if ( $hr >= 4 && $hr <= 11 ) 
    {
        echo "Good Morning " . $name."<br>";
        echo "Time(Hour) right now:".$hr;
    }
    else if ( $hr >= 12 && $hr <= 16 ) 
    {
        echo "Good Afternoon " . $name."<br>";
        echo "Time(Hour) right now:".$hr;
    } 
    else if ( $hr >= 17 || $hr <=19 ) 
    {
        echo "Good Evening " . $name."<br>";
        echo "Time(Hour) right now:".$hr;
    }
    else if ( $hr >= 20 || $hr <=3 ) 
    {
        echo "Good Evening " . $name."<br>";
        echo "Time(Hour) right now:".$hr;
    }
    else
    {
        echo "ERROR";
    }
}
?>
</body>
</html>
