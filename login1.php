<?php

//$host='localhost:3306';
//$user='root';
//$pass='';
//$dbname='bloodbank';
$flag=0;

$conn=mysqli_connect("localhost:3306","root","","bloodbank1");


if(!$conn)
{
  die('could not connect: '.mysqli_connect_error());
}


$sql='SELECT * FROM userregistration';


$retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{

  while($row=mysqli_fetch_assoc($retval))
  {
    
    $users=$_POST["username"];
    $user=$row['email'];
    $passp=$_POST["Password"];
    $pass=$row['password'];



    if(strcmp($users,$user)==0 && strcmp($passp,$pass)==0)
    {
      $flag++;
     
      echo "LOGIN SUCCESSFUL";
      header('Location: search.html');
      echo "to    start    searching   <a href='search1.html'>click here</a>";
 
    }

  }

if($flag==0)
{
  echo "WRONG USERNAME OR PASSWORD";
}
}
else{
  echo "NO RECORDS FOUND";
}
mysqli_close($conn);
?>