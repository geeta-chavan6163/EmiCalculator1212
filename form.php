<!DOCTYPE html>    
<html>    
<head>    
    <title>Form</title>    
    <link rel="stylesheet" href="style.css">    
</head> 
   
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">  
	 <form action="connect.php" method="post">
              <div class="form-group">  
    <form id="login" method="get" action="login.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here"> 
	
        <br><br>    
        
    </form>     
</div>    
</body>    
</html>