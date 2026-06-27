<?php 
$pageTitle = "Contact | Cakery Bakery";
$currentPage = "contact";
include 'header.php'; 
?>

    <main>
        <section class="hero-section container mint-glow">
            <div class="content">
                <div class="watch">
                    <a href="contact.php" class="icons-link"><i class="fa-solid fa-envelope"></i></a>
                    <h3>Reach Out</h3>
                </div>
                <h1>Contact Cakery Bakery</h1>
                <p>Have a question or want to place a custom order? Send us a message and we’ll reply as soon as possible.</p>
                <div class="btn-container">
                    <a href="order.php"><button>Order Now</button></a>
                    <a href="about.php"><button data-type="bordered-btn">Learn More</button></a>
                </div>
            </div>
            <div class="image-container">
                <img src="images/app store.png" alt="Contact Bakery">
            </div>
        </section>

        <section class="contact-section">
            <form class="contact-form" id="contactForm" action="process_contact.php" method="POST">
                <h2>Contact Us</h2>
                <p>Send us your message</p>

                <input type="text" name="name" id="cname" placeholder="Full Name" required>
                <input type="email" name="email" id="cemail" placeholder="Email Address" required>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>

                <textarea name="message" id="message" placeholder="Your Message" required></textarea>

                <button type="submit">Send Message</button>

                <p class="form-error" id="cerror"></p>
                <p class="form-success" id="csuccess"></p>
            </form>
        </section>
    </main>

<?php include 'footer.php'; ?>
