<nav class="navbar">

    <div class="logo">
        <a href="index.php">SkyHost Cloud</a>
    </div>

    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#services">Services</a></li>
        <li><a href="index.php#pricing">Pricing</a></li>
        <li><a href="watchdemo.php">Demo</a></li>
    </ul>

    <div class="nav-buttons">

        <?php if(isset($_SESSION['login'])) { ?>

            <a href="dashboard.php" class="login-btn">
                Dashboard
            </a>

            <a href="logout.php" class="start-btn">
                Logout
            </a>

        <?php } else { ?>

            <a href="login.php" class="login-btn">
                Login
            </a>

            <a href="trial.php" class="start-btn">
                Free Trial
            </a>

        <?php } ?>

    </div>

</nav>