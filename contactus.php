<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Matin Boulangerie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&family=DM+Serif+Display&family=Playfair+Display:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main>
        <section class="contact-section">
            <div class="contact-image">
                <img src="images/Patty.jpg" alt="random img">
            </div>
            <div class="contact-form-wrapper">
                <div class="contact-form-inner">
                    <h1>Contact</h1>
                    <h4>Have questions about custom cake orders, catering for private events, or wholesale inquiries? Reach out to our team—we’d love to hear from you!</h4>
                    
                    <?php if (isset($_GET['status'])): ?>
                        <?php if ($_GET['status'] === 'success'): ?>
                            <p class="form-success">Thanks! Your message has been sent.</p>
                        <?php elseif ($_GET['status'] === 'error'): ?>
                            <p class="form-error">Something went wrong. Please try again.</p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <form action="process_contact.php" method="POST" class="contact-form">
                        <input type="text" name="name" placeholder="YOUR NAME*" required>
                        <input type="email" name="email" placeholder="YOUR EMAIL*" required>
                        <input type="text" name="subject" placeholder="SUBJECT">
                        <textarea name="message" placeholder="YOUR MESSAGE" rows="6"></textarea>
                        <button type="submit" class="btn-submit">submit</button>
                    </form>
                </div>     
            </div>
        </section>
        <hr>
        <section class="footer-detail-section">
            <div class="info-content">
                <div class="footer-content">
                <br>
                <h1><strong>All Our Locations</strong></h1>
            
                <ol class="numbers" type="1">
                    <li>
                        <h2><strong>Doun Penh Branch</strong></h2>
                        <p>Located in the vibrant, tree-lined street near Independence Monument, perfect for sit-down morning coffee and fresh croissants.</p>
                        <ul>
                            <li><strong>Address:</strong> #42, Street 240, Chaktomuk, Daun Penh, Phnom Penh</li>
                            <li><strong>Phone:</strong> +855 23 991 234</li>
                            <li><strong>Hours:</strong> Monday – Sunday: 7:00 AM – 8:00 PM</li>
                        </ul>
                    </li>
                    <li>
                        <h2><strong>BKK1 Branch</strong></h2>
                        <p>Nestled in the bustling heart of BKK1, featuring an expanded outdoor garden seating area and specialty espresso bar.</p>
                        <ul>
                            <li><strong>Address:</strong> #15, Street 302, Boeung Keng Kang 1, Chamkarmon, Phnom Penh</li>
                            <li><strong>Phone:</strong> +855 12 345 678</li>
                            <li><strong>Hours:</strong>Monday – Sunday: 7:00 AM – 8:00 PM</li>
                        </ul>
                    </li>
                    <li>
                        <h2><strong>Toul Kork Branch</strong></h2>
                        <p>Conveniently located for quick morning pickups, sourdough loaves, and afternoon pastry cravings.</p>
                        <ul>
                            <li><strong>Address:</strong> #88, Street 289, Boeung Kak 2, Toul Kork, Phnom Penh</li>
                            <li><strong>Phone:</strong> +855 98 374 528</li>
                            <li><strong>Hours:</strong>Monday – Sunday: 7:00 AM – 8:00 PM</li>
                        </ul>
                    </li>
                </ol>
            </div>

        </section> 

            <?php include 'includes/footer.php'; ?>

    </main>
</body>
</html>