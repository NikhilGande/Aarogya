<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "bloodbank";
$fname=$_POST["first"];
$lname=$_POST["lastname"];
$gender=$_POST["gender"];
$emailid=$_POST["username"];
$password=$_POST["Password"];
$cpassword=$_POST["cPassword"];
$dob=$_POST["dob"];
$bgroup=$_POST["blood"];
$address=$_POST["address"];
$city=$_POST["city"];
$contact=$_POST["phno"];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   echo "error connection failed";
}

$sql="INSERT INTO user-registration VALUES('$fname','$lname','$gender','$emailid','$password','$cpassword','$dob','$bgroup','$address','$city','$contact')";

if ($conn->query($sql) === TRUE)
 {
    echo "New record created successfully";
}
 else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 