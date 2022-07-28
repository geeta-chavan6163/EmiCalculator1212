<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="shortcut icon" href="assets/imgs/spring_design.jpg" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div id="bg">
        
    </div>
    <div class="page-container">
        <div class="login-container">
            <div class="form-header">
                
                <div class="login-txt">
                    EMI Calculator
                </div> 
                <div class="dark-side">

                </div>  
            </div>

           
                  <form action="connect.php" method="post" >
                    <div class="form-body">
                        
                     <input type="text" name="username" id="user-name">
                     <input type="password" name="password" id="pwd">
                     <a class="forg-pwd">Forgot your password?</a>

                     <input type="button" value="Login">
		  		
                    </div>

            </form>
        </div>
    </div>
</body>
</html>