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

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include(ROOT_PATH . "/app/includes/css.php");
    ?>
    <title>FrankNaija</title>

    <style>
        .image-section img{
            height: 400px;
            width: 100%;
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
                            <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                            <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                            <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
                            <a href="#"><i class="fa fa-envelope"></i><span>Email</span></a>
                        </div>
                    </div>
                    <!-- /post share -->

                    <!-- post content -->
                    <div class="section-row">
                        <h3>Ea vix periculis sententiae, ea blandit pericula abhorreant pri.</h3>
                        <p>Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p>
                        <p>Est in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.</p>
                        <figure class="pull-right">
                            <img src="./img/media-1.jpg" alt="">
                            <figcaption>Lorem ipsum dolor sit amet, mea ad idque detraxit,</figcaption>
                        </figure>
                        <p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>
                        <p>Sit nulla quidam et, eam ea legimus deserunt neglegentur. Et veri nostrud vix, meis minimum atomorum ex sea, stet case habemus mea no. Ut dignissim dissentiet his, mei ea delectus delicatissimi, debet dissentiunt te duo. Sonet partiendo et qui, pro et veri solet singulis. Vidit viderer eleifend ad nam. Minimum eligendi suscipit ius et, vis ex laoreet detracto scripserit, at sumo sale solum pro.</p>
                        <blockquote class="blockquote">
                            <p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
                            <footer class="blockquote-footer">John Doe</footer>
                        </blockquote>
                        <p>Mei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel. Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait oporteat eos, id usu sint numquam sententiae.</p>
                        <figure>
                            <img src="./img/media-2.jpg" alt="">
                        </figure>
                        <h3>Sit nulla quidam et, eam ea legimus deserunt neglegentur.</h3>
                        <p>No possim singulis sea, dolores salutatus interpretaris eam ad. An singulis postulant his, an inermis urbanitas mel. Wisi veri noster eu est, diam ridens eum in. Omnium imperdiet patrioque quo in, est sumo persecuti abhorreant ei. Sed feugiat iracundia id, inermis percipit eu has.</p>
                        <p>In vidit homero ullamcorper his, ea mea senserit constituto, et alia idque congue sit. Postea percipit his ne. Probo movet noluisse in nam, sed ex utroque inermis corrumpit, oratio tation vix at. Usu aperiri assentior at, eam et melius iudicabit pertinacia.</p>
                    </div>
                    <!-- /post content -->

                    <!-- post tags -->
                    <div class="section-row">
                        <div class="post-tags">
                            <ul>
                                <li>TAGS:</li>
                                <li><a href="#">Social</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Health</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post tags -->


                    <!-- /post author -->

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