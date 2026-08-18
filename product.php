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
</head>
<body >

    <?php include 'includes/header.php'; ?>

    <main>
        
        <nav class="catagories-bar">

            <h1>Explore Our Catagories</h1><br>
            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

            <ul id="catagories">
                <li class="<?php echo ($current_page === 'cupcakes.php') ? 'active' : ''; ?>">
                    <a href="cupcakes.php">cupcakes</a>
                </li>
                <li class="<?php echo ($current_page === 'cookies.php') ? 'active' : ''; ?>">
                    <a href="cookies.php">cookies</a>
                </li>
                <li class="<?php echo ($current_page === 'cakes.php') ? 'active' : ''; ?>">
                    <a href="cakes.php">cakes</a>
                </li>
                <li class="<?php echo ($current_page === 'pies.php') ? 'active' : ''; ?>">
                    <a href="pies.php">pies</a>
                </li>
            </ul>

        </nav>
            

    <?php include 'includes/footer.php'; ?>

    </main>
</body>
</html>