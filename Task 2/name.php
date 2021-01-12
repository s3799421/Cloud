 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Name</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<form action="main.php" method="post">

    <div class="wrapper">
        
        <p>Please fill in your credentials to change name.</p>
        
           <div>Username <font color=red>*</font> <input type="text" name="username" class="text" autocomplete="off" required></div>   
            
            <div>
			
			To change the name, click Submit <input type="submit">
               
            </div>
            
        </form>
    </div>    
</body>
</html>