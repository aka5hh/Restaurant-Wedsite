<?php
require_once('functions\functions.php');
get_header();
?>
</div>
<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              We Are Feane
            </h2>
          </div>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
            the middle of text. All
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Location
      </h2>
    </div>
    <div class="heading_container heading_center">
      <div class="col-md-6">
        <div class="map_container ">
          <div id="googleMap"></div>
        </div>
        <div class="heading_container heading_center">
      <h6>
        Banani 11 R/A Dhaka.
      </h6>
    </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>