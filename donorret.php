<?php

//$host='localhost:3306';
//user='root';
//$pass='';
//$dbname='bloodbank';


$flag=0;

$conn = mysqli_connect("localhost:3306","root","","bloodbank1");

if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());
}  




$sql='SELECT * from donorregistration';


$retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
 
 while($row=mysqli_fetch_assoc($retval))
 
 {
   
  $bloods=strtolower($_POST["bloodgroup"]);
  $blood=strtolower($row['BLOODGROUP']);
  $locs=strtolower($_POST["location"]);
  $loc=strtolower($row['PLACE']);
  $cits=strtolower($_POST["city"]);
  $cit=strtolower($row['CITY']);

  if(strcmp($bloods,$blood)==0 && strcmp($locs,$loc)==0 && strcmp($cits,$cit)==0)
  {
    
   ++$flag;
   echo "<table><tr><td>BLOOD donor NAME:</td><td>{$row['NAME']}</td></tr>   ".  
         "<tr><td>AGE:</td><td> {$row['AGE']}</td></tr> ".
         "<tr><td>EMAIL:</td><td> {$row['EMAILID']}</td></tr> ".
         "<tr><td>CONTACT:</td><td> {$row['PHONENO']}</td></tr> ".
         "<tr><td>ADDRESS:</td><td> {$row['ADDRESS']}</td></tr> ".
         "<tr><td>LOCATION:</td><td> {$row['PLACE']}</td></tr> ".
         "<tr><td>CITY:</td><td>{$row['CITY']}</td></tr>".
           	   
	
        


           "<br><br><br><br><center>-----------------------*******-------------------------</center><br>";  
}

 } //end of while
if($flag==0)
{

echo "No blood donors found at $locs";
}
  

}
else
{  
echo " NO BLOOD BANKS FOUND AT $city";  
}  
mysqli_close($conn);
?>
