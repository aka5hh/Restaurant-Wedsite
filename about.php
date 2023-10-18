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
      <div class="heading_container">
        <h2>
          Write Your Honest Review
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
              </div>
              <div>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
              </div>
              <div>
              
                <textarea class="form-control" placeholder="Leave a review here" name="message" id="message" style="height: 100px"></textarea>                    
              </div>
              <div class="btn_box">
                <button>
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();
?>