<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>CardCraft Studio</title>
</head>

<!-- Header -->
<?php include 'header.php'; ?>

<body style="background-color: #f2e1d8;">
<!-- Main Section -->
<section id="firstSection" class="hero">
  <div class="video-container">
    <video autoplay muted loop id="bgvideo">
      <source src="images/bgvideo.mp4" type="video/mp4">
    </video>
    <div class="hero-content">
      <h1>CARDCRAFT STUDIO</h1>
    </div>
  </div>
</section>


<!-- Gallery Section -->
<section class="gallery">
  <h1>Newest Editions</h1>
  <div class="gallery-grid">
    <!-- Product 1 -->
    <div class="product-card">
      <img src="../Images/catalog/1.png" alt="Product 1">
      <a href="/CatalogPage/catalogtry.php"> View Products </a>

    </div>

    <!-- Product 2 -->
    <div class="product-card">
      <img src="../Images/catalog/12.png" alt="Product 2">
      <a href="/CatalogPage/catalogtry.php"> View Products </a>
      

    </div>

    <!-- Product 3 -->
    <div class="product-card">
      <img src="../Images/catalog/16.png" alt="Product 3">
      <a href="/CatalogPage/catalogtry.php"> View Products </a>

    </div>

    <div></div>
  </section>


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials">
  <h2>What Our Customers Say</h2>
  <div class="testimonial">
    <p>"Beautiful designs and top-notch quality! My go-to for unique cards!"</p>
    <p>- Brandon P.</p>
  </div>
  <div class="testimonial">
    <p>"CardCraft Studio’s cards are perfect for every occasion. Highly recommended!"</p>
    <p>- Tony S.</p>
  </div>
</section>

<!-- About Us Section -->
<section id="aboutUs" class="about">
  <h2>About Us</h2>
  <p>We’re a holiday card business that brings the magic of Christmas to life with a delightful
    variety of card designs, perfect for spreading joy this season! From digital cards that arrive
    straight to your inbox to beautifully crafted physical cards, we offer something special for everyone.
    Our physical cards can even be addressed directly to the North Pole, adding an extra touch of holiday cheer!
    Our catalog features a wide range of unique designs, with options for both digital and physical cards.
    We carefully manage our inventory to ensure each item is available to make your holiday celebrations complete.</p>
</section>

<!-- Contact Us Section -->
<section id="contactUs" class="contact">
  <h2>Contact Us</h2>
  <p><strong>Location:</strong> 200 Manor Ave, Langhorne, PA 19047</p>
  <p><strong>Email:</strong> info@cardcraftstudio.com</p>
  <p><strong>Phone:</strong> (555) 123-4567</p>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>