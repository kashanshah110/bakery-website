<?php 
$pageTitle = "Home | Cakery Bakery";
$currentPage = "home";
include 'header.php'; 
?>

    <main>
        <section class="hero-section container">
            <div class="content">
                <div class="watch">
                    <a href="order.php" class="icons-link"><i class="fa-solid fa-play"></i></a>
                    <h3 id="typed-text">Order Now</h3>
                </div>
                <h1>Delicious Cakes & Freshly Baked Delights</h1>
                <p>Welcome to Cakery, where every bite is a celebration. We specialize in custom cakes, artisan breads, and sweet treats made with love and the finest ingredients.</p>
                <div class="btn-container">
                    <a href="order.php"><button>Place an Order</button></a>
                    <a href="menu.php"><button data-type="bordered-btn">See Menu</button></a>
                </div>
            </div>
            <div class="image-container">
                <img src="images/birthday cake.jpg" alt="Bakery Hero">
            </div>
        </section>

        <section class="other-section container">
            <div class="card-container">
                <div class="card">
                    <img src="images/pastery.png" alt="Pastry">
                    <h3>Celebration Cakes</h3>
                    <p>Beautifully designed cakes for all your special occasions.</p>
                </div>
                <div class="card">
                    <img src="images/bread.png" alt="Bread">
                    <h3>Artisan Breads</h3>
                    <p>Freshly baked breads with a crusty exterior and soft interior.</p>
                </div>
                <div class="card">
                    <img src="images/cookie.png" alt="Cookies">
                    <h3>Sweet Treats</h3>
                    <p>A variety of cookies and pastries to satisfy your sweet tooth.</p>
                </div>
            </div>
        </section>

        <section class="other-section container">
            <div class="column-container">
                <div class="image-part">
                    <img src="images/pancake.jpg" alt="Pancake">
                </div>
                <div class="content-part">
                    <h2>Our Fresh Promise</h2>
                    <p>We believe in quality and freshness. That's why everything in our bakery is baked daily to ensure you get the best taste and texture in every bite.</p>
                    <a href="about.php"><button>Learn More About Us</button></a>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
