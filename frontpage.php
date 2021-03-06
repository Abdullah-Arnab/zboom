<?php get_header() ?>
<?php
	/*
	Template Name: Home
	*/ 
 ?>
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php 
						$slideritems = new WP_Query(
							array(
								'post_type' => 'zboomslider'
							));
					 ?>

					<?php while($slideritems->have_posts()): $slideritems->the_post(); ?>
					<li><?php the_post_thumbnail(); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content-------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<?php 
				$blockitems = new WP_Query(array(
					'post_type' => 'zboomservices',
					'posts_per_page' => 3
				));
			 ?>
			<?php while($blockitems->have_posts()): $blockitems->the_post(); ?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

					
					<?php while(have_posts()): the_post() ?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail() ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
								<div class="info">By <?php the_author() ?> on <?php the_time( 'F d, Y' ); ?> with <?php comments_popup_link( 'No Comments', '1 Comment', '% Comments', '', 'Comments Disabled' ); ?></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
								
							</div>
						</div>
					</article>
					<?php endwhile; ?>


					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo esc_url(get_template_directory_uri())?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>