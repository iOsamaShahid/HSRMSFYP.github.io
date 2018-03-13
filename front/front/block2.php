<?php

//Block 1
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "housing_management_system"; 
$table = "videos"; 



///Block 3
$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase, $connection);



//Block 4
if((!empty($description)) && ($success == 1)){
mysql_query("INSERT INTO $table (description, filename, fileextension)
VALUES ('$description', '$name', '$fileextension')");
}


//Block 5
mysql_close($connection);

?>
<p id="para6">Videos