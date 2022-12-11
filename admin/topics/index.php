<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/topics.php');
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
            <a class="btn btn-primary" href="create.php">Add Topic</a>
        </div>
        <div class="adduser-sec">
            <h2>Manage Topics</h2>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Topics</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($topics as $key => $topic) : ?>

                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><?php echo $topic['name'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $topic['id']; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                            <a href="index.php?del_id=<?php echo $topic['id'] ?>" onclick="return confirm('Are you sure...?')" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</section>

</body>

</html>