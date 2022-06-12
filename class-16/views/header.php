

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200&display=swap" rel="stylesheet">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
</head>

<body>
    <div id="wrapper">
        <?php
            $active_nav = basename(htmlspecialchars($_SERVER['REQUEST_URI'])); // index.php, blog.php
        ?>

        <!-- Start Navigation Menu -->
        <nav class="navbar">
            <div class="nav-inner">
                <div class="navbar-left">
                    <a href="index.php">
                        <img src="images/logo.png" class="nav-logo" alt="DevsEnv Logo" srcset="">
                    </a>
                </div>
                <div class="navbar-right">
                    <span class="md-hidden navbar-toggle text-white">
                        <i class="fas fa-bars" id="toggle-icon"></i>
                    </span>
                    <ul class="sm-hidden">
                        <li>
                            <a href="index.php" class="btn <?php echo ($active_nav === 'index.php') ? 'active' : '' ?>">
                                <i class="fas fa-house"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" class="btn <?php echo ($active_nav === 'contact.php') ? 'active' : '' ?>">
                                <i class="fas fa-user"></i>
                                Contact Me
                            </a>
                        </li>
                        <li>
                            <a href="portfolio.php" class="btn btn-portfolios <?php echo ($active_nav === 'portfolio.php') ? 'active' : '' ?>">
                                <i class="fas fa-th-large"></i>
                                Portfolios
                                <span class="portfolio-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="blog.php" class="btn  <?php echo ($active_nav === 'blog.php') ? 'active' : '' ?>">
                                <i class="fas fa-edit"></i>
                                Blogs
                            </a>
                        </li>
                    </ul>
                    <ul class="md-hidden mobile-navbar">
                        <li>
                            <a href="index.php">
                                <img src="images/logo.png" class="nav-logo" alt="DevsEnv Logo" width="100">
                            </a>
                        </li>
                        <li>
                            <a href="index.php" class="btn active">
                                <i class="fas fa-house"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" class="btn">
                                <i class="fas fa-user"></i>
                                Contact Me
                            </a>
                        </li>
                        <li>
                            <a href="portfolio.php" class="btn btn-portfolios">
                                <i class="fas fa-th-large"></i>
                                Portfolios
                                <span class="portfolio-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="blog.php" class="btn">
                                <i class="fas fa-edit"></i>
                                Blogs
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation Menu -->