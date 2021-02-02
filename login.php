<?php
$id = filter_input(INPUT_POST, 'name');
$name= filter_input(INPUT_POST, 'id');

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
//$sql = "INSERT INTO construction_manager(cm_id,cm_name,project_id,cm_experience,cm_salary)values ('$id','$name','$pid','$exp','$sal')";
    
    
     $sql = "SELECT *FROM construction_manager WHERE cm_id = '$id' and cm_name = '$name'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['cm_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
           echo '<script>alert("Logged in successfully");</script>'; 
          echo '<script>window.location = "admin panel.php";</script>';
         //header("location: home.html");
          
      }else {
          echo '<script>alert("Password incorrect");</script>'; 
          echo '<script>window.location = "index.html";</script>';
          
         $error = "Your Login Name or Password is invalid";
      }
    
    
    
     
    
    

$conn->close();
}
}
else{
echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/index.html";</script>';
die();
}
}
else{
 echo '<script>alert("Please eneter your Details correctly");</script>'; 
   echo '<script>window.location = "http://localhost/brackets/web mini project/index.html";</script>';
die();
}
?>