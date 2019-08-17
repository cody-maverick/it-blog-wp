<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IT-blog
 */

get_header();
?>

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div id="hot-post" class="row hot-post">
			<div class="col-md-8 hot-post-left">

				<?php $posts = get_posts(array(
					'numberposts' => 3,
					'orderby'     => 'date',
					'post_type'   => 'post',
					'suppress_filters' => true,
				));

				foreach ($posts as $index => $post) {
					setup_postdata($post);
					if ($index === 0) {
						?>

				<!-- post -->
				<div class="post post-thumb">
					<a class="post-img" href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail($id, 'post-thumb'); ?>
					</a>
					<div class="post-body">
						<div class="post-category">
							<?php $categories = get_the_category($id);
									if ($categories) {
										foreach ($categories as $category) {
											$out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
										}
										echo trim($out, ', ');
										$out = '';
									}
									?>
						</div>
						<h3 class="post-title title-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ul class="post-meta">
							<li><a href="author.html"> <?php the_author() ?></a></li>
							<li><?php the_time('F jS, Y'); ?></li>
						</ul>
					</div>
				</div>
				<!-- /post -->
				<?php }
				}
				wp_reset_postdata() ?>

			</div>

			<div class="col-md-4 hot-post-right">

				<?php foreach ($posts as $index => $post) {
					setup_postdata($post);
					if ($index !== 0) {
						?>
				<!-- post -->
				<div class="post post-thumb">
					<a class="post-img" href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail($id, 'post-thumb-medium'); ?>
					</a>
					<div class="post-body">
						<div class="post-category">

							<?php $categoriesRight = get_the_category($id);
									if ($categoriesRight) {
										foreach ($categoriesRight as $category) {
											$out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
										}
										echo trim($out, ', ');
									}
									$out = '';
									?>
						</div>
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ul class="post-meta">
							<li><a href="author.html"><?php the_author() ?></a></li>
							<li><?php the_time('F jS, Y'); ?></li>
						</ul>
					</div>
				</div>
				<!-- /post -->

				<?php }
				}
				wp_reset_postdata()
				?>

			</div>
		</div>
		<!-- /row -->
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
							<h2 class="title">Свежие записи</h2>
						</div>
					</div>

					<?php $posts_new = get_posts(array(
						'numberposts' => 4,
						'orderby'     => 'date',
						'post_type'   => 'post',
						'suppress_filters' => true,
					));

					foreach ($posts_new as $index => $post) {
						setup_postdata($post);
						// print_r($post_new)
						?>

					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail($id, 'post-thumb-medium'); ?>
							</a>
							<div class="post-body">
								<div class="post-category">
									<?php $categories = get_the_category($id);
										if ($categories) {
											foreach ($categories as $category) {
												$out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
											}
											echo trim($out, ', ');
											$out = '';
										}
										?>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
								<ul class="post-meta">
									<li><a href="author.html"><?php the_author() ?></a></li>
									<li><?php the_time('F jS, Y'); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<?php  }
					wp_reset_postdata()	?>

					<!-- /post -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">JavaScript</h2>
						</div>
					</div>

					<?php $posts_6 = get_posts(array(
						'numberposts' => 3,
						'category' => 6,
						'orderby'     => 'date',
						'post_type'   => 'post',
						'suppress_filters' => true,
					));

					foreach ($posts_6 as $index => $post) {
						setup_postdata($post);

						?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail($id, 'post-thumb-medium'); ?>
							</a>
							<div class="post-body">
								<div class="post-category">
									<?php $categories = get_the_category($id);
										if ($categories) {
											foreach ($categories as $category) {
												$out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
											}
											echo trim($out, ', ');
											$out = '';
										}
										?>
								</div>
								<h3 class="post-title title-sm">
									<a href="<?php the_permalink() ?>">
										<?php the_title() ?>
									</a>
								</h3>
								<ul class="post-meta">
									<li><a href="author.html"> <?php the_author() ?></a></li>
									<li><?php the_time('F jS, Y'); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php }
					wp_reset_postdata()
					?>

				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Раскрутка</h2>
						</div>
					</div>

					<?php

					$posts_7 = get_posts(array(
						'numberposts' => 3,
						'category' => 7,
						'orderby'     => 'date',
						'post_type'   => 'post',
						'suppress_filters' => true,
					));

					$post = '';

					foreach ($posts_7 as $index => $post) {
						setup_postdata($post);

						?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail($id, 'post-thumb-medium'); ?>
							</a>
							<div class="post-body">
								<div class="post-category">
									<?php $categories = get_the_category($id);
										if ($categories) {
											foreach ($categories as $category) {
												$out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
											}
											echo trim($out, ', ');
											$out = '';
										}
										?>
								</div>
								<h3 class="post-title title-sm">
									<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
								</h3>
								<ul class="post-meta">
									<li><a href="author.html"> <?php the_author() ?></a></li>
									<li><?php the_time('F jS, Y'); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php }
					wp_reset_postdata(); ?>

				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Всякое</h2>
						</div>
					</div>

					<?php $posts_5 = get_posts(array(
						'numberposts' => 3,
						'category' => 5,
						'orderby'     => 'date',
						'post_type'   => 'post',
						'suppress_filters' => true,
					));

					foreach ($posts_5 as $index => $post) {
						setup_postdata($post);

						?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail($id, 'post-thumb-middle'); ?>
							</a>
							<div class="post-body">
								<div class="post-category">
									<?php $categories = get_the_category($id);
										if ($categories) {
											foreach ($categories as $category) {
												$out .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
											}
											echo trim($out, ', ');
											$out = '';
										}
										?>
								</div>
								<h3 class="post-title title-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<ul class="post-meta">
									<li><a href="author.html"> <?php the_author() ?></a></li>
									<li><?php the_time('F jS, Y'); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } 
					?>

				</div>
				<!-- /row -->


			</div>
			<div class="col-md-4">
				<!-- ad widget-->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-3.jpg" alt="">
					</a>
				</div>
				<!-- /ad widget -->

				<!-- social widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Social Media</h2>
					</div>
					<div class="social-widget">
						<ul>
							<li>
								<a href="#" class="social-facebook">
									<i class="fa fa-facebook"></i>
									<span>21.2K<br>Followers</span>
								</a>
							</li>
							<li>
								<a href="#" class="social-twitter">
									<i class="fa fa-twitter"></i>
									<span>10.2K<br>Followers</span>
								</a>
							</li>
							<li>
								<a href="#" class="social-google-plus">
									<i class="fa fa-google-plus"></i>
									<span>5K<br>Followers</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /social widget -->

				<!-- category widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Categories</h2>
					</div>
					<div class="category-widget">
						<ul>
							<li><a href="#">Lifestyle <span>451</span></a></li>
							<li><a href="#">Fashion <span>230</span></a></li>
							<li><a href="#">Technology <span>40</span></a></li>
							<li><a href="#">Travel <span>38</span></a></li>
							<li><a href="#">Health <span>24</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /category widget -->

				<!-- newsletter widget -->
				<div class="aside-widget">
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
				</div>
				<!-- /newsletter widget -->

				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Popular Posts</h2>
					</div>
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Technology</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /post widget -->
			</div>
		</div>
		<!-- /row -->
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
			<!-- ad -->
			<div class="col-md-12 section-row text-center">
				<a href="#" style="display: inline-block;margin: auto;">
					<img class="img-responsive" src="./img/ad-2.jpg" alt="">
				</a>
			</div>
			<!-- /ad -->
		</div>
		<!-- /row -->
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
			<div class="col-md-4">
				<div class="section-title">
					<h2 class="title">Lifestyle</h2>
				</div>
				<!-- post -->
				<div class="post">
					<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Fashion</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
					</div>
				</div>
				<!-- /post -->
			</div>
			<div class="col-md-4">
				<div class="section-title">
					<h2 class="title">Fashion</h2>
				</div>
				<!-- post -->
				<div class="post">
					<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
					</div>
				</div>
				<!-- /post -->
			</div>
			<div class="col-md-4">
				<div class="section-title">
					<h2 class="title">Health</h2>
				</div>
				<!-- post -->
				<div class="post">
					<a class="post-img" href="blog-post.html"><img src="./img/post-9.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
					</div>
				</div>
				<!-- /post -->
			</div>
		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<div class="col-md-4">
				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Travel</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Technology</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
					</div>
				</div>
				<!-- /post -->
			</div>
			<div class="col-md-4">
				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Health</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
					</div>
				</div>
				<!-- /post -->

				<!-- /post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Health</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-6.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Fashion</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
					</div>
				</div>
				<!-- /post -->
			</div>
			<div class="col-md-4">
				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-8.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Travel</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-9.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Technology</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-widget">
					<a class="post-img" href="blog-post.html"><img src="./img/widget-10.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
					</div>
				</div>
				<!-- /post -->
			</div>
		</div>
		<!-- /row -->
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
				<!-- post -->
				<div class="post post-row">
					<a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Travel</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-row">
					<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Travel</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-row">
					<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-row">
					<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Fashion</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="post post-row">
					<a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
					<div class="post-body">
						<div class="post-category">
							<a href="category.html">Health</a>
							<a href="category.html">Lifestyle</a>
						</div>
						<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
						<ul class="post-meta">
							<li><a href="author.html">John Doe</a></li>
							<li>20 April 2018</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
					</div>
				</div>
				<!-- /post -->

				<div class="section-row loadmore text-center">
					<a href="#" class="primary-button">Load More</a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- galery widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Instagram</h2>
					</div>
					<div class="galery-widget">
						<ul>
							<li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- /galery widget -->

				<!-- Ad widget -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /Ad widget -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->


<?php
get_sidebar();
get_footer();
