<?php
require_once('functions\functions.php');
needLogged();
if ($_SESSION['role'] == 1) {
    get_header();
    get_sidebar();
?>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>All Menu Information
                    </div>
                    <div class="col-md-4 card_button_part">
                        <a href="add-menu.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Menu</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Active Status</th>
                            <th>Image</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sel = "SELECT * FROM menu_items ORDER BY id";
                        $Q = mysqli_query($con, $sel);
                        while ($data = mysqli_fetch_assoc($Q)) {
                        ?>
                            <tr>
                                <td> <?= substr($data['name'],0,15) ?> </td>
                                <td> <?= substr($data['category'],0,15) ?> </td>
                                <td> <?= substr($data['description'],0,25) ?>... </td>
                                <td> <?= $data['price'] ?> </td>
                                <td> <?= $data['status'] ?> </td>
                                <td>
                                    <?php if ($data['image_path'] != "") { ?>
                                        <img height="40" class="img200" src="uploads/<?= $data['image_path'] ?> " alt="menu" />
                                    <?php } else { ?>
                                        <img height="40" src="images/avatar.jpg" alt="menu" />
                                    <?php } ?>
                                </td>
                                <td>
                                    <div class="btn-group btn_group_manage" role="group">
                                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a class="dropdown-item" href="active-menu.php?me=">Edit</a></li> -->
                                            <li><a class="dropdown-item" href="active-menu.php?ma=<?= $data['id'] ?>">Active</a></li>
                                            <li><a class="dropdown-item" href="disable-menu.php?mdd=<?= $data['id'] ?>">Deactivate</a></li>
                                            <li><a class="dropdown-item" href="delete-menu.php?md=<?= $data['id'] ?>">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="btn-group" role="group" aria-label="Button group">
                    <button type="button" class="btn btn-sm btn-dark">Print</button>
                    <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                    <button type="button" class="btn btn-sm btn-dark">Excel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
} else {
    header('Location: index.php');
}
?>