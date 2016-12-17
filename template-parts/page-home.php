<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Service
 */

get_header(); ?>
<div class="banner">
	<p id="left-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></p>
	<p id="right-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></p>
	<div class="banner-box1">
		<div class="banner-image1">
			<div id="phrase1"> <h3> Chi Phí Học Thấp </h3> </div>
			<div id="phrase2"> <h3> Truyền Tải Nhanh Chóng </h3> </div>
			<div id="phrase3"> <h3> Học Mọi Lúc, Mọi Nơi</h3> </div>
			<p>Online Tại Aber Academy</p>
			<!-- <div id="wordpress"> <span> WordPress </span> <div> -->
		</div>
		<div class="banner-text1">
			<h2>HỌC TRỰC TUYẾN</h2>
			<quote> Học trực tuyến (e-Learning) đang thay đổi. Và chúng ta sẽ thấy sự nổi bật của các mô hình mới, các kỹ thuật và thiết kế mới. Vì thế, hãy bỏ chữ "e" - hoặc ít nhất cho nó một định nghĩa mới và rộng hơn.
			</quote> <span> - <a href='http://masie.com/MASIE-Information/who-is-elliott-masie.html'>Elliot Masie</a></span>
			<input type="button" value="Let's start..."></input>
		</div>
	</div><!-- close banner-box1 -->

	<div class="banner-box2">
			<div id="banner-title">
				<h2>Học Trực Tuyến (e-Learning) Đang Thay Đổi Việc Học</h2>
			</div>
			<div id="first-column">
				<div id="stat1">
					<h3> <p class="number">52%</p> </h3> 
				</div>
					<p class="title1">Lựa chọn học trực tuyến cho sự phát triển cá nhân. Bạn nghĩ mọi người chỉ tham gia các khoá học trực tuyến cho trường lớp hoặc công việc? Bạn nên suy nghĩ lại.</p>
			</div>
			<div id="second-column">
				<div id="stat2">
					<h3> <p class="number">75%</p> </h3> 
				</div>
					<p class="title1">Các nhà lãnh đạo giáo dục tính đến học trực tuyến trong các kế hoạch phát triển lâu dài của họ.</p>
			</div>
			<div id="third-column">
				<div id="stat3">
					<h3> <p class="number">96%</p> </h3> 
				</div>
					<p class="title1">Các trường đại học ở Mỹ lựa chọn các khoá học trực tuyến.</p>
			</div>
								
			<div id="fourth-column">
				<input type="button" value="Let's start..."></input>
			</div>
			

	</div><!-- close banner-box2 -->

</div>


<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="intro">
				<div class="intro1">
					<p class="icon"> <a> <i class="fa fa-home" aria-hidden="true"></i> </a> </p>
					<h3>Free Consulting Service</h3>
					<p>You will get much information about the application that you need for your business</p>
				</div>
				<div class="intro2">
					<p class="icon"> <i class="fa fa-home" aria-hidden="true"></i></p>
					<h3>Free Consulting Service</h3>
					<p>You will get much information about the application that you need for your business</p>
				</div>
				<div class="intro3">
					<p class="icon"> <i class="fa fa-home" aria-hidden="true"></i></p>
					<h3>Free Consulting Service</h3>
					<p>You will get much information about the application that you need for your business</p>
				</div>
				<div class="intro4">
					<p class="icon"> <i class="fa fa-home" aria-hidden="true"></i></p>
					<h3>Free Consulting Service</h3>
					<p>You will get much information about the application that you need for your business</p>
				</div>
			</div>

			<div class="blog-why">
				<div class="blog">
					<h3 class="blog-header"><a href="#">BLOG</a></h3>
					<?php

						$args = array( 'posts_per_page' => 2, 'category' => 2 );

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="items">
								<div class="post-thumbnail">
									<?php
										set_post_thumbnail_size( 200, 150 ); // 50 pixels wide by 50 pixels tall, resize mode
										the_post_thumbnail();
									?>
								</div>
								<div class="title-content">
									<a id="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<?php the_content(); ?>
								</div>
							</div>

						<?php endforeach;
						wp_reset_postdata();?>

				</div>

				<div class="why">
				<h3 class="why-header"><a href="#">WHY WP EMPOWER</a></h3>
						<div class="item">
							<div class="active-heading1">
								<a class="toggle"> <i class="fa fa-home" aria-hidden="true"></i>REASON 1</a>
							</div>
							<p class="reason1"> This is the reason that you should get the service from us. It's about quality and quick time to get the system up. </p>
						</div>
						<div class="item">
							<div class="active-heading2">
								<a class="toggle"> <i class="fa fa-home" aria-hidden="true"></i>REASON 1</a>
							</div>
							<p class="reason2"> This is the reason that you should get the service from us. It's about quality and quick time to get the system up. </p>
						</div>
						<div class="item">
							<div class="active-heading3">
								<a class="toggle"> <i class="fa fa-home" aria-hidden="true"></i>REASON 1</a>
							</div>
							<p class="reason3"> This is the reason that you should get the service from us. It's about quality and quick time to get the system up. </p>
						</div>

				</div>
			</div>

			<div id="accordion">
			  <h3>Section 1</h3>
			  <div>
			    <p>
			    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
			    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
			    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
			    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
			    </p>
			  </div>
			  <h3>Section 2</h3>
			  <div>
			    <p>
			    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
			    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
			    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
			    suscipit faucibus urna.
			    </p>
			  </div>
			  <h3>Section 3</h3>
			  <div>
			    <p>
			    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
			    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
			    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
			    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
			    </p>
			    <ul>
			      <li>List item one</li>
			      <li>List item two</li>
			      <li>List item three</li>
			    </ul>
			  </div>
			  <h3>Section 4</h3>
			  <div>
			    <p>
			    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
			    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
			    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
			    mauris vel est.
			    </p>
			    <p>
			    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
			    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
			    inceptos himenaeos.
			    </p>
			  </div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
