<?php 
$pageTitle = "About | Cakery Bakery";
$currentPage = "about";
include 'header.php'; 
?>

    <main>
        <section class="hero-section container mint-glow">
            <div class="content">
                <div class="watch">
                    <a href="about.php" class="icons-link"><i class="fa-solid fa-circle-info"></i></a>
                    <h3>Our Story</h3>
                </div>
                <h1>About Cakery Bakery</h1>
                <p>We are a family-owned bakery dedicated to bringing the joy of fresh-baked goods to our community every single day.</p>
                <div class="btn-container">
                    <a href="menu.php"><button>View Menu</button></a>
                    <a href="contact.php"><button data-type="bordered-btn">Contact Us</button></a>
                </div>
            </div>
            <div class="image-container">
                <img src="images/muffins.jpg" alt="About Bakery">
            </div>
        </section>

        <section class="other-section container">
            <div class="column-container">
                <div class="content-part">
                    <h2>The Art of Baking</h2>
                    <p>Our bakers use traditional methods combined with modern creativity to craft unique flavors and textures that you won't find anywhere else.</p>
                </div>
                <div class="image-part">
                    <img src="images/waffles.jpg" alt="Baking Art">
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
