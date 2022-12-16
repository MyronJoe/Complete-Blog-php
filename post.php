<!DOCTYPE html>
<html lang="en">

<?php
include 'path.php';
include ROOT_PATH . "/app/database/db.php";

if (isset($_GET['post_id'])) {
    $id = $_GET['post_id'];

    $post = selectOne('posts', ['id' => $id]);
    // dump($post);
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
        .image-section img{
            height: 400px;
            width: 100%;
            object-fit: cover;
        }
        .image-section{
            margin-bottom: 20px;
        }
    </style>

</head>

<body>

    <!-- HEADER -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-8">

                    <div class="image-section">
                        <img src="assets/img/1670786514_galery-2.jpg" alt="">
                    </div>
                    <!-- post share -->
                    <div class="section-row">
                        <div class="post-share">


                            <a href="#"><i class="fa fa-user"></i><span>Email</span></a>
                            

                            <?php if ($post['topic_id']) : ?>
                                <?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
                            <?php else : ?>
                                <?php $topic['name'] = 'News'; ?>
                            <?php endif; ?>
                            <a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>">
                            <i class="fa fa-tag"></i>
                                <span><?php echo $topic['name'] ?></span>
                            </a>


                            <a><i class="fa fa-clock-o"></i><span><?php echo date('F j, Y', strtotime($post['created_at'])) ?></span></a>
                        </div>
                    </div>
                    <!-- /post share -->

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
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Health</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>20 April 2018</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

                            <!-- post -->
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Fashion</a>
                                            <a href="category.html">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>20 April 2018</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /post -->

                            <!-- post -->
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Health</a>
                                            <a href="category.html">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>20 April 2018</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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

            <!-- row -->
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
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        </footer>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>




<!-- /SECTION -->

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
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>