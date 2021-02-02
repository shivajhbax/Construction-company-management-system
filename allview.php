<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admin";
// Create connection
$mysqli = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// Checking for connections 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$sql = "CALL allview();";
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
// HTML code to display data in tabular format 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>GFG User Details</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: aliceblue; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
         
        td { 
           border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
        th{
            border: 1px solid black; 
            padding: 10px; 
            text-align: center;
            color: aqua;
            
        }
 
       
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1>All Details</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>project_id</th>
                <th>project_name</th>
                <th>project_cost</th>
                <th>project_materials</th>
                <th>cm_id</th>
                <th>cm_name</th>
                <th>ce_id</th>
                <th>ce_name</th>
                <th>ae_id</th>
                <th>ae_name</th>
                <th>c_id</th>
                <th>c_name</th>
                
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                 <td><?php echo $rows['project_id'];?></td> 
                 <td><?php echo $rows['project_name'];?></td>
                <td><?php echo $rows['project_cost'];?></td>
                <td><?php echo $rows['project_materials'];?></td>
                <td><?php echo $rows['cm_id'];?></td> 
                <td><?php echo $rows['cm_name'];?></td> 
                <td><?php echo $rows['ce_id'];?></td> 
                <td><?php echo $rows['ce_name'];?></td>
                <td><?php echo $rows['ae_id'];?></td> 
                <td><?php echo $rows['ae_name'];?></td>
                
                <td><?php echo $rows['c_id'];?></td> 
                <td><?php echo $rows['c_name'];?></td>
                
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
    
  
    
    
</body> 
  
</html> 