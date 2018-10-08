<?php
  $title = "Contact Us || XYZ";
  include "header.php";
?>

    <!-- Page Header -->
    <div class="page-header-padding page-header-bg">
      <div class="container">
        <div class="row">
          <div class="col">
            <h6 class="page-subtitle">Contact us</h6>
            <h1 class="page-title">Get In Touch</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact -->
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="contact-form-wrapper">
              <h3>Leave Message</h3>
              <form class="contact-form" action="mailsend.php">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Full name">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email address">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                    <div class="form-group">
                      <textarea name="address" class="form-control" placeholder="Address"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="primary-bg button">Submit Now</button>
                <p class="input-success">Your message has been sent. Thanks for contact.</p>
                <p class="input-error">Something went wrong while sending. Please try again.</p>
              </form>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="contact">
              <h3>Contact Details</h3>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-location-pin"></span>
                </div>
                <div class="contact-details">
                  <span>xxxxxxxxxxx</span>
                </div>
              </div>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-mobile"></span>
                </div>
                <div class="contact-details">
                  <span><a href="tel: +x-xxx-xxx-xxxx">+x-xxx-xxx-xxxx</a></span>
                </div>
              </div>
              <div class="contact-list">
                <div class="contact-icon">
                  <span class="ti-email"></span>
                </div>
                <div class="contact-details">
                  <span><a href="mailto: contact@Xyz.com">contact@Xyz.com</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Map -->
    <!-- <div id="map-area" class="section">
      <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div>
    </div>
 -->
    <?php
      include 'footer.php';
    ?>