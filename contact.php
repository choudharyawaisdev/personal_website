<?php include 'layouts/header.php'; ?>
<style>
    /* Ensure status messages are hidden initially */
    .loading, .error-message, .sent-message { display: none; margin-top: 15px; font-weight: 600; }
    .error-message { color: #df1529; }
    .sent-message { color: #059652; }
</style>

<main class="main">
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Get in touch with us for any inquiries or assistance.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box">
                        <h3>Contact Info</h3>
                        <p>Faislabad Susan Road, Punjab, Pakistan</p>
                        <p>+92 308 5277092</p>
                        <p>chawaisdev92@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form">
                        <form action="send_contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="loading">Loading...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit" class="btn" style="background-color: #1387c1; color: #fff; padding: 10px 30px;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.querySelector('.php-email-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let form = this;
    let loading = form.querySelector('.loading');
    let errorMsg = form.querySelector('.error-message');
    let sentMsg = form.querySelector('.sent-message');
    let btn = form.querySelector('button[type="submit"]');

    loading.style.display = 'block';
    errorMsg.style.display = 'none';
    sentMsg.style.display = 'none';
    btn.disabled = true;

    let formData = new FormData(form);

    fetch(form.getAttribute('action'), {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        loading.style.display = 'none';
        btn.disabled = false;
        if (data.trim() === 'OK') {
            sentMsg.style.display = 'block';
            form.reset();
        } else {
            errorMsg.innerHTML = data;
            errorMsg.style.display = 'block';
        }
    })
    .catch(error => {
        loading.style.display = 'none';
        btn.disabled = false;
        errorMsg.innerHTML = "Connection Error. Please try again.";
        errorMsg.style.display = 'block';
    });
});
</script>

<?php include 'layouts/footer.php'; ?>