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
        <h2 class="display-2 fw-bold text-body text-capitalize mb-1">Cart</h2>
        <span class="item">
          <a href="index.php" class="text-body">Home /</a>
        </span>
        <span class="item">
          <a href="#" class="text-body">Pages /</a>
        </span>
        <span class="item">Cart</span>
      </div>
    </div>
  </section>
   <section id="cart" class="my-lg-7">
    <div class="container-lg">
      <div class="row g-md-5">
        <div class="col-md-8 pe-md-5">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="card-title text-uppercase">Product</th>
                <th scope="col" class="card-title text-uppercase">Quantity</th>
                <th scope="col" class="card-title text-uppercase">Price</th>
                <th scope="col" class="card-title text-uppercase"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="images/product-item2.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="card-detail ps-lg-3">
                        <h6 class="card-title">
                          <a href="#" class="text-decoration-none">Hydrating Face Pack</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center pe-lg-5">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus p-1 p-lg-2 btn btn-outline-primary btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number border-primary text-center p-2 mx-1" value="1">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus p-1 p-lg-2 btn btn-outline-primary btn-number" data-type="plus" data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class="fw-medium">$150.00</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#">
                      <svg width="24" height="24">
                        <use xlink:href="#trash" class="text-primary"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="images/product-item1.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-lg-3">
                        <h6 class="card-title">
                          <a href="#" class="text-decoration-none">Face Serum</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center pe-lg-5">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus p-1 p-lg-2 btn btn-outline-primary btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number border-primary text-center p-2 mx-1" value="1">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus p-1 p-lg-2 btn btn-outline-primary btn-number" data-type="plus" data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class=" fw-medium">$190.00</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#">
                      <svg width="24" height="24">
                        <use xlink:href="#trash" class="text-primary"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td scope="row" class="py-4">
                  <div class="cart-info d-flex flex-wrap align-items-center ">
                    <div class="col-lg-3">
                      <div class="card-image">
                        <img src="images/product-item6.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-lg-3">
                        <h6 class="card-title">
                          <a href="#" class="text-decoration-none">Herbal Moisturizer</a>
                        </h6>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="input-group product-qty align-items-center pe-lg-5">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-left-minus p-1 p-lg-2 btn btn-outline-primary btn-number" data-type="minus">
                        <svg width="16" height="16">
                          <use xlink:href="#minus"></use>
                        </svg>
                      </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number border-primary text-center p-2 mx-1" value="1">
                    <span class="input-group-btn">
                      <button type="button" class="quantity-right-plus p-1 p-lg-2 btn btn-outline-primary btn-number" data-type="plus" data-field="">
                        <svg width="16" height="16">
                          <use xlink:href="#plus"></use>
                        </svg>
                      </button>
                    </span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="total-price">
                    <span class="fw-medium">$260.00</span>
                  </div>
                </td>
                <td class="py-4 align-middle">
                  <div class="cart-remove">
                    <a href="#">
                      <svg width="24" height="24">
                        <use xlink:href="#trash" class="text-primary"></use>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="col-md-4 mt-5">
          <div class="cart-totals">
            <h2 class="display-6 fw-semibold pb-4 mt-0">Cart Total</h2>
            <div class="total-price pb-4">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Subtotal</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>1,500.00
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-dark ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>1,500.00</bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap row g-2">
              <div class="col-md-6"><button class="btn btn-outline-dark rounded-2 p-3 w-100">Update Cart</button>
              </div>
              <div class="col-md-6"><button class="btn btn-outline-dark rounded-2 p-3 w-100">Continue Shop</button>
              </div>
              <div class="col-md-12 mt-3"><a href="checkout.php" class="btn btn-primary rounded-2 px-5 py-3 w-100">Proceed to
                  checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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


