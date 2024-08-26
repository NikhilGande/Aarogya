<?php  
//$host = 'localhost:3306';  
//$user = 'root';
//$pass = '';  
//$dbname = 'bloodbank';  
  

$fname=$_POST["first"];
$lname=$_POST["lastname"];
$gender=$_POST["gender"];
$emailid=$_POST["username"];
$password=$_POST["Password"];
$cpassword=$_POST["cPassword"];
$dob=$_POST["dob"];
$bgroup=$_POST["blood"];
$address=$_POST["address"];
$location=$_POST["location"];
$city=$_POST["city"];
$contact=$_POST["phno"];










$conn = mysqli_connect("localhost","omnamahshivaya","omnamahshivaya","bloodbank1");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}   
  

$sql="INSERT INTO userregistration VALUES('$fname','$lname','$gender','$emailid','$password','$cpassword','$dob','$bgroup','$address','$location','$city','$contact')";






if(mysqli_query($conn, $sql))
{  
 echo "HURRAYYYY!!!!!!    			SIGNED UP successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  

$to =" '$emailid' ";
$subject = "AAROGYA";
$txt = "Hi '$fname'!Thank you for joining hands with us (AAROGYA TEAM).AAROGYA welcomes you with a hope that it will be helpful to save a life at present and also in future with your most valuable help!!!!








Regards,
TEAM AAROGYA!!!!";
$headers = "From: phanijyothi11@gmail.com" . "\r\n" .
//"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);


  
mysqli_close($conn);  
?>  