<?php
$id = filter_input(INPUT_POST, 'id');
$name= filter_input(INPUT_POST, 'name');
$cost= filter_input(INPUT_POST, 'cost');
$mat= filter_input(INPUT_POST, 'mat');

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
$sql = "INSERT INTO project(project_id,project_name,project_cost,project_materials) values ('$id','$name','$cost','$mat')";



if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
     echo '<script>alert("New record is inserted sucessfully");</script>'; 
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
   echo '<script>window.location = "http://localhost/brackets/web mini project/home.html";</script>';
die();
}
}
else{
echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/project.html";</script>';
die();
}
?>