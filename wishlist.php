<?php
include "header.php";
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
        <h2 class="display-2 fw-bold text-body text-capitalize mb-1">Wishlist</h2>
        <span class="item">
          <a href="index.php" class="text-body">Home /</a>
        </span>
        <span class="item">
          <a href="#" class="text-body">Pages /</a>
        </span>
        <span class="wishlist.php">Wishlist</span>
      </div>
    </div>
  </section>
<section id="wishlist" class="py-5 my-5">
    <div class="container-lg">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="card-title text-uppercase">Product</th>
            <th scope="col" class="card-title text-uppercase">Unit Price</th>
            <th scope="col" class="card-title text-uppercase">Discount Offer</th>
            <th scope="col" class="card-title text-uppercase"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-4 w-50">
              <div class="cart-info d-flex flex-wrap align-items-center ">
                <div class="col-lg-3">
                  <div class="card-image">
                    <img src="images/product-item1.jpg" alt="cloth" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="card-detail ps-lg-3">
                    <h5 class="card-title">
                      <a href="#" class="text-decoration-none">Sunscreen</a>
                    </h5>
                  </div>
                </div>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="fw-medium">$230.00</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="secondary-font fw-medium">10% Discount</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="d-flex align-items-center">
                <div class="me-4"><button class="btn btn-outline-dark p-3 text-uppercase fs-6 btn-rounded-none w-100">Add to
                    cart</button></div>
                <div class="cart-remove">
                  <a href="#">
                    <svg width="24" height="24">
                      <use xlink:href="#trash" class="text-primary"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="py-4">
              <div class="cart-info d-flex flex-wrap align-items-center ">
                <div class="col-lg-3">
                  <div class="card-image">
                    <img src="images/product-item2.jpg" alt="cloth" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="card-detail ps-lg-3">
                    <h5 class="card-title">
                      <a href="#" class="text-decoration-none">Clenser</a>
                    </h5>
                  </div>
                </div>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="fw-medium">$300.00</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="secondary-font fw-medium">5% Discount</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="d-flex align-items-center">
                <div class="me-4"><button class="btn btn-outline-dark p-3 text-uppercase fs-6 btn-rounded-none w-100">Add to
                    cart</button></div>
                <div class="cart-remove">
                  <a href="#">
                    <svg width="24" height="24">
                      <use xlink:href="#trash" class="text-primary"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="py-4">
              <div class="cart-info d-flex flex-wrap align-items-center ">
                <div class="col-lg-3">
                  <div class="card-image">
                    <img src="images/product-item5.jpg" alt="cloth" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="card-detail ps-lg-3">
                    <h5 class="card-title">
                      <a href="#" class="text-decoration-none">Face Serum</a>
                    </h5>
                  </div>
                </div>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="fw-medium">$190.00</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="secondary-font fw-medium">No Discount</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="d-flex align-items-center">
                <div class="me-4"><button class="btn btn-outline-dark p-3 text-uppercase fs-6 btn-rounded-none w-100">Add to
                    cart</button></div>
                <div class="cart-remove">
                  <a href="#">
                    <svg width="24" height="24">
                      <use xlink:href="#trash" class="text-primary"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="py-4">
              <div class="cart-info d-flex flex-wrap align-items-center ">
                <div class="col-lg-3">
                  <div class="card-image">
                    <img src="images/product-item4.jpg" alt="cloth" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="card-detail ps-lg-3">
                    <h5 class="card-title">
                      <a href="#" class="text-decoration-none">Body Lotion</a>
                    </h5>
                  </div>
                </div>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="fw-medium">$250.00</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="total-price">
                <span class="secondary-font fw-medium">50% Discount</span>
              </div>
            </td>
            <td class="py-4 align-middle">
              <div class="d-flex align-items-center">
                <div class="me-4"><button class="btn btn-outline-dark p-3 text-uppercase fs-6 btn-rounded-none w-100">Add to
                    cart</button></div>
                <div class="cart-remove">
                  <a href="#">
                    <svg width="24" height="24">
                      <use xlink:href="#trash" class="text-primary"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </section>
  <section id="instagram-wrap" class="bg-overlay ">
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
  </section>
  <section class="my-lg-7">
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
  </section>






















<?php
include "footer.php";
?>