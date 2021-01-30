<?php      
    include('config.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($db, $username);  
        $password = mysqli_real_escape_string($db, $password);  
      
        $sql = "select *from AdminLogin where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<a href="admin.php">Logged In Successfuly... Click here to redirect to your account.</a>';  
        }  
        else{  
            echo '<a href="login.php">Invalid Username or Password... Try again.</a>';  
        }     
?>  