<?php
$id = filter_input(INPUT_POST, 'id');
$name= filter_input(INPUT_POST, 'name');
$pid= filter_input(INPUT_POST, 'pid');
$bill= filter_input(INPUT_POST, 'bill');

if (!empty($id)){
if (!empty($name)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admin";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
//$sql = "INSERT INTO customer(c_id,c_name,project_id,c_salary) values ('$id','$name','$pid','$bill')";
    
    $sql="UPDATE customer 
SET c_name='$name',
project_id='$pid',
c_salary='$bill' 
WHERE c_id='$id'";

    
if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
   
 
 echo '<script>alert("details updated sucessfully");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/home.html";</script>'; 
    
    
        
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{

   echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/customer.html";</script>'; 
die();
}
}
else{
echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/customer.html";</script>';
die();
}
   
    
?>

