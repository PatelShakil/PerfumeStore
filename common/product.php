<?php
include '/wamp/www/as2/common/header.php'; 
?>
<style>
  .product-card {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }
  .product-image {
    height: 250px;
    width: fit-content;
    /* background: url('perfume-image.jpg') center/cover no-repeat; */
  }
  .product-details {
    padding: 15px;
  }
  .product-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
  }
  .product-description {
    color: #555;
    margin-bottom: 10px;
  }
  .product-price {
    font-size: 20px;
    font-weight: bold;
    color: #e91e63;
  }
  .buy-button {
    background-color: #e91e63;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .buy-button:hover {
    background-color: #c2185b;
  }
</style>
</head>
<body>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="product-card">
        <img src="<?php echo $product_img ?>" class="product-image">
        <div class="product-details">
          <h3 class="product-title"><?php echo $product_title ?></h3>
          <p class="product-description"><?php echo $product_description ?></p>
          <p class="product-price"><?php echo $product_price ?></p>
          <button class="buy-button">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
