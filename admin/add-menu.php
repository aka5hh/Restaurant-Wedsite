<?php
require_once('functions\functions.php');
needLogged();
if ($_SESSION['role'] == 1) {
  get_header();
  get_sidebar();

  if (!empty($_POST)) {
    $name= $_POST['name'];
    $category= $_POST['category'];
    $description= $_POST['description'];
    $price= $_POST['price'];
    $image= $_FILES['pic'];
    $imageName = '';

    if ($image['name']!=''){
      $imageName = 'menu_'.time().'_'.rand(100000, 1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
    }

    $insert = "INSERT INTO menu_items (name,category,description,price,image_path)
    VALUES('$name','$category','$description','$price','$imageName')";

    if (!empty($name)) {
    if (!empty($category)) {
      if (mysqli_query($con, $insert)) {
        move_uploaded_file($image['tmp_name'], 'uploads/' . $imageName);
        echo "Menu upload Success.";
      } else {
        echo "Menu upload failded";
      }
    } else {
      echo "Please enter category";
    }

    } else {
      echo "Please enter Menu name";
    }
  }


?>
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="" enctype="multipart/form-data">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col-md-8 card_title_part">
                <i class="fab fa-gg-circle"></i> Add Menu Information
              </div>
              <div class="col-md-4 card_button_part">
                <a href="all-menu.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Menu</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Menu Name<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="name">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Category:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="category">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Description<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="description">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Price<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="price">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Image:</label>
              <div class="col-sm-4">
                <input type="file" class="form-control form_control" id="" name="pic">
              </div>
            </div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-sm btn-dark">Upload</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<?php
  get_footer();
} else {
  header('Location: index.php');
}
?>