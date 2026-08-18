<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<header class="main-header">
    <div class="logo">
        <a href="index.php"><img src="images/logo3.png" alt="Le Matin Boulangerie Logo"></a>
    </div>

    <nav class="navigation-bar">
        <ul id="nav-items">
            <li><a class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">home</a></li>
            <li><a class="<?php echo ($current_page == 'product.php') ? 'active' : ''; ?>" href="product.php">products</a></li>
            <li><a class="<?php echo ($current_page == 'contactus.php') ? 'active' : ''; ?>" href="contactus.php">contact</a></li>
        </ul>
    </nav>

    <div class="header-cart">
        <a href="cart.php">
            <img src="images/cart.svg" alt="Cart" class="cart-icon-img">
        </a>
    </div>
</header>