<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Contact Us | Model Economic Township</title>
    <link rel="icon" type="image/webp" href="assets/icon.jpg">
    <meta name="description"
        content="Get in touch with the Model Economic Township experts. Inquire about residential, industrial, and commercial plots.">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="contact-page">

    <!-- Scroll Progress -->
    <div id="scroll-progress"></div>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <main>
        <!-- Contact Hero Section -->
        <section class="contact-hero">
            <div class="hero-bg-parallax" style="background-image: var(--light-overlay), url('assets/banner.webp');">
            </div>
            <div class="container contact-hero-grid">
                <div class="contact-hero-content reveal">
                    <h1>You Have <span class="gold-text">Questions</span>,<br>We Have <span
                            class="gold-text">Answers</span></h1>
                    <p>Discover experiences you won't find anywhere else — thoughtfully designed to immerse you in the
                        heart of the destination. Soulful stories waiting to be lived.</p>

                    <div class="contact-info-grid">
                        <div class="contact-info-item">
                            <h4><i class="fas fa-map-marker-alt"></i> Location</h4>
                            <p>Sector 8, Met City, Yakubpur to Badli road, Jhajjar (Haryana), 124105</p>
                            <p>Monday-Sunday | 08:00 - 22:00 (local time)</p>
                        </div>

                        <div class="contact-info-item">
                            <h4><i class="fas fa-envelope"></i> Email</h4>
                            <p><a href="mailto:info@metjhajjarplots.com">info@metjhajjarplots.com</a></p>
                        </div>
                        <div class="contact-info-item">
                            <h4><i class="fas fa-phone-alt"></i> Contact</h4>
                            <p><a href="tel:+917450053004">+91 7450053004</a></p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper reveal">
                    <form class="luxury-contact-form" action="https://formsubmit.co/ichha478@gmail.com" method="POST">
                        <!-- FormSubmit Settings -->
                        <input type="hidden" name="_subject" value="New Inquiry: Contact Page Form">
                        <input type="hidden" name="_template" value="table">
                        <input type="text" name="_honey" style="display:none">

                        <div class="form-group-modern">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group-modern">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91 Phone Number" required>
                        </div>
                        <div class="form-group-modern">
                            <label>Message</label>
                            <textarea name="message" placeholder="Write your message here" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn-modern-send full-width">Send Message</button>
                    </form>
                    <p style="color: var(--text-muted); font-size: 0.8rem; margin-top: 15px; text-align: center;">
                        * Leads will be delivered to ichha478@gmail.com
                    </p>
                </div>
            </div>
        </section>

        <!-- Google Map Section -->
        <section class="map-section-full">
            <div class="map-container-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14013.916174488346!2d76.7881417!3d28.4964866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d6d2b2a9c98a5%3A0xbf8f1d8803840982!2sReliance%20Met%20City!5e0!3m2!1sen!2sin!4v1739984020000!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>