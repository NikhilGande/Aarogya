<?php

//$host='43.255.154.30';///path/to/socket
//$user='omnamahshivaya';
//$pass='omnamahshivaya';
//$dbname='bloodbank1';
//$socket='var/run/mysqld.sock'; // or  /tmp/mysqld.sock
$flag=0;


//$db = new mysqli('localhost:'.$socket,'usvv40jypa61','Phanijyothi11@',"bloodbank1",3306);
//mysql_connect('localhost:3306', 'usvv40jypa61', 'Phanijyothi11@') or die (mysql_error());
//mysql_select_database('bloodbank1') or die (mysql_error());
 //$db = mysql_connect('localhost:'.$socket, 'usvv40jypa61', 'password');


//$conn=mysqli_connect($host,$user,$pass,$dbname,$socket);
//$conn=mysqli_connect($db);
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
      header('Location: search1.html');
      echo "to    start    searching   <a href='search.html'>click here</a>";
 
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