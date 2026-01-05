<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.php">Server Hub</a>
                </div>

                <li><a href="index.php">Home</a></li>
                <li><a href="servers.php">Servers</a></li>
                <li><a href="about.php">About</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <?php endif; ?>
        </nav>
        </div>
        </nav>
    </header>