<?php
require_once('functions\functions.php');
get_header();
?>
</div>
<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container ">
      <h2>
        Book A Table
      </h2>
    </div>
    <?php
    if (!empty($_POST)) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $person = $_POST['person'];
      $date = $_POST['date'];

      $insert = "INSERT INTO book_table(bookt_name,bookt_phone,bookt_email,bookt_person,bookt_date)
      VALUES('$name','$phone','$email','$person','$date')";

      if (!empty($name)) {
        if (!empty($phone)) {
          if (!empty($email)) {
            if (!empty($person)) {
              if (!empty($date)) {
                if (mysqli_query($con, $insert)) {
                  echo "We have recived your message. Thank you for contacting us.";
                }
              } else {
                echo "Please select the date you want a book the table";
              }
            } else {
              echo "Please select the number of persons";
            }
          } else {
            echo "Please enter corect email";
          }
        } else {
          echo "Please write your phone number";
        }
      } else {
        echo "Please write your name";
      }
    }
    ?>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <form method="post" action="">
            <div>
              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" />
            </div>
            <div>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" />
            </div>
            <div>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
            </div>
            <div>
              <select class="form-control nice-select wide" name="person" id="">
                <option value="" disabled selected>
                  How many persons?
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
              </select>
            </div>
            <div>
              <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="btn_box">
              <button>
                Book Now
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>