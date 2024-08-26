<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'bloodbank';  


$city=$_POST["place"];




$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());  
}  


echo 'Connected successfully<br/>';  






  
$sql = 'SELECT * FROM banklist';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  
 while($row = mysqli_fetch_assoc($retval))

{



$x=$row['map of bloodbank'];

    echo "BLOOD BANK NAME:{$row['name']}  <br> ".  
         "ADDRESS: {$row['address']} <br> ".
         "CITY:{$row['city']}<br>".
           "LOCATION: {$row['location']} <br> ".	   
	"CONTACT NO:{$row['phno']}<br>".
        
        "<a href=".$x.">".$row['map of bloodbank']."</a>".


  
         "--------------------------------<br>";  

 } //end of while  

}
else
{  
echo "0 results";  
}  
mysqli_close($conn);  
?> 