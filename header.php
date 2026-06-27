<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Cakery Bakery'; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar container">
            <div class="logo">
                <a href="index.php" class="logo-text">Cake<span>ry.</span></a>
            </div>
            <ul class="navlist" id="navlist">
                <li><a href="index.php" class="navlinks <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="navlinks <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a></li>
                <li><a href="menu.php" class="navlinks <?php echo ($currentPage == 'menu') ? 'active' : ''; ?>">Menu</a></li>
                <li><a href="restaurant.php" class="navlinks <?php echo ($currentPage == 'restaurant') ? 'active' : ''; ?>">Restaurant</a></li>
                <li><a href="order.php" class="navlinks <?php echo ($currentPage == 'order') ? 'active' : ''; ?>">Order</a></li>
                <li><a href="contact.php" class="navlinks <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
            <div class="nav-icons">
                <a href="contact.php" class="icons-link"><i class="fa-solid fa-user"></i></a>
                <a href="order.php" class="icons-link"><i class="fa-solid fa-shopping-cart"></i></a>
            </div>
            <div class="hamburger" id="hamburger">
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="burger"></div>
            </div>
        </nav>
    </header>
