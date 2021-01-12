
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="page-header">

Welcome <?php echo $_POST["username"]; ?> <br>
</div>
 <p>
        <a href="name.php" class="btn btn-warning">Change Name</a>
        <a href="password.php" class="btn btn-danger">Change Password</a>
    </p>

</body>
</html>
