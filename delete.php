<?php
$id = filter_input(INPUT_POST, 'id');
$cat = filter_input(INPUT_POST, 'g');
$option=filter_input(INPUT_POST, 'option');
if(!strcmp($option,"delete")){
    //echo "delete";
    
    
}
else if(!strcmp($option,"select * ")){
   //  echo "select * ";
}
    


if(!strcmp($cat,"project")){
    $c="project_id";
    //echo "project";
    echo '<script>alert("project record is deleted");</script>';
       echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 

}
else if(!strcmp($cat,"customer")){
    $c="c_id";
    
    
     echo '<script>alert("customer record is deleted");</script>';
           echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 

}
else if(!strcmp($cat,"construction_manager")){
    $c="cm_id";
    

         echo '<script>alert("construction_manager record is deleted");</script>';
           echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 


}
else if(!strcmp($cat,"civil_engineer")){
    $c="ce_id";
    
    
    echo '<script>alert("civil_engineer record is deleted");</script>';
       echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 

}
else if(!strcmp($cat,"architectural_engineer")){
    $c="ae_id";
    
    
        echo '<script>alert("architectural_engineer record is deleted");</script>';
       echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 

}





if (!empty($id)){
if (!empty($id)){
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
//$sql = "INSERT INTO architectural_engineer(ae_id,ae_name,project_id,ae_experience,ae_salary) values ('$id','$name','$pid','$exp','$sal')";
    
$sql = "" .$option.  " from " .$cat.  " where " .$c.  "='$id'";   
    
    
    
if ($conn->query($sql)){

    
    if(!strcmp($option,"delete")){
    //echo "record is deleted sucessfully";
         echo '<script>alert("record is deleted sucessfully");</script>'; 
        
        
}
else if(!strcmp($option,"select * ")){
    // echo "record is searched sucessfully";
    
    echo '<script>alert("record is searched sucessfully");</script>';
}
    
    
    
    
    
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo '<script>alert("id should not be empty");</script>';
           echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 

die();
}
}
else{
echo '<script>alert("id should not be empty");</script>';
           echo '<script>window.location = "http://localhost/brackets/web mini project/iddelete.html";</script>'; 

die();
}
?>