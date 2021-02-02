<html>
<head>
    <title>Login and Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-page">
    <div class="form">
        <form method="post" class="register-form">
        <input type="text" name="uname" placeholder="user name" />
        <input type="text" name="password" placeholder="password"/>
        <button name="submit" value="Submit">Create</button>
        <p class="message">Already Registered? <a href="#">Login</a></p>
         </form>
        
        <form class="login-form">
            <input type="text" placeholder="user name"/>
             <input type="text" placeholder="password"/>
            <button>Login</button>
            <p class="message">Not Registered? <a href="#">Register</a></p>
            
        </form>
        
        <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
        </script>
        <script>
            $('.message a').click(function(){
            $('form').animate({height: "toggle",opacity: "toggle"},"linear");
            });
        </script>
       
        
        
        </div>
    </div>    
</body>
</html>