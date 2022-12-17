<link rel="stylesheet" href="../../assets/css/admin.css">
<style>
    .form-g {
        background-color: #fff;
        box-shadow: 2px 2px 5px #ddd;
        padding: 1em 2em;
    }

    .form-control {
        border-radius: 0 !important;
        padding: 20px !important;
        margin-bottom: 10px !important;
    }

    .top h4 {
        background-color: #242424;
        color: white;
        text-align: center;
        padding: .6em;
        margin: 0 !important;
    }

    .btn {
        background-color: #242424;
        color: white;
        border-radius: 0 !important;
    }

    .btn:hover {
        color: orangered !important;
        border-radius: 0 !important;
    }

    .form-error {
        background-color: #ffb9d1;
        padding: 10px 10px 0px 10px;
        border: 2px solid #491217;
        margin-bottom: 1em;
    }

    .image-sec img {
        height: 150px;
        width: 150px;
        border-radius: 100%;
        margin-bottom: 1.5em;
        object-fit: cover;
    }
</style>
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/users.php');
?>
<section style="display: flex;">
    <div class="lside">
        <?php
        require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
    </div>

    <div class="rside">
        <div class="float-right">
            <a class="btn btn-primary" href="index.php">Manage User</a>
        </div>
        <div class="adduser-sec">
            <h2>Edit Users</h2>
        </div>

        <div class="container" style=" margin:2em auto;">



            <div>
                <div class="form ">

                    <div class="image-sec">

                        <img src="<?php echo BASE_URL . '/assets/img/' . $user_image ?>" alt="<?php echo $username ?>">

                    </div>
                    <div class="top">
                        <h4>Update Profile of <?php echo $username ?></h4>
                    </div>

                    <form method="POST" class="form-g" action="edit.php" class="form_sec" enctype="multipart/form-data">

                        <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

                        <div>
                            <input type="hidden" class="form-control" value="<?php echo $id ?>" name="id">
                        </div>

                        <div>
                            <label for="username">Username *</label>
                            <input type="text" class="form-control" value="<?php echo $username ?>" id="username" name="username">
                        </div>

                        <div>
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" value="<?php echo $email ?>" id="email" name="email">
                        </div>


                        <div>
                            <label for="Password">Password *</label>
                            <input type="password" class="form-control" value="<?php echo $password ?>" id="Password" name="password">
                        </div>

                        <div>
                            <label for="Confirm Password">Confirm Password *</label>
                            <input type="password" value="<?php echo $confirmpass ?>" class="form-control" id="Confirm Password" name="passwordconfirm">
                        </div>

                        <div class="mb-3">
                            <label for="pid">Update Profile Picture</label><br>
                            <input type="file" name="profile_image" id="pic">
                        </div><br>

                        <div class="col-md-12 mb-3">
                            <?php if (isset($admin) && $admin == 1) : ?>
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin
                                </label>
                            <?php else : ?>
                                <label>
                                    <input type="checkbox" name="admin">
                                    Admin
                                </label>
                            <?php endif; ?>
                        </div>

                        <div class="form-group mb-0">
                            <input type="submit" name="updateUserAdmin" value="Update User" class="btn btn-primary">
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

</body>

</html>