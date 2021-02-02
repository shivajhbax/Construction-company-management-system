<?php
$id = filter_input(INPUT_POST, 'id');
$name= filter_input(INPUT_POST, 'name');
$pid= filter_input(INPUT_POST, 'pid');
$exp= filter_input(INPUT_POST, 'exp');
$sal= filter_input(INPUT_POST, 'sal');
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
$sql = "INSERT INTO civil_engineer(ce_id,ce_name,project_id,ce_experience,ce_salary)
values ('$id','$name','$pid','$exp','$sal')";
if ($conn->query($sql)){
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
//echo '<script>alert("Field should not be empty")</script>'; 
    echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/home.html";</script>';  
die();
}
}
else{
//echo '<script>alert("Field should not be empty")</script>'; 
    echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/civil engineer.html";</script>';
die();
}
echo '<script>window.location = "http://localhost/brackets/web mini project/civil engineer.html";</script>';
?>