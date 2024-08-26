<?php

 $mydate=getdate(date("U"));
 $date= $mydate[month]."/".$mydate[mday]."/".$mydate[year];
echo "$date";
?>