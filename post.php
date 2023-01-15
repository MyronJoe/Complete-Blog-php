<!DOCTYPE html>
<html lang="en">

<?php
include 'path.php';
include ROOT_PATH . "/app/database/db.php";

if (isset($_GET['post_id'])) {
    $id = $_GET['post_id'];

    $post = selectOne('posts', ['id' => $id]);
}
$posts = selectAll('posts', ['published' => 1]);

$getAllTopics = selectAll('topics');

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include(ROOT_PATH . "/app/includes/css.php");
    ?>
    <title><?php echo $post['title'] ?></title>

    <style>
        .image-section img {
            height: 400px;
            width: 100%;
            object-fit: cover;
        }

        .image-section {
            margin-bottom: 20px;
        }

        .post-img img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .sm-sm img {
            height: 90px;
            width: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <!-- HEADER -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- /HEADER -->

    <div class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-8">

                    <div class="image-section">
                        <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt="<?php echo $post['title'] ?>">
                    </div>

                    <div class="section-row">
                        <div class="post-share">

                            <?php if ($post['user_id']) : ?>
                                <?php $author = selectOne('users', ['id' => $post['user_id']]) ?>
                            <?php else : ?>
                                <?php $author['username'] = 'Frank'; ?>
                            <?php endif; ?>

                            <a><i class="fa fa-user"></i><span><?php echo $author['username'] ?></span></a>


                            <?php if ($post['topic_id']) : ?>
                                <?php $topic = selectOne('topics', ['id' => $post['topic_id']]); ?>
                                <a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>">
                                    <i class="fa fa-tag"></i>
                                    <span><?php echo $topic['name'] ?></span>
                                </a>
                            <?php else : ?>
                                <?php $topic['name'] = 'News'; ?>
                                <a>
                                    <i class="fa fa-tag"></i>
                                    <span><?php echo $topic['name'] ?></span>
                                </a>
                            <?php endif; ?>

                            <a><i class="fa fa-clock-o"></i><span><?php echo date('F j, Y', strtotime($post['created_at'])) ?></span></a>
                        </div>
                    </div>

                    <!-- post content -->
                    <div class="section-row">
                        <h3>
                            <?php echo $post['title'] ?>
                        </h3>

                        <p>
                            <?php echo $post['body'] ?>
                        </p>

                    </div>
                    <!-- /post content -->

                    <!-- /related post -->
                    <div>
                        <div class="section-title">
                            <h3 class="title">Related Posts</h3>
                        </div>
                        <div class="row">
                            <!-- post -->
                            <?php foreach ($posts as $key => $post) : ?>
                                <?php if ($key < 3) : ?>
                                    <div class="col-md-4">
                                        <div class="post post-sm">
                                            <a class="post-img" href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>">
                                                <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt="">
                                            </a>
                                            <div class="post-body">
                                                <div class="post-category">

                                                    <?php if ($post['topic_id']) : ?>
                                                        <?php $topic = selectOne('topics', ['id' => $post['topic_id']]); ?>
                                                        <a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>">
                                                            <i class="fa fa-tag"></i>
                                                            <span><?php echo $topic['name'] ?></span>
                                                        </a>
                                                    <?php else : ?>
                                                        <?php $topic['name'] = 'News'; ?>
                                                        <a>
                                                            <i class="fa fa-tag"></i>
                                                            <span><?php echo $topic['name'] ?></span>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                                <h3 class="post-title title-sm">
                                                    <a href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>">
                                                        <?php echo $post['title'] ?>
                                                    </a>
                                                </h3>
                                                <ul class="post-meta">
                                                    <?php if ($post['user_id']) : ?>
                                                        <?php $author = selectOne('users', ['id' => $post['user_id']]) ?>
                                                    <?php else : ?>
                                                        <?php $author['username'] = 'Frank'; ?>
                                                    <?php endif; ?>

                                                    <li><a><?php echo $author['username'] ?></a></li>
                                                    <li><?php echo date('F j, Y', strtotime($post['created_at'])) ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <!-- /post -->

                        </div>
                    </div>
                    <!-- /related post -->
                </div>

                <div class="col-md-4 side-bar">
                    <!-- category widget -->
                    <?php include(ROOT_PATH . "/app/includes/side.php"); ?>
                    <!-- /post widget -->
                </div>

            </div>
            <!-- /row -->


        </div>
        </footer>

        <!-- FOOTER -->
        <footer id="footer">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <?php require(ROOT_PATH . "/app/includes/footer.php") ?>
                <!-- /row -->

                <!-- row -->
                <div class="footer-bottom row">
                    <div class="col-md-6 col-md-push-6">
                        <ul class="footer-nav">
                            <li><a href="<?php echo BASE_URL . '/' ?>">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contacts</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-md-pull-6">
                        <div class="footer-copyright">
                            <a href="<?php echo BASE_URL . '/' ?>" class="logo">
                                <h1 style='color:white'>Frank<span>Naija</span></h1>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/main.js"></script>

</body>

</html>