<section>
    <div class="container-fluid content_part">
        <div class="row">
            <div class="col-md-2 sidebar_part">
                <div class="user_part">
                    <!-- <img class="" src="images/avatar1.png" alt="avatar" /> -->
                    <?php if ($_SESSION['photo'] != "") { ?>
                    <img class="" src="uploads/<?= $_SESSION['photo'] ?> " alt="User" />
                  <?php } else { ?>
                    <img class="" src="images/avatar.jpg" alt="avatar" />
                  <?php } ?>
                    <h5><?=$_SESSION['name']?></h5>
                    <p><i class="fas fa-circle"></i> Online</p>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
                        <?php if ($_SESSION['role'] == 1 ){ ?>
                        <li><a href="all-user.php"><i class="fas fa-user-circle"></i> Users</a></li>
                        <?php } if ($_SESSION['role'] <= 2 ){  ?>
                        <li><a href="all-banner.php"><i class="fas fa-images"></i> Banner</a></li>
                        <?php } ?>
                        <li><a href="all-message.php"><i class="fas fa-comments"></i> Reviews</a></li>
                        <li><a href="book-table.php"><i class="fas fa-utensils" style="color: #ffffff;"></i> Booking</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 content">
                <div class="row">
                    <div class="col-md-12 breadcumb_part">
                        <div class="bread">
                            <ul>
                                <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                                <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>