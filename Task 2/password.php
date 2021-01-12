 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<form action="login.php" method="post">
    <div class="wrapper">
        
        <p>Please fill in your credentials to change password.</p>
        
            <div>Old Password <font color=red>*</font> <input type="password" name="old_password" class="text" required></div>
			<div>New Password <font color=red>*</font> <input type="password" name="new_password" class="text" required></div>
            <div>
			
			To change the password, click Submit <input type="submit">
               
            </div>
            
        </form>
    </div>    
</body>
</html>