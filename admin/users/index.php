<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/users.php');
require_once(ROOT_PATH . "/app/includes/session.php");
// adminOnly();
?>
<section style="display: flex;">
    <div class="lside">
        <?php
        require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
    </div>

    <div class="rside">
        <div class="float-right">
            <a class="btn btn-primary" href="<?php echo BASE_URL . '/register.php' ?>">Create User</a>
        </div>
        <div class="adduser-sec">
            <h2>Manage Users</h2>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admin_users as $key => $user) : ?>
                    <?php
                    $id = $user['id']
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <th scope="row">
                            <img style="object-fit: cover;" height="60px" width="60px" src="<?php echo BASE_URL . '/assets/img/' . $user['profile_image'] ?>" alt="<?php echo $username ?>">
                        </th>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <a href="edit.php?user_id=<?php echo $user['id'] ?>" class="btn btn-sm btn-primary mr-1">Edit</a>

                            <a href="index.php?del_id=<?php echo $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete user...?')">Delete</a>

                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</section>

</body>

</html>