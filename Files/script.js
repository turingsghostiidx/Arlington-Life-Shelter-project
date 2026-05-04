function toggleMenu() {
    const mobileNav = document.querySelector('.mobile-nav');
    mobileNav.classList.toggle('open');
}

document.addEventListener("DOMContentLoaded", function () {

    /* --- DROPDOWNS --- */
    document.querySelectorAll('.dropdown > a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = this.parentElement;
            const isActive = parent.classList.contains('active');

            document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));

            if (!isActive) parent.classList.add('active');
        });
    });

    document.addEventListener('click', function (e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
        }
    });

    /* --- HERO SLIDESHOW --- */
    let slides = document.querySelectorAll(".hero-slider .slide");
    let current = 0;

    function showSlide(index) {
        slides.forEach(s => s.classList.remove("active"));
        slides[index].classList.add("active");
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    function prevSlide() {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    }

    setInterval(nextSlide, 10000);

    document.querySelector(".arrow.right").addEventListener("click", nextSlide);
    document.querySelector(".arrow.left").addEventListener("click", prevSlide);

    /* --- STATS JS (FIXED) --- */
    const stats = document.querySelectorAll('.stat-box');

    stats.forEach(box => {
        const numberEl = box.querySelector('.stat-number');
        const target = +numberEl.getAttribute('data-target');
        const circle = box.querySelector('.progress');

        const circumference = 502;
        let count = 0;

        const updateCount = () => {
            const increment = Math.max(1, Math.ceil(target / 200));

            if (count < target) {
                count += increment;
                numberEl.textContent = count.toLocaleString();
                requestAnimationFrame(updateCount);
            } else {
                numberEl.textContent = target.toLocaleString();
            }
        };

        circle.style.strokeDashoffset = 0;
        updateCount();
    });

    /* --- AUTO‑HIGHLIGHT SIDEBAR LINK --- */
    const currentPage = window.location.pathname.split("/").pop();
    document.querySelectorAll(".sidebar a").forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
        }
    });

});

/* --- CONTACT FORM --- */
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const message = document.getElementById("message").value || "(No message provided)";

        const popupMessage = `Thank you for contacting us!\n\n` + `Here is the information you submitted:\n` + `----------------------------------------\n` + `First Name: ${firstName}\n` + `Last Name: ${lastName}\n` + `Email: ${email}\n` + `Phone: ${phone}\n` + `Message: ${message}`;

        alert(popupMessage);

        form.reset();
    });
});

/* --- NEWS FORM --- */
document.addEventListener("DOMContentLoaded", () => {
    const signupForm = document.getElementById("signupForm");

    signupForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const data = {
            firstName: document.getElementById("firstName").value,
            lastName: document.getElementById("lastName").value,
            address: document.getElementById("address").value,
            city: document.getElementById("city").value,
            state: document.getElementById("state").value,
            postal: document.getElementById("postal").value,
            email: document.getElementById("email").value
        };

        const popup = `Sign Up Successful!\n\n` + `Here is the information you submitted:\n` + `----------------------------------------\n` + `First Name: ${data.firstName}\n` + `Last Name: ${data.lastName}\n` + `Address: ${data.address}\n` + `City: ${data.city}\n` + `State: ${data.state}\n` + `Postal Code: ${data.postal}\n` + `Email: ${data.email}`;

        alert(popup);

        signupForm.reset();
    });
});

/* --- NEEDS FORM --- */
document.addEventListener("DOMContentLoaded", () => {

    const loginBtn = document.getElementById("loginBtn");
    const staffPanel = document.getElementById("staffPanel");
    const loginBox = document.getElementById("loginBox");

    const addBtn = document.getElementById("addBtn");
    const needsList = document.getElementById("needsList");

    // Login accepts anything
    loginBtn.addEventListener("click", () => {
        loginBox.style.display = "none";
        staffPanel.style.display = "block";
    });

    // Add new item
    addBtn.addEventListener("click", () => {
        const newItem = document.getElementById("newItem").value.trim();

        if (newItem !== "") {
            const li = document.createElement("li");
            li.textContent = newItem;
            needsList.appendChild(li);
            document.getElementById("newItem").value = "";
        }
    });

});

