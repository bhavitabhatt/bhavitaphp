
<?php
$con=mysqli_connect("au-cdbr-sl-syd-01.cleardb.net","b12e06e2f8407d","033f7061","ibmx_05407716529e103");

if(!$con)
{
die('could not connect:'.mysqli_error());
}
echo "connected";
//mysql_select_db("b1d6fc7b3aade6",$con);

$sql="INSERT INTO productphp(pid,pname,pcategory,quantity,pdes)VALUES('$_POST[pid]','$_POST[pname]','$_POST[pcategory]','$_POST[quantity]','$_POST[pdes]')";

if($con->query($sql)=== TRUE)
{
	
echo "added successfully";	
	
}
else
{
	
	echo "error".$sql." <br>".$con->error; 
}

mysqli_close($con)

?>
