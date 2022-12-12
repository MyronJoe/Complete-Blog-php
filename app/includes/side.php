<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
        <ul>
            <?php foreach ($getAllTopics as $key => $topics) : ?>
                <?php if ($key < 7) : ?>
                    <li><a href="<?php echo BASE_URL . '/category.php?t_id=' . $topics['id'] ?>"><?php echo $topics['name'] ?> <span>230</span></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
            <!-- <li><a href="#">Lifestyle <span>451</span></a></li>
            <li><a href="#">Technology <span>40</span></a></li>
            <li><a href="#">Travel <span>38</span></a></li>
            <li><a href="#">Health <span>24</span></a></li> -->
        </ul>
    </div>
</div>
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Trending Video</h2>
    </div>
    <div style="height:300px; width:100%; background-color:red;">

    </div>
</div>
<!-- /category widget -->

<!-- newsletter widget -->
<!-- <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div> -->
<!-- /newsletter widget -->

<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Popular Posts</h2>
    </div>
    <!-- post -->
    <?php foreach ($posts as $key => $post) : ?>
        <?php if ($key > 7) : ?>
            <div class="post post-widget">
                <a class="post-img sm-sm" href="blog-post.html"><img src="<?php echo BASE_URL . '/assets/img/' . $post['image'] ?>" alt=""></a>
                <div class="post-body">
                    <div class="post-category">
                        <?php if ($post['topic_id']) : ?>
                            <?php $topic = selectOne('topics', ['id' => $post['topic_id']]) ?>
                        <?php else: ?>
                            <?php $topic['name'] = 'News';?>
                        <?php endif; ?>

                        <a href="<?php echo BASE_URL . '/category.php?t_id=' . $topic['id'] ?>"><?php echo $topic['name'] ?></a>
                    </div>
                    <h3 class="post-title"><a href="blog-post.html"><?php echo $post['title'] ?></a></h3>
                </div>
            </div>
        <?php endif; ?>
	<?php endforeach; ?>
    <!-- /post -->

    
</div>