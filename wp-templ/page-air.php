<?php /* Template Name: Air Fleet */ ?>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH.'libs/head.php');
?>
</head>
<body id="fleet">
 
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div class="headSub">
	<h2 class="h2_subpage">Air Ambulance Fleet</h2>
</div>
<!--Footer ==================================================
================================================== -->

<div id="breadcum">
	<ul>
		<li><a href="<?php echo APP_URL; ?>"><?php echo ${'txt_home_'.$lang_web}; ?></a></li>
		<li>Air Ambulance Fleet</li>
	</ul>
</div>

<div class="container">
	<div class="flexBox flexBox--between noneFlex">
		<h3 class="h3_about">
		What is<br>
		an Air Ambulance?
		</h3>
		<div class="txtAbout"><?php echo $post->post_content; ?></div>
	</div>
	
	<ul class="listPlane flexBox flexBox--between flexBox noneFlex">
		<?php
			$wp_query = new WP_Query();
			$param = array (
			'posts_per_page' => '-1',
			'post_type' => 'air',
			'post_status' => 'publish',
			'order' => 'DESC',
			'paged' => $paged,
			);
			$wp_query->query($param);
			if($wp_query->have_posts()): while($wp_query->have_posts()) :$wp_query->the_post();
			$thumb_img = get_post_thumbnail_id($post->ID);
			$thumb_url = wp_get_attachment_image_src($thumb_img,'full');
		?>
		<li>
			<h4 class="h4_about"><?php the_title(); ?></h4>	
			<img src="<?php echo $thumb_url[0]; ?>" alt="">
			<div class="desc"><?php echo the_excerpt(); ?></div>
			<a href="<?php the_permalink(); ?>" class="btnMore btnMore--red"><div class="anim"></div>MORE</a>	
		</li>
		<?php endwhile; endif; ?>
	</ul>
</div>


<?php include(APP_PATH.'libs/footer-sub.php'); ?>

<script type="text/javascript">
	$(function() {
		$('#tab1').show();
		$('.listTab li:first-child').addClass('active');
		$('.listTab li a').click(function(){
			var id_show = $(this).attr('data-attribute');
			$('.tabInner').fadeOut(200);
			$('#tab' + id_show).fadeIn(200);
			$('.listTab li').removeClass('active');
			$(this).parent().addClass('active');
		});	
	});	
</script>

<!-- End Document
================================================== -->
</body>
</html>