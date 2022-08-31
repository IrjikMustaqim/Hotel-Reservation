<?php
    // Pengecekan Login
    if(isset($_POST["submit"])){
        if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
            header("Location: halamanAdmin.php");
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/css/style.css" rel="stylesheet" type="text/css" />
    <title>Halaman login</title>
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
        <?php if(isset($error)): ?>
        <p style="color:red; font-style: italic">Username dan password salah</p>
        <?php endif; ?>
    
        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username">
    
            <label>Password</label><br>
            <input type="password" name="password" class="form_login" placeholder="Password .." style="background-color: white"><br>
    
            <input type="submit" name="submit" class="tombol_login" value="LOGIN">
    
            <br/>
            <br/>
        </form>
        
    </div>
</body>
</html>