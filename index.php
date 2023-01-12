<!DOCTYPE html>
<html lang="en">
<?php
include 'path.php';
include ROOT_PATH . "/app/database/db.php";

$posts = selectAll('posts', ['published' => 1]);

$getAllTopics = selectAll('topics');

?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.post-img img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
		.success {
			color: #155724;
			border: 2px solid #155724;
			padding-top: 15px;
			padding-left: 10px;
			background-color: #d4edda;
			height: 50px;
			display: flex;
			align-items: center;
			border-color: #c3e6cb;
			width: 90%;
			margin: auto;
			position: absolute;
			z-index: 10;
			left: 0;
			right: 0;
			top: 120px;
		}

		.danger {
			color: #491217;
			background-color: #ffb9d1;
			border-color: #491217;
			padding-top: 15px;
			padding-left: 10px;
			height: 50px;
			display: flex;
			align-items: center;
			border-color: #c3e6cb;
			width: 90%;
			margin: auto;
			position: absolute;
			z-index: 10;
			left: 0;
			right: 0;
			top: 120px;
		}

		.sm-img img {
			height: 250px;
			width: 100%;
			object-fit: cover;
		}

		.md-img img {
			height: 507px;
			width: 100%;
			object-fit: cover;
		}

		.sm-sm img {
			height: 90px;
			width: 100%;
			object-fit: cover;
		}
	</style>
	<?php
	include(ROOT_PATH . "/app/includes/css.php");

	?>
	<title>FrankNaija</title>

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
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<?php foreach ($posts as $key => $post) : ?>
						<?php if ($key < 1) : ?>
							<div class="post post-thumb">
								<a class="post-img md-img" href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">

										<?php if ($post['topic_id']) : ?>
											<?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
										<?php else : ?>
											<?php $topic['name'] = 'News'; ?>
										<?php endif; ?>

										<a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>"><?php echo $topic['name'] ?></a>
									</div>
									<h3 class="post-title title-lg">
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


										<li><a href=""><?php echo $author['username'] ?></a></li>
										<li><?php echo date('F j, Y', strtotime($post['created_at'])) ?></li>
									</ul>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
					<!-- /post -->
				</div>


				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<?php foreach ($posts as $key => $post) : ?>
						<?php if ($key >= 1 && $key <= 2) : ?>
							<div class="post post-thumb">
								<a class="post-img sm-img" href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">

										<?php if ($post['topic_id']) : ?>
											<?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
										<?php else : ?>
											<?php $topic['name'] = 'News'; ?>
										<?php endif; ?>

										<a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>"><?php echo $topic['name'] ?></a>
									</div>
									<h3 class="post-title"><a href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><?php echo $post['title'] ?></a></h3>
									<ul class="post-meta">


										<?php if ($post['user_id']) : ?>
											<?php $author = selectOne('users', ['id' => $post['user_id']]) ?>
										<?php else : ?>
											<?php $author['username'] = 'Frank'; ?>
										<?php endif; ?>


										<li><a href="#"><?php echo $author['username'] ?></a></li>
										<li><?php echo date('F j, Y', strtotime($post['created_at'])) ?></li>
									</ul>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
					<!-- /post -->
				</div>
			</div>

		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						<div class="row">
							<div class="col-md-6" style="padding:0 2em">
								<!-- post -->
								<?php foreach ($posts as $key => $post) : ?>
									<?php if ($key < 8) : ?>
										<div class="post post-widget">
											<a class="post-img sm-sm" href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt=""></a>
											<div class="post-body">
												<div class="post-category">

													<?php if ($post['topic_id']) : ?>
														<?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
													<?php else : ?>
														<?php $topic['name'] = 'News'; ?>
													<?php endif; ?>

													<a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>"><?php echo $topic['name'] ?></a>
												</div>
												<h3 class="post-title"><a href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><?php echo $post['title'] ?></a></h3>
												<ul class="post-meta">

													<?php if ($post['user_id']) : ?>
														<?php $author = selectOne('users', ['id' => $post['user_id']]) ?>
													<?php else : ?>
														<?php $author['username'] = 'Frank'; ?>
													<?php endif; ?>


													<li><a href="#"><?php echo $author['username'] ?></a></li>
													<li><?php echo date('F j, Y', strtotime($post['created_at'])) ?></li>
												</ul>
											</div>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
								<!-- /post -->

							</div>

							<div class="col-md-6" style="padding:0 2em">
								<!-- post -->
								<?php foreach ($posts as $key => $post) : ?>
									<?php if ($key >= 8 && $key <= 16) : ?>
										<div class="post post-widget">
											<a class="post-img sm-sm" href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt=""></a>
											<div class="post-body">
												<div class="post-category">


													<?php if ($post['topic_id']) : ?>
														<?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
													<?php else : ?>
														<?php $topic['name'] = 'News'; ?>
													<?php endif; ?>

													<a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>"><?php echo $topic['name'] ?></a>
												</div>
												<h3 class="post-title"><a href="post.php?post_id=<?php echo $post['id'] . '&title=' . $post['title'] ?>"><?php echo $post['title'] ?></a></h3>
												<ul class="post-meta">


													<?php if ($post['user_id']) : ?>
														<?php $author = selectOne('users', ['id' => $post['user_id']]) ?>
													<?php else : ?>
														<?php $author['username'] = 'Frank'; ?>
													<?php endif; ?>


													<li><a href="#"><?php echo $author['username'] ?></a></li>
													<li><?php echo date('F j, Y', strtotime($post['created_at'])) ?></li>
												</ul>
											</div>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>
								<!-- /post -->
							</div>
						</div>
					</div>
		

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Popular Posts</h2>
							</div>
						</div>
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

				<div class="col-md-4 side-bar">
					<!-- category widget -->
					<?php include(ROOT_PATH . "/app/includes/side.php"); ?>
					<!-- /post widget -->
				</div>
			</div>

		</div>
		<!-- /container -->
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

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>