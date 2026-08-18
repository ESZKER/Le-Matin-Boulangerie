<?php
include 'db.php'; 

$reviews = [];
$result = $conn->query("SELECT * FROM reviews WHERE status = 'approved' ORDER BY created_at DESC LIMIT 10");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

?>

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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>get fresh pastries everyday</h1>
                <p>Starting at $3.50 per piece, enjoy authentic French bakery goods daily.</p>
                <button class="btn-primary">Details</button>
            </div>
        </section>
        
        <section class="special-section">
            <div class="special-content reveal-fade">
                <h1>This Week's Specials</h1>
                <p>Try out our signature desserts and pastries. Available everyday!</p>
            </div>
            <div class="product-container">

                <article class="product reveal-fade">
                    <img src="images/chiffon.jpg" >
                    <div class="description">
                        <span>Strawberry Chiffon Cake</span>
                        <h4>$4.50</h4>
                    </div>
                </article>

                 <article class="product reveal-fade reveal-delay-1">
                    <img src="images/fruity.jpg" >
                    <div class="description">
                        <span>Fruity Pebbles layered Cake</span>
                        <h4>$4.50</h4>
                    </div>
                </article>

                <article class="product reveal-fade reveal-delay-2">
                    <img src="images/banana.jpg" >
                    <div class="description">
                        <span>Banana Cake</span>
                        <h4>$4.50</h4>
                    </div>
                </article>


            </div>
        </section>

        <section class="banner reveal">
            <div class="banner-content reveal reveal-delay-1">
                <h4>Have a Special Event?</h4>
                <h2>From custom celebration cakes to artisan pastry platters,</h2>
                <h2>bring your sweetest ideas to life.</h2>
                <button class="btn-2"> CREATE CUSTOM ORDER NOW </button>
            </div>
        </section>

        <section class="why-bread-section">
            <h2 class="section-title reveal">Why Le Matin Boulangerie?</h2>
            <div class="cards-container">
                <div class="card card-1 reveal">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-bag-shopping icon" style="color: #1b4d3e;"></i>
                    </div>
                    <h3>Easy to order</h3>
                    <p>Our mission is to bring the art of bread making back to its roots and to share our passion for bread with others.</p>
                    <a href="#" class="read-more">Read more</a>
                </div>

                <div class="card card-2 reveal reveal-delay-1">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-truck icon" style="color: #1b4d3e;"></i>
                    </div>
                    <h3>Fastest Delivery</h3>
                    <p>Our mission is to bring the art of bread making back to its roots and to share our passion for bread with others.</p>
                    <a href="#" class="read-more">Read more</a>
                </div>

                <div class="card card-3 reveal reveal-delay-2">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-plate-wheat icon" style="color: #1b4d3e;"></i>
                    </div>
                    <h3>Pure taste</h3>
                    <p>Our mission is to bring the art of bread making back to its roots and to share our passion for bread with others.</p>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="about-header reveal">
                <h1>About Us</h1>
                <p>Fresh ingredients, traditional methods, and a passion for everyday perfection.</p>
            </div>

            <div class="about-content">

                <div class="about-card card-story reveal">
                    <h3>Our Story</h3>
                    <p>"Founded with a deep passion for traditional French baking, Le Matin Boulangerie brings the timeless charm and aroma of a Parisian neighborhood bakery to the heart of Phnom Penh. "</p>
                    <p>"Le Matin" means the morning—and we exist to make every morning a little sweeter, warmer, and more delicious.</p>
                </div>

                <div class="about-image reveal reveal-delay-1">
                    <img src="images/cookies.webp" >
                </div>

                <div class="about-card card-mission reveal reveal-delay-2">
                    <h3>Our Mission</h3>
                    <p>We believe in patient baking. Our sourdoughs undergo a 24-hour slow fermentation process for rich flavor and optimal digestion.</p>
                    <p>Everything displayed on our counters is baked fresh that morning. We never use artificial preservatives, colors, or additives.</p>
                </div>
            </div>
        </section>

        <section class="review-section">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                        
                        <div class="review-card swiper-slide">
                            <div class="image-content">
                                <span class="overlay" id="overlay-1"></span>
                                <div class="card-image">   
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="quote-icon">”</div>
                                <p class="description">Their bread is so fresh and flavorful, and the variety of options is impressive. Highly recommend!</p>
                                <div class="rating">★★★★★</div>
                                <h2 class="name">Heghert Patricia</h2>
                            </div>
                        </div>

                        
                        <div class="review-card swiper-slide">
                            <div class="card-content">
                                <div class="quote-icon">”</div>
                                <p class="description">
                                    I recently discovered Bread and I'm hooked!<br>
                                    Their bread is so fresh, flavorful, and cripsy.<br>
                                <div class="rating">★★★★★</div>
                                <h2 class="name">Heng SokBorey</h2>
                                </p>
                            </div>
                        </div>

                        
                        <div class="review-card swiper-slide">
                            <div class="card-content">
                                <div class="quote-icon">”</div>
                                <p class="description">Love the cakes. Highly recommend!</p>
                                <div class="rating">★★★★★</div>
                                <h2 class="name">Chantra Davina</h2>
                            </div>
                        </div>

                    
                        <div class="review-card swiper-slide">
                            <div class="card-content">
                                <div class="quote-icon">”</div>
                                <p class="description">Not sure why I'm here but I just love cats...</p>
                                <div class="rating">★★★★★</div>
                                <h2 class="name">Khimmy Boi</h2>
                            </div>
                        </div>

                        
                        <div class="review-card swiper-slide">
                            <div class="card-content">
                                <div class="quote-icon">”</div>
                                <p class="description">I also love cats and desserts :3</p>
                                <div class="rating">★★★★</div>
                                <h2 class="name">Ryan Khann</h2>
                            </div>
                        </div>


                        <div class="review-card swiper-slide">
                            <div class="card-content">
                                <div class="quote-icon">”</div>
                                <p class="description">The cakes were delicious! Next time, I'm trying the croissants, hehehe~</p>
                                <div class="rating">★★★★</div>
                                <h2 class="name">Ms. Mona</h2>
                            </div>
                        </div>

                    </div>
                </div> 
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
 
            </div>
        </section>


        <hr>

        <?php include 'includes/footer.php'; ?>

    </main>
    <script src="javascript/swiper-bundle.min.js"></script>
    <script src="javascript/scroll-reveal.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>