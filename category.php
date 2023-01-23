<!DOCTYPE html>
<html lang="en">
<?php
include 'path.php';
include ROOT_PATH . "/app/database/db.php";
$getAllTopics = selectAll('topics');

if (isset($_GET['t_id'])) {

    $posts = selectAll('posts', ['published' => 1]);

    $all_posts = selectAll('posts', ['topic_id' => $_GET['t_id']]);

    $category = selectOne('topics', ['id' => $_GET['t_id']]);
}

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    include(ROOT_PATH . "/app/includes/css.php");

    ?>
    <title>Category: <?php echo $category['name']; ?></title>

    <style>
        .sm-img img {
            height: 150px;
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

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <h2 style="margin-left: 15px ;">Category: <?php echo $category['name']; ?></h2>
                <div class="col-md-8">

                    <?php foreach ($all_posts as $key => $post) : ?>
                        
                        <div class="post post-widget">
                            <a class="post-img sm-img" href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">

                                    <?php if ($post['topic_id']) : ?>
                                        <?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
                                    <?php else : ?>
                                        <?php $topic['name'] = 'News'; ?>
                                    <?php endif; ?>

                                    <a href=""><?php echo $topic['name'] ?></a>
                                </div>

                                <h3 class="post-title title-lg"><a href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><?php echo $post['title'] ?></a></h3>
                                <ul class="post-meta">

                                    <?php if ($post['user_id']) : ?>
                                        <?php $author = selectOne('users', ['id' => $post['user_id']]) ?>
                                    <?php else : ?>
                                        <?php $author['username'] = 'Frank'; ?>
                                    <?php endif; ?>

                                    <li><a href=""><?php echo $author['username'] ?></a></li>
                                    <li><?php echo date('F j, Y', strtotime($post['created_at'])) ?></li>
                                </ul>
                                <p><?php echo substr($post['body'], 0, 120) . '...' ?></p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="col-md-4 sidebar">
                    <!-- ad widget-->
                    <?php include(ROOT_PATH . "/app/includes/side.php"); ?>
                    <!-- /Ad widget -->
                </div>
            </div>

        </div>
    </div>
    
    <footer id="footer">
        <div class="container">

            <?php require(ROOT_PATH . "/app/includes/footer.php") ?>

            <div class="footer-bottom row">
                <div class="col-md-6 col-md-push-6">
                    <ul class="footer-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="footer-copyright">
                        <a href="index.html" class="logo">
                            <h1 style='color:white'>Frank<span>Naija</span></h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>