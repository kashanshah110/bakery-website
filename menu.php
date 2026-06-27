<?php 
require_once 'db_connect.php';
$pageTitle = "Menu | Cakery Bakery";
$currentPage = "menu";
include 'header.php'; 

// Fetch products from database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();

// Group products by category
$categories = [];
foreach ($products as $product) {
    $categories[$product['category']][] = $product;
}
?>

    <main>
        <section class="hero-section container mint-glow">
            <div class="content">
                <div class="watch">
                    <a href="order.php" class="icons-link"><i class="fa-solid fa-basket-shopping"></i></a>
                    <h3>Order Online</h3>
                </div>
                <h1>Discover Our Bakery Menu</h1>
                <p>Browse cakes, breads, pastries, and beverages made fresh every morning for a delightful experience.</p>
                <div class="btn-container">
                    <a href="order.php"><button>Place Order</button></a>
                    <a href="contact.php"><button data-type="bordered-btn">Get in Touch</button></a>
                </div>
            </div>
            <div class="image-container">
                <img src="images/birthday cake.jpg" alt="Bakery Menu">
            </div>
        </section>

        <section class="other-section container">
            <div class="column-container">
                <h2>Menu Highlights</h2>
                <p data-type="centered-txt">Enjoy our most popular bakery specialties, from celebration cakes to warm pastries.</p>
                <div class="card-container">
                    <?php if (empty($products)): ?>
                        <p>No products available at the moment.</p>
                    <?php else: ?>
                        <?php foreach ($products as $product): ?>
                        <div class="card" data-type="item">
                            <div class="image-part"><img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>"></div>
                            <div class="detail"><h4>$<?php echo number_format($product['price'], 2); ?></h4><h4><?php echo htmlspecialchars($product['name']); ?></h4></div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="other-section container">
            <div class="column-container">
                <h2>Bakery Categories</h2>
                <p data-type="centered-txt">Explore our cake, sandwich, cookie, and bread selections for every craving.</p>
                <div class="card-container">
                    <div class="card" data-type="category">
                        <img src="images/pastery.png" alt="Cake Category"><h3>Cakes</h3>
                    </div>
                    <div class="card" data-type="category">
                        <img src="images/sandwich.png" alt="Sandwich Category"><h3>Sandwiches</h3>
                    </div>
                    <div class="card" data-type="category">
                        <img src="images/cookie.png" alt="Cookie Category"><h3>Cookies</h3>
                    </div>
                    <div class="card" data-type="category">
                        <img src="images/bread.png" alt="Bread Category"><h3>Breads</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
