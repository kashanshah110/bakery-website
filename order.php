<?php 
require_once 'db_connect.php';
$pageTitle = "Order | Cakery Bakery";
$currentPage = "order";
include 'header.php'; 

// Fetch products for the dropdown
$stmt = $pdo->query("SELECT id, name FROM products");
$productList = $stmt->fetchAll();
?>

    <main>
        <section class="hero-section container mint-glow">
            <div class="content">
                <div class="watch">
                    <a href="order.php" class="icons-link"><i class="fa-solid fa-cart-shopping"></i></a>
                    <h3>Start Order</h3>
                </div>
                <h1>Order Your Favorite Treats</h1>
                <p>Select your cake, pastry, or bread, then choose pickup or local delivery for fresh bakery goodness.</p>
                <div class="btn-container">
                    <a href="contact.php"><button>Get Assistance</button></a>
                    <a href="menu.php"><button data-type="bordered-btn">See Menu</button></a>
                </div>
            </div>
            <div class="image-container">
                <img src="images/piece cake.jpg" alt="Order Cakes">
            </div>
        </section>

        <section class="other-section container">
            <div class="row-container form-section">
                <div class="content order-summary">
                    <h2>Place Your Order</h2>
                    <p>Choose from our fresh bakery items, then submit your order details below for fast pickup or delivery.</p>
                    <div class="order-highlights">
                        <div class="highlight-card">
                            <h4>Fresh Baking</h4>
                            <p>All cakes, breads, and pastries are baked daily.</p>
                        </div>
                        <div class="highlight-card">
                            <h4>Pickup or Delivery</h4>
                            <p>Choose the option that works best for your schedule.</p>
                        </div>
                        <div class="highlight-card">
                            <h4>Easy Payment</h4>
                            <p>Secure card payment details are collected at checkout.</p>
                        </div>
                        <div class="highlight-card">
                            <h4>Priority Service</h4>
                            <p>Custom orders are prepared quickly for your event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="order-section">
            <form class="order-form" id="orderForm" action="process_order.php" method="POST">
                <h2>Place Order</h2>
                <p>Fill details to get quick delivery</p>

                <!-- User Info -->
                <input type="text" name="name" id="name" placeholder="Full Name" required>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
                <input type="text" name="address" id="address" placeholder="Delivery Address" required>

                <!-- Order -->
                <select name="item" id="item" required>
                    <option value="">Select Item</option>
                    <?php foreach ($productList as $prod): ?>
                        <option value="<?php echo htmlspecialchars($prod['name']); ?>"><?php echo htmlspecialchars($prod['name']); ?></option>
                    <?php endforeach; ?>
                </select>

                <input type="number" name="quantity" id="quantity" placeholder="Quantity" required>

                <!-- Payment -->
                <h3 class="payment-title">Card Payment</h3>
                <input type="text" name="cardName" id="cardName" placeholder="Card Holder Name" required>
                <input type="text" name="cardNumber" id="cardNumber" placeholder="Card Number (16 digits)" required>
                <input type="text" name="expiry" id="expiry" placeholder="MM/YY" required>
                <input type="text" name="cvv" id="cvv" placeholder="CVV" required>

                <button type="submit">Place Order</button>

                <p class="form-error" id="error"></p>
                <p class="form-success" id="success"></p>
            </form>
        </section>
    </main>

<?php include 'footer.php'; ?>
