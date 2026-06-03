<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SkyHost Demo</title>

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
}

.navbar{
    padding:25px 60px;
    border-bottom:1px solid #1e293b;
}

.logo{
    color:#22d3ee;
    font-size:32px;
    font-weight:bold;
}

.container{
    max-width:1200px;
    margin:auto;
    padding:80px 40px;
}

.title{
    text-align:center;
    margin-bottom:50px;
}

.title h1{
    font-size:50px;
    margin-bottom:15px;
}

.title p{
    color:#94a3b8;
}

.video-box{
    background:#0f172a;
    border:1px solid #1e293b;
    border-radius:25px;
    overflow:hidden;
    padding:20px;
}

.video-placeholder{
    width:100%;
    height:600px;
    background:#1e293b;
    border-radius:20px;

    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}

.play-icon{
    font-size:80px;
    margin-bottom:20px;
}

.video-placeholder h2{
    margin-bottom:10px;
}

.video-placeholder p{
    color:#94a3b8;
}

.buttons{
    margin-top:30px;
    text-align:center;
}

.buttons a{
    text-decoration:none;
}

.back-btn{
    background:#22d3ee;
    color:black;
    padding:14px 28px;
    border-radius:12px;
    font-weight:bold;
    display:inline-block;
}

</style>
</head>
<body>

<div class="navbar">
    <div class="logo">SkyHost Cloud</div>
</div>

<div class="container">

    <div class="title">
        <h1>Platform Demo</h1>
        <p>See how SkyHost Cloud works in action.</p>
    </div>

    <div class="video-box">

        <!-- NANTI VIDEO DIMASUKKAN DI SINI -->

        <div class="video-placeholder">

            <div class="play-icon">▶</div>

            <h2>Demo Video Coming Soon</h2>

            <p>
                Replace this section with your YouTube video
                or uploaded MP4 file later.
            </p>

        </div>

    </div>

    <div class="buttons">
        <a href="index.php" class="back-btn">
            Back To Home
        </a>
    </div>

</div>

</body>
</html>