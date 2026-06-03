<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Free Trial - SkyHost Cloud</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#020617;
    color:white;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:100%;
    max-width:600px;
    background:#0f172a;
    border:1px solid #1e293b;
    border-radius:25px;
    padding:40px;
}

.logo{
    text-align:center;
    margin-bottom:30px;
}

.logo h1{
    color:#22d3ee;
    margin-bottom:10px;
}

.logo p{
    color:#94a3b8;
}

form{
    display:flex;
    flex-direction:column;
    gap:15px;
}

input{
    padding:15px;
    border:none;
    border-radius:12px;
    background:#1e293b;
    color:white;
    font-size:16px;
}

button{
    padding:15px;
    border:none;
    border-radius:12px;
    background:#22d3ee;
    color:black;
    font-weight:bold;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    opacity:0.9;
}

.success{
    margin-top:20px;
    padding:15px;
    background:#14532d;
    border-radius:12px;
    color:#86efac;
    text-align:center;
}

.back{
    display:block;
    margin-top:20px;
    text-align:center;
    color:#22d3ee;
    text-decoration:none;
}

</style>
</head>
<body>

<div class="container">

    <div class="logo">
        <h1>SkyHost Cloud</h1>
        <p>Start Your Free Trial</p>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "
        <div class='success'>
            Thank you <b>$name</b>!<br>
            Your 7-Day Free Trial has been activated.<br>
            Confirmation sent to: $email
        </div>
        ";
    }
    ?>

    <form method="POST">

        <input
            type="text"
            name="name"
            placeholder="Full Name"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required
        >

        <input
            type="text"
            name="company"
            placeholder="Company / Organization"
        >

        <button type="submit" name="submit">
            Activate Free Trial
        </button>

    </form>

    <a href="index.php" class="back">
        ← Back to Home
    </a>

</div>

</body>
</html>