<?php
require_once('functions\functions.php');
get_header();
get_slider();
?>
</div>
<section class="offer_section layout_padding-bottom">
  <div class="offer_container">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          This Weeks Special Offer
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6  ">
          <div class="box ">
            <div class="img-box">
              <img src="images/o1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Tasty Thrillers
              </h5>
              <h6>
                <span>20%</span> Off
              </h6>
              <a href="">
                Order Now<i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6  ">
          <div class="box ">
            <div class="img-box">
              <img src="images/o2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Pizza Days
              </h5>
              <h6>
                <span>15%</span> Off
              </h6>
              <a href="">
                Order Now <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$sel = "SELECT * FROM menu_items";
$result = mysqli_query($con,$sel);
?>
<section class="food_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our Menu</h2>
    </div>
    <ul class="filters_menu">
      <!-- Create dynamic category filters -->
      <?php
      $categories = [];
      while ($row = $result->fetch_assoc()) {
          $categories[] = $row['category'];
      }
      $categories = array_unique($categories);
      ?>
      <li class="active" data-filter="*">All</li>
      <?php foreach ($categories as $category): ?>
        <li data-filter=".<?= strtolower($category) ?>"><?= ucfirst($category) ?></li>
      <?php endforeach; ?>
    </ul>
    <div class="filters-content">
      <div class="row grid">
        <!-- Loop through dynamic menu items -->
        <?php
        $result = mysqli_query($con,$sel); // Reset result set
        while ($row = $result->fetch_assoc()): ?>
          <div class="col-sm-6 col-lg-4 all <?= strtolower($row['category']) ?>">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="admin/uploads/<?= $row['image_path'] ?>" alt="<?= $row['name'] ?>">
                </div>
                <div class="detail-box">
                  <h5><?= $row['name'] ?></h5>
                  <p><?= $row['description'] ?></p>
                  <div class="options">
                    <h6>$<?= $row['price'] ?></h6>
                    <a href=""><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="btn-box">
      <a href="">View More</a>
    </div>
  </div>
</section>
<section class="about_section layout_padding">
  <div class="container  ">
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
          <a href="about.php">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_review();
get_footer();
?>