<?php 
$pageTitle = "Restaurant | Cakery Bakery";
$currentPage = "restaurant";
include 'header.php'; 
?>

    <main>
        <section class="hero-section container mint-glow">
            <div class="content">
                <div class="watch">
                    <a href="restaurant.php" class="icons-link"><i class="fa-solid fa-utensils"></i></a>
                    <h3>Dine In</h3>
                </div>
                <h1>Visit Our Bakery Cafe</h1>
                <p>Enjoy our fresh pastries and coffee in a cozy atmosphere. We offer comfortable seating and free Wi-Fi for all our guests.</p>
                <div class="btn-container">
                    <a href="order.php"><button>Reserve a Table</button></a>
                    <a href="menu.php"><button data-type="bordered-btn">View Menu</button></a>
                </div>
            </div>
            <div class="image-container">
                <img src="images/pancake.jpg" alt="Bakery Restaurant">
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
