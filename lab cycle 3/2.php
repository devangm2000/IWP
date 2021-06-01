<?php
$uname= $_POST['username'];
$pass= $_POST['password'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$education = implode(' , ', $_POST['edu']);
$email= $_POST['usermail'];
echo "<h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em><b>Name: </b></em>$uname</li>
        <li><em><b>Password: </b></em>$pass</li>
        <li><em><b>Gender: </b></em>$gender</li>
        <li><em><b>Date: </b></em>$date</li>
        <li><em><b>Month: </b></em>$month</li>
        <li><em><b>Year: </b></em>$year</li>
        <li><em><b>Education: </b></em>$education</li>
        <li><em><b>Email: </b></em>$email</li>
    </ol>"


?>