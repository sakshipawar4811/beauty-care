<?php
include "header.php";
include "db_connection.php";
?>
<section id="hero">
  <div class="container-fluid align-items-center d-flex rounded-4" style="
    height:50vh;
          background-image: url(images/background.jpg);
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
        ">
    <div class="hero-content container justify-content-center  text-center">
      <h2 class="display-2 fw-bold text-body text-capitalize mb-1">Shop</h2>
      <span class="item">
        <a href="index.php" class="text-body">Home /</a>
      </span>
      <span class="item">
        <a href="#" class="text-body">Pages /</a>
      </span>
      <span class="item">Shop</span>
    </div>
  </div>
</section>



  <section id="shop" class="my-lg-7 bg-overlay">
    <div class="container-fluid">
      <div class="row">
         <?php
if (isset($_GET["id"])) {
  $categary = $_GET['id'];
  $query = "SELECT * FROM  `tbl_product` WHERE `categary`=  '$categary' ";
} else {
  $query = "SELECT * FROM  `tbl_product` ";
}
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {

?> 
        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="./admin/<?= $row["product_image"]?>" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="cart.php" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>

            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold"><?= $row["product_name"] ?></a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5"><?= $row["sell_price"] ?></span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item5.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">VelvetGlow Rich Hydrating Balm</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item4.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">BrightEyes Firming Cream</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item3.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">AgeDefy Retinol Serum</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item2.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">VelvetGlow Rich Hydrating Balm</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item1.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">Clear Essence Foaming Cleanser</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item6.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">BrightEyes Firming Cream</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <div class="product-item">
            <div class="image-holder position-relative">
              <img src="images/product-item5.jpg" alt="product-item" class="img-fluid rounded-4">
              <div class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center">
                  <div class="btn-left me-2">
                    <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                  </div>
                  <svg width="20" height="20">
                    <use xlink:href="#heart" class="text-light fw-bold"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-detail ">
              <h3 class="fs-2 mb-1">
                <a href="#" class="text-black display-6 fw-semibold">VelvetGlow Rich Hydrating Balm</a>
              </h3>
              <span class="item-price text-body-tertiary pb-3 fs-5">$1250.00</span>
              <div class="stars">
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
                <svg class="svg-yellow" width="20" height="20">
                  <use xlink:href="#star"></use>
                </svg>
              </div>
            </div>
          </div>
        </div> -->
        
        <?php }
    ?>
    </div>
    <nav aria-label="Page navigation example ">
      <ul class="pagination justify-content-center mt-5">
        <li class="page-item mx-md-2 "><a class="page-link" href="#">Previous</a></li>
        <li class="page-item mx-md-2 "><a class="page-link active" href="#">1</a></li>
        <li class="page-item mx-md-2 "><a class="page-link" href="#">2</a></li>
        <li class="page-item mx-md-2 "><a class="page-link" href="#">3</a></li>
        <li class="page-item mx-md-2 "><a class="page-link" href="#">4</a></li>
        <li class="page-item mx-md-2 "><a class="page-link" href="#">5</a></li>
        <li class="page-item mx-md-2 "><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    </div>
  </section>



   <!-- <section id="subscribe" class="my-lg-7">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
          <div class="subscribe-content">
            <div class="subscribe-header text-center">
              <h2 class="display-2 fw-bold text-body text-capitalize">Subscribe to get updates</h2>
            </div>
            <form id="form" class="py-5 position-relative">
              <input type="text" name="email" placeholder="Write your email address here..." class="w-100 bg-transparent border-0 border-bottom pb-3 fst-italic">
              <svg class="send position-absolute svg-primary" width="54" height="54">
                <use xlink:href="#send"></use>
              </svg>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>  -->


  <!-- <section id="instagram-wrap" class="bg-overlay ">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social1.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social2.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social3.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social4.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social5.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 text-center mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/social6.jpg" alt="instagram" class="img-fluid rounded-4">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="50" height="50">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="my-lg-7">
    <div class="container-fluid">
      <div class="mb-5">
        <h2 class="display-3 fw-bold text-black text-capitalize">People are also looking for</h2>
      </div>

      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">PureGlow
        Daily
        Cleanser</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Fresh Dew
        Hydrating
        Face Wash</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Velvet
        Touch Cream
        Cleanser</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Radiance
        Revival Gel
        Wash</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Hydraluxe
        Daily
        Moisturizer</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">GlowRenew
        Skin
        Quench Cream</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">DewDrop
        Lightweight
        Hydration</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">VelvetGlow
        Rich
        Hydrating Balm</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">SilkFusion
        Deep
        Moisture Cream</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Blue
        diamon
        almonds</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Angie’s
        Boomchickapop Corn</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Salty
        kettle
        Corn</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Chobani
        Greek
        Yogurt</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Sweet
        Vanilla
        Yogurt</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">Foster
        Farms Takeout
        Crispy wings</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">DewDrop
        Lightweight
        Hydration</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">VelvetGlow
        Rich
        Hydrating Balm</a>
      <a href="#" class="btn btn-info text-capitalize text-body-secondary fs-5 py-2 px-4 rounded-2 mb-3 me-3">SilkFusion
        Deep
        Moisture Cream</a>
    </div>
  </section> -->
  <?php
  include "footer.php";
  ?>