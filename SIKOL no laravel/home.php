<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kedai Omah Londo</title>
    <link rel="stylesheet" href="css/home.css"> <!-- Linking the CSS file -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Kedai Omah Londo Logo">
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>
    
    <main>
        <section class="content">
            <h1>Kedai Omah Londo</h1>
            <p>Kedai bernuansa penjajahan belanda terbaik di kota malang</p>
            <a href="#" class="order-button">Order Here</a>
        </section>
        
        <section class="image-section">
            <img src="cafe1.jpg" alt="Cafe Brewclap">
        </section>
    </main>
    
    <!-- JavaScript for Hamburger Menu (optional if you want to add later) -->
    <script>
        const hamburger = document.querySelector('.hamburger');
        const menu = document.querySelector('nav');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
