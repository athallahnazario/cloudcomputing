<?php
session_start();

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username & Password yang diperbolehkan
    $valid_user = "admin";
    $valid_pass = "12345";

    if($username == $valid_user && $password == $valid_pass){

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login SkyHost</title>

<style>

body{
    background:#020617;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial;
}

.login-box{
    background:#0f172a;
    padding:40px;
    border-radius:20px;
    width:350px;
    border:1px solid #1e293b;
}

h2{
    color:#22d3ee;
    text-align:center;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:14px;
    margin-bottom:15px;
    border:none;
    border-radius:10px;
    background:#1e293b;
    color:white;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#22d3ee;
    font-weight:bold;
    cursor:pointer;
}

.error{
    color:red;
    margin-bottom:15px;
    text-align:center;
}

</style>

</head>
<body>

<div class="login-box">

    <h2>SkyHost Login</h2>

    <?php if($error){ ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">

        <input
            type="text"
            name="username"
            placeholder="Username"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>