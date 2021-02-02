var project=document.getElementById("project");
    var customer=document.getElementById("customer");
    var architectural_engineer=document.getElementById("architectural_engineer");
    var civil_engineer=document.getElementById("civil_engineer");
    var construction_manager=document.getElementById("construction_manager");
    //var result=document.getElementById("result");
    var all=document.getElementById("all");

function isdelete(){
    
    if(all.checked==true){
        var allview= '<embed type="text/php" src="allview.php" width="1500" height="600">';
        //document.result.innerHTML = "The score you entered s: " + score + ". Your letter grade is: A!";
        document.getElementById('result').innerHTML = allview;
        alert("all Details");
       }
    
    
    
    else if(project.checked==true){
       
        
      alert(jsStringFromPhp);
        
        
        var proj= '<embed type="text/php" src="projectview.php" width="1500" height="600">';
        //document.result.innerHTML = "The score you entered s: " + score + ". Your letter grade is: A!";
        document.getElementById('result').innerHTML = proj;
        alert("project is selected");
        
    }
        else if(customer.checked==true){
            var sal= '<embed type="text/php" src="customerview.php" width="1500" height="600">';
        //document.result.innerHTML = "The score you entered s: " + score + ". Your letter grade is: A!";
        document.getElementById('result').innerHTML = sal;
            
        alert("customer is selected");
            
    }
        else if(architectural_engineer.checked==true){
            var ae= '<embed type="text/php" src="aeview.php" width="1500" height="600">';
        //document.result.innerHTML = "The score you entered s: " + score + ". Your letter grade is: A!";
        document.getElementById('result').innerHTML = ae;
            alert("architectural_engineer is selected");
            
        }
        else if(civil_engineer.checked==true){
            var ce= '<embed type="text/php" src="ceview.php" width="1500" height="600">';
        //document.result.innerHTML = "The score you entered s: " + score + ". Your letter grade is: A!";
        document.getElementById('result').innerHTML = ce;
            
            
            alert("civil_engineer is selected");
            
        }
        else if(construction_manager.checked==true){
            var cm= '<embed type="text/php" src="cmview.php" width="1500" height="600">';
        //document.result.innerHTML = "The score you entered s: " + score + ". Your letter grade is: A!";
        document.getElementById('result').innerHTML = cm;
            
            alert("construction_manager is selected");
            
        }
    
}