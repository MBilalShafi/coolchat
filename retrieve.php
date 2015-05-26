
<?php
$query="SELECT * from users";
$res= mysql_query("$query");
 
 while($rows= mysql_fetch_array($res))
 {
  echo"$rows[First_name]";  
 echo"$rows[Last_name]";  
 echo"$rows[Email]"; 
  echo"$rows[Password]"; 
  echo"$rows[D_O_B]"; 
  echo"$rows[Gender]"; 
	echo"<br>";
	}						
?>