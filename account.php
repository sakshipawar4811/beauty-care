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
        <h2 class="display-2 fw-bold text-body text-capitalize mb-1">Account</h2>
        <span class="item">
          <a href="index.php" class="text-body">Home /</a>
        </span>
        <span class="item">
          <a href="#" class="text-body">Pages /</a>
        </span>
        <span class="item">Account</span>
      </div>
    </div>
  </section>
  <section id="account" class="my-lg-7">
    <div class="container">
      <div class="tabs-listing">
        <nav>
          <div class="nav nav-tabs d-flex justify-content-center border-bottom mb-3" id="nav-tab" role="tablist">
            <button class="nav-link account-tab mx-3 fs-4 border-0 text-capitalize fw-semibold active" id="sign-in-tab" data-bs-toggle="tab" data-bs-target="#sign-in" type="button" role="tab" aria-controls="sign-in" aria-selected="true">Log In</button>
            <button class="nav-link account-tab mx-3 fs-4 border-0 text-capitalize fw-semibold" id="sign-up-tab" data-bs-toggle="tab" data-bs-target="#sign-up" type="button" role="tab" aria-controls="sign-up" aria-selected="false" tabindex="-1">Sign Up</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade active show" id="sign-in" role="tabpanel" aria-labelledby="sign-in-tab">
            <div class="col-lg-10 offset-lg-1 mt-5">


              <form id="form1" class="form-group flex-wrap ">
                <div class="form-input col-lg-12 my-4">

                  <label class="fw-semibold mb-2 fs-6 ">Username or E-mail address *</label>
                  <input type="text" id="exampleInputEmail1" name="email" placeholder="Enter Username / Email Address" class="form-control ps-4 py-3 mb-3">

                  <label class="fw-semibold mb-2 fs-6 ">Password*</label>

                  <input type="password" id="inputPassword1" placeholder="Enter password" class="form-control ps-4 py-3 mb-3" aria-describedby="passwordHelpBlock">

                  <label class="py-3 d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                      <input type="checkbox" required="" class="d-inline">
                      <span class="label-body fw-semibold">Remember Me</span>
                    </div>

                    <div id="passwordHelpBlock" class="form-text ">
                      <a href="#" class="text-primary  fw-bold"> Forgot Password?</a>
                    </div>
                  </label>
                  <div class="d-grid my-3">
                    <button class="btn btn-primary rounded-2 px-5 py-3 ">Log In</button>
                  </div>

                </div>
              </form>

            </div>

          </div>
          <div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
            <div class="col-lg-10 offset-lg-1 mt-5">

              <form id="form1" class="form-group flex-wrap ">
                <div class="form-input col-lg-12 my-4">

                  <label class="fw-semibold mb-2 fs-6 ">Username*</label>
                  <input type="text" id="exampleInputName" name="email" placeholder="Your Username" class="form-control ps-4 py-3 mb-3">

                  <label class="fw-semibold mb-2 fs-6 ">E-mail Address *</label>
                  <input type="text" id="exampleInputEmail1" name="email" placeholder="Your email address" class="form-control ps-4 py-3 mb-3">

                  <label class="fw-semibold mb-2 fs-6 ">Password*</label>
                  <input type="password" id="inputPassword1" placeholder="Set your password" class="form-control ps-4 py-3 mb-3" aria-describedby="passwordHelpBlock">

                  <label class="fw-semibold mb-2 fs-6 ">Re-Password*</label>
                  <input type="password" id="inputPassword2" placeholder="Retype your password" class="form-control ps-4 py-3 mb-3" aria-describedby="passwordHelpBlock">



                  <div class="py-3">
                    <input type="checkbox" required="" class="d-inline">
                    <span class="label-body fw-semibold">Accept all <span><a href="#" class="text-decoration-underline">Terms &amp; Conditions</a></span> </span>
                  </div>

                  <div class="d-grid my-3">
                    <button class="btn btn-primary rounded-2 px-5 py-3 ">Sign Up</button>
                  </div>

                </div>
              </form>

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
