<?php

$name=$_POST["na"];
$comment=$_POST["com"];
$email=$_POST["email"];



$mydate=getdate(date("U"));
$date= "$mydate[month] $mydate[mday] $mydate[year]";




//$host='localhost:3306';
$//user='root';
//$pass='';
//$dbname='bloodbank';


$conn = mysqli_connect("localhost","omnamahshivaya","omnamahshivaya","bloodbank1");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}   







$sql="INSERT INTO feedback values('$name','$date','$comment','$email')";



if(mysqli_query($conn, $sql))
{  
 echo "THANK YOU FOR YOUR VALUABLE FEEDBACK <br>";

 echo "click    <a href='frontend.html'> here   </a>  for    returning   to    home     page";   
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  








?>