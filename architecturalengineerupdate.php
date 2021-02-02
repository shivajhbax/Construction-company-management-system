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
//$sql = "INSERT INTO (,ae_name,project_id,ae_experience,ae_salary) values ('$id','$name','$pid','$exp','')";
    
    
    
    $sql="UPDATE architectural_engineer
SET 
ae_name='$name',
project_id='$pid',
ae_experience='$exp',
ae_salary='$sal'
WHERE ae_id='$id'";
if ($conn->query($sql)){
// echo '<script>alert("New record is inserted sucessfully")</script>';
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
   echo '<script>window.location = "http://localhost/brackets/web mini project/architectural engineer.html";</script>';
die();
}
}
else{
echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/architectural engineer.html";</script>';
die();
}
?>