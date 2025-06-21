<?php include "header.php";
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
        <h2 class="display-2 fw-bold text-body text-capitalize mb-1">Contact</h2>
        <span class="item">
          <a href="index.php" class="text-body">Home /</a>
        </span>
        <span class="item">
          <a href="#" class="text-body">Pages /</a>
        </span>
        <span class="item">Contact</span>
      </div>
    </div>
  </section>
  <section id="contact-us" class="my-lg-7">
    <div class="container-lg">
      <div class="row flex-row-reverse g-lg-5">
        <div class="inquiry-item col-lg-6 mb-5 ">
          <div class="rounded-5">
            <h2 class="display-6 fw-semibold">Got Any Questions?</h2>
            <p>Use the form below to get in touch with us.</p>

            <form name="contactform" action="contact_out.php" method="post" class="form-group contact-form mt-4">
              <div class="form-input col-lg-12 d-flex justify-content-between mb-3">
                <div class="w-100 me-3">
                  <label class="mb-2 fs-6 text-dark">Your Name*</label>
                  <input type="text" name="name" placeholder="Write Your Name Here" class="form-control shadow-none px-3 py-2" required="">
                </div>
                <div class="w-100">
                  <label class="mb-2 fs-6 text-dark">Your E-mail*</label>
                  <input type="email" name="email" placeholder="Write Your Email Here" class="form-control shadow-none px-3 py-2" required="">
                </div>

              </div>
              <div class="col-lg-12 mb-3">
                <label class="mb-2 fs-6 text-dark">Phone Number</label>
                <input type="number" name="phone" placeholder="Phone Number" class="form-control shadow-none px-3 py-2">
              </div>
              <div class="col-lg-12 mb-3">
                <label class="mb-2 fs-6 text-dark">Subject</label>

                <input type="text" name="subject" placeholder="Write Your Subject Here" class="form-control shadow-none px-3 py-2">
              </div>
              <div class="col-lg-12 mb-3">
                <label class="mb-2 fs-6 text-dark">Your Message*</label>

                <textarea name="message" placeholder="Write Your Message Here" class="form-control shadow-none px-3 py-2" style="height:150px;" required=""></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary rounded-2 fs-6 py-3">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="contact-info col-lg-6">
          <h2 class="display-6 fw-semibold">Contact information</h2>

          <p>Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
          <div class="page-content d-flex flex-wrap mt-5">
            <div class="col-lg-6 col-sm-12">
              <div class="content-box pe-4 mb-5">
                <h4 class="secondary-heading py-3">Office</h4>

                <div class="contact-address ">
                  <p>730 Glenstone Ave 65802, Springfield, US</p>
                </div>
                <div class="contact-number">
                  <p>
                    <a href="#">+123 987 321</a>
                  </p>
                  <p>
                    <a href="#">+123 123 654</a>
                  </p>
                </div>
                <div class="email-address">
                  <p>
                    <a href="#">contactoffice@website.com</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="content-box text-dark">
                <h4 class="secondary-heading py-3">Social Info</h4>
                <ul class="d-flex list-unstyled ">
                  <li class="me-4">
                    <a href="#">
                      <svg class="social-icon" width="30" height="30" aria-hidden="true">
                        <use xlink:href="#facebook" class="text-black-50"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="me-4">
                    <a href="#">
                      <svg class="social-icon" width="30" height="30" aria-hidden="true">
                        <use xlink:href="#twitter" class="text-black-50"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="me-4">
                    <a href="#">
                      <svg class="social-icon" width="30" height="30" aria-hidden="true">
                        <use xlink:href="#instagram" class="text-black-50"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="me-4">
                    <a href="#">
                      <svg class="social-icon" width="30" height="30" aria-hidden="true">
                        <use xlink:href="#linkedin" class="text-black-50"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="me-4">
                    <a href="#">
                      <svg class="social-icon" width="30" height="30" aria-hidden="true">
                        <use xlink:href="#youtube" class="text-black-50"></use>
                      </svg>
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
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







<?php include "footer.php";
?>