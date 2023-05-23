<?php

include "conn.php";

?>

<!-- header file attach -->
<?php

include 'header.php';

?>
<head>
<link href="css/style.css" rel="stylesheet" />
<style>
  /* Watches Category Css */
.category_section {
  background-color: #f8f8f8;
  padding: 20px 0;
}

.category_container {
  max-width: 1200px;
  margin: 0 auto;
}

.categories {
  text-align: center;
}

#category-list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.category_link {
  display: inline-block;
  margin: 0 10px;
  padding: 8px 16px;
  background-color: #ebebeb;
  border-radius: 4px;
  cursor: pointer;
}
.category_link:hover {
  color: #494949 !important;
  background-color: red;
border-radius: 50px;
border-color: #494949 !important;
transition: all 0.3s ease 0s;
}


</style>

</head>
<!-- header end -->

    <!-- collatory -->
    <section class="category_section">
  <div class="category_container">
    <div class="categories">
      <nav>
        <ul id="category-list">
          <?php
            $q = "SELECT * FROM `add_brand`";
            $query = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_array($query)) {
          ?> 
          <li class="category_link" onclick="changeColor(this)" data-category="<?php echo $row['brand_name']; ?>"><?php echo $row['brand_name']; ?></li>
          <?php
            }
          ?>
        </ul>
      </nav>
    </div>
  </div>
</section>

    <!--end collatory -->
    

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <main class="product-list">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Watches
        </h2>
      </div>

      <div class="row" style="grid-gap: 10px; max-width: 100vw; flex-wrap: wrap;">

<?php

$q = "SELECT * FROM `add_product`";

$query = mysqli_query($conn, $q);

while ($row = mysqli_fetch_array($query)) {

  ?>
  <div class="col-xs-12 flex-item">
    <div class="product-item" data-category="<?php echo $row['product_name']; ?>">
      <div class="box">
        <div class="img-box">
          <img src="Dashboard/upload/<?=$row['my_image']?>" alt="content">
        </div>
        <div class="detail-box">
          <h6>
            <?php echo $row['product_name']; ?> 
          </h6>
          <h6>
            Price: <span style=" color: black;">$</span>
            <span>
              <?php echo $row['price']; ?> 
            </span>
          </h6>
        </div>
        <div class="cart_button">
          <a href="cart.php">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
          </a>
        </div>
        <button style="border: none; background-color:red;" onclick="location.href='cart.php';" class="new">
          <span>
            Buy Now
          </span>
        </button>
      </div>
    </div>
  </div>

  <?php
}
?> 

</div>   

    </div>
    </main>
  </section>

  <!-- end shop section -->
    <!-- category js -->
<script src="js/category.js"></script>

<!-- footer file attach -->
  <?php

    include 'footer.php';

  ?>
<!-- footer end -->
  
