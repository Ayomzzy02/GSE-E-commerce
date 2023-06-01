<?php 
// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Check if the session exists
if (!isset($_SESSION['Username'])) {
  // Redirect to the login page
  return header("Location: ./login.php");
}       
?>

<?php
    include "./head.php";
    include "./data.php";
    include "./asset/login.php"; 
?>
<body>
<header>
    <a href="home.php"><h1 class="logo">E-commerce</h1></a>
    <div class="search-container">
        <input class="search-input" placeholder="Search Products Brands and Categories">
        <button class="search-button" type="submit">Search</button>
    </div>
    <img class="cart-icon" src="./asset/images/cart.png" alt="cart icon">
    <a href="login.php" class="login-button">Login</a> <!-- Add this line -->
</header>
<main>
<div class="welcome-message">
        <?php
        echo "<h1>Good $_SESSION[time] $_SESSION[Username] <h1>"
        ?>
</div>

<section class="Product">
  <div class="Fashion">
    <div class="section-heading">
      <h2>Fashion</h2>
    </div>
    <div class="product-list">
     <?php
      foreach ($products["Fashion"] as $product) {
        $productName = $product['name'];
        $productPrice = $product['price'];
        $productImage = $product['image-url'];

        echo "
        <div class='image-block'>
          <img src=$productImage alt='Product Image' width='200' height='200'>
          <h3>$productName</h3>
          <p>₦ $productPrice</p>
        </div>
        ";
      }
      ?>
      <!-- Add more product items here -->
    </div>
  </div>
</section>

<section class="Product">
  <div class="HomeAppliance">
    <div class="section-heading">
      <h2>Home Appliance</h2>
    </div>
    <div class="product-list">
     <?php
      foreach ($products["Home Appliance"] as $product) {
        $productName = $product['name'];
        $productPrice = $product['price'];
        $productImage = $product['image-url'];

        echo "
        <div class='image-block'>
          <img src=$productImage alt='Product Image' width='200' height='200'>
          <h3>$productName</h3>
          <p>₦ $productPrice</p>
        </div>
        ";
      }
      ?>
      <!-- Add more product items here -->
    </div>
  </div>
</section>

<section class="Product">
  <div class="Technologies">
    <div class="section-heading">
      <h2>Technology</h2>
    </div>
    <div class="product-list">
    <?php
      foreach ($products["Technology"] as $product) {
        $productName = $product['name'];
        $productPrice = $product['price'];
        $productImage = $product['image-url'];

        echo "
        <div class='image-block'>
          <img src=$productImage alt='Product Image' width='200' height='200'>
          <h3>$productName</h3>
          <p>₦ $productPrice</p>
        </div>
        ";
      }
      ?>
      <!-- Add more product items here -->
    </div>
  </div>
</section>

<section class="Product">
  <div class="Groceries">
    <div class="section-heading">
      <h2>Groceries</h2>
    </div>
    <div class="product-list">
     <?php
      foreach ($products["Groceries"] as $product) {
        $productName = $product['name'];
        $productPrice = $product['price'];
        $productImage = $product['image-url'];

        echo "
        <div class='image-block'>
          <img src=$productImage alt='Product Image' width='200' height='200'>
          <h3>$productName</h3>
          <p>₦ $productPrice</p>
        </div>
        ";
      }
      ?>
      <!-- Add more product items here -->
    </div>
  </div>
</section>
</main>
</body>
</html>