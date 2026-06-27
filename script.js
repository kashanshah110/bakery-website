const navlist = document.getElementById('navlist');
const hamburger = document.getElementById('hamburger');
//click
hamburger.addEventListener('click', () => {
    navlist.classList.toggle('navlist-active');
})
document.getElementById("orderForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let address = document.getElementById("address").value.trim();
    let item = document.getElementById("item").value;
    let quantity = document.getElementById("quantity").value;
    let cardName = document.getElementById("cardName").value.trim();
    let cardNumber = document.getElementById("cardNumber").value.trim();
    let expiry = document.getElementById("expiry").value.trim();
    let cvv = document.getElementById("cvv").value.trim();

    let error = document.getElementById("error");
    let success = document.getElementById("success");

    error.innerText = "";
    success.innerText = "";

    // Validation
    if (!name || !email || !address || !item || !quantity || !cardName || !cardNumber || !expiry || !cvv) {
        error.innerText = "All fields are required!";
        return;
    }

    if (cardNumber.length !== 16 || isNaN(cardNumber)) {
        error.innerText = "Card number must be 16 digits!";
        return;
    }

    if (cvv.length !== 3 || isNaN(cvv)) {
        error.innerText = "Invalid CVV!";
        return;
    }

    success.innerText = "Order placed successfully!";
});
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("cname").value.trim();
    let email = document.getElementById("cemail").value.trim();
    let subject = document.getElementById("subject").value.trim();
    let message = document.getElementById("message").value.trim();

    let error = document.getElementById("cerror");
    let success = document.getElementById("csuccess");

    error.innerText = "";
    success.innerText = "";

    if (!name || !email || !subject || !message) {
        error.innerText = "All fields are required!";
        return;
    }

    if (!email.includes("@")) {
        error.innerText = "Enter valid email!";
        return;
    }

    success.innerText = "Message sent successfully!";
});