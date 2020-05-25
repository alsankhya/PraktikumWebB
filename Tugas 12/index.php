<?php
    session_start();
    if(!empty($_SESSION['id'])){
        if($_SESSION['role']==0){
            header('location:beranda-a.php');
        }else{
            header('location:beranda-p.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <center>
    <div style=" background-color: white; width: 50%;">
        <fieldset>
            <legend><h2>Login</h2></legend>
            <table>
                <form action="login.php" method="POST">
                    <ul>
                        <li>Username</li>
                        <li><input type="text" name="user" id="user"></li>
                    </ul>
                    <ul>
                        <li>Password</li>
                        <li><input type="password" name="pass" id="pass"></li>
                    </ul>
                    <ul>
                        <li colspan="2"><input type="submit" name="login" value="Login"></li>
                    </ul>
                </form>
            </table>
        </fieldset>
    </div>
    </center>
</body>
</html>