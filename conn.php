<?php
$con=mysqli_connect("localhost","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
$result = mysqli_query($con,"SELECT * FROM login");
echo "connected to MySQL: " . mysqli_connect_error();
}

?>
