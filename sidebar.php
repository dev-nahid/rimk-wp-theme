<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rimk
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- start blog sidebar area -->
<div class="col-lg-4 order-0 order-lg-1">
	<aside class="blog-sidebar">
		<!-- single item -->
		<div class="single-item search-blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
			<div class="search-area">
				<input type="search" id="search" placeholder="search">
				<button type="submit"><i class="flaticon-loupe"></i></button>
			</div>
		</div>
		<!-- single item -->
		<div class="single-item recent-post wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
			<div class="item-title">
				<h4>recent posts</h4>
			</div>
			<ul>
				<li>
					<a href="#!">
						<img src="assets/images/blog/recent1.jpg" alt="Recent Post">
					</a>
					<div class="media-body">
						<span>jan 06 2020</span>
						<a href="#!">Covid-19 threatens the next generation of smartphones</a>
					</div>
				</li>
				<li>
					<a href="#!">
						<img src="assets/images/blog/recent2.jpg" alt="Recent Post">
					</a>
					<div class="media-body">
						<span>jun 07 2020</span>
						<a href="#!">Covid-19 threatens the next generation of computers</a>
					</div>
				</li>
				<li>
					<a href="#!">
						<img src="assets/images/blog/recent3.jpg" alt="Recent Post">
					</a>
					<div class="media-body">
						<span>aug 16 2020</span>
						<a href="#!">Spending himself as a Business person for improvement</a>
					</div>
				</li>
				<li>
					<a href="#!">
						<img src="assets/images/blog/recent4.jpg" alt="Recent Post">
					</a>
					<div class="media-body">
						<span>sep 10 2020</span>
						<a href="#!">Offers are accepted by visiting elderly and fastly</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- single item -->
		<div class="single-item bg-blue category wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="item-title">
				<h4>categories</h4>
			</div>
			<ul>
				<li><a href="#"><i class="fas fa-tags"></i>Success Stories</a></li>
				<li><a href="#"><i class="fas fa-tags"></i>Consulting</a></li>
				<li><a href="#"><i class="fas fa-tags"></i>Development</a></li>
				<li><a href="#"><i class="fas fa-tags"></i>architecture</a></li>
				<li><a href="#"><i class="fas fa-tags"></i>interior design</a></li>
				<li><a href="#"><i class="fas fa-tags"></i>creative ideas</a></li>
			</ul>
		</div>
		<!-- single item -->
		<div class="single-item bg-blue tags wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
			<div class="item-title">
				<h4>tags</h4>
			</div>
			<div class="tag-items">
				<a href="#">architecture</a>
				<a href="#">consulting</a>
				<a href="#">interior</a>
				<a href="#">development</a>
				<a href="#">strategy</a>
				<a href="#">articles</a>
				<a href="#">design</a>
				<a href="#">exterior</a>
			</div>
		</div>
	</aside>
</div>
<!-- end blog sidebar area -->
