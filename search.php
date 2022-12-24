<!DOCTYPE html>
<html lang="en">
<?php
include 'path.php';
include ROOT_PATH . "/app/database/db.php";
$getAllTopics = selectAll('topics');

if (isset($_POST['term'])) {

    dump($_POST);

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

    <!-- HEADER -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <h2 style="margin-left: 15px ;"></h2>
                <div class="col-md-8">

                    

                </div>

                <div class="col-md-4 sidebar">
                    <!-- ad widget-->
                    
                    <!-- /Ad widget -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>