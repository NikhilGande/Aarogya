<?php  
//$host = 'localhost:3306';  
//$user = 'phanijyothi11';  
//$pass = 'Phanijyothi11';  
//$dbname = 'bloodbank1';  
$flag=0;





$conn = mysqli_connect("localhost","omnamahshivaya","omnamahshivaya","bloodbank1");  
if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());  
}  


  
$sql = 'SELECT * FROM banklist';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  
 while($row = mysqli_fetch_assoc($retval))

{

$city=strtolower($row['city']);
$citys=strtolower($_POST["place"]);
$loc=strtolower($row['location']);
$locs=strtolower($_POST['location']);

if(strcmp($city,$citys)==0 && strcmp($loc,$locs)==0)
{


$flag++;
$x=$row['maps of bloodbanks'];

    echo "<table><tr><td>BLOOD BANK NAME:</td><td>{$row['name']}</td></tr>   ".  
         "<tr><td>ADDRESS:</td><td> {$row['address']}</td></tr> ".
         "<tr><td>CITY:</td><td>{$row['city']}</td></tr>".
           "<tr><td>LOCATION:</td><td> {$row['location']}</td></tr> ".	   
	"<tr><td>CONTACT NO:</td><td>{$row['phno']}</td></tr>".
        "<tr><td></td><td>Click on <a href=".$x.">Location </a> to see MAP</td></tr></table>".


           "<br><br><br><br><center>-----------------------*******-------------------------</center><br>";  
}




 } //end of while
if($flag==0)
{

echo "No blood banks found at $locs";
}
  

}
else
{  
echo " NO BLOOD BANKS FOUND AT $city";  
}  

$sql = 'SELECT * FROM donorregistration';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  
 while($row = mysqli_fetch_assoc($retval))

{

	$to = "rishabmacherla10@gmail.com";
	$subject = "My subject";
	$txt = "please contact person he is in need";
	$headers = "From: aarogyashivaya@gmail.com" . "\r\n" .
	//"CC: somebodyelse@example.com";

	mail($to,$subject,$txt,$headers);  
}
}
?> 