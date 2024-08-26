<?php  
//$host = 'localhost:3306';  
//$user = 'root';
//$pass = '';  
//$dbname = 'bloodbank';  
  

$name=$_POST["first"];
$age=$_POST["age"];
$email=$_POST["username"];
$contact=$_POST["phno"];
$address=$_POST["address"];
$place=$_POST["place"];
$city=$_POST["city"];
$bgroup=$_POST["blood"];

$conn = mysqli_connect("localhost","omnamahshivaya","omnamahshivaya","bloodbank1");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}   
  

$sql="INSERT INTO donorregistration VALUES('$name','$age','$email','$contact','$address','$place','$city','$bgroup')";






if(mysqli_query($conn, $sql))
{  

 echo "successfully registered <a href='frontend.html'>click here</a>";  
}
else{  
echo "Could not insert record: ";  
}  

$to = $email;
$subject = "My subject";
$txt = "please contact person he is in need";
$headers = "From: phanijyothi11@gmail.com" . "\r\n" .
//"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);


  
mysqli_close($conn); 

?>

