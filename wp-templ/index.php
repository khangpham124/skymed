<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/slick.css">
</head>
<body id="top">
 
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div id="sliderTop">
	<ul class="slider">
		<?php 
			$wp_query = new WP_Query();
			$param = array (
			'posts_per_page' => '5',
			'post_type' => 'slider',
			'post_status' => 'publish',
			'order' => 'DESC',
			'paged' => $paged,
			);
			$wp_query->query($param);
			if($wp_query->have_posts()): while($wp_query->have_posts()) :$wp_query->the_post();
			$image_pc = wp_get_attachment_image_src(get_field('image'),'full');
			$image_sp = wp_get_attachment_image_src(get_field('image_mobile'),'full');
		?>
		<li>
			<img src="<?php echo thumbCrop($image_pc[0],1920,800); ?>" class="pc imgPc imgMax" alt="">
			<img src="<?php echo thumbCrop($image_sp[0],640,683); ?>" class="sp" alt="">
		</li>
		<?php endwhile;endif; ?>
	</ul>
	<div class="txtSlide" id="slogan1">
		<h2><?php echo ${'txtLarge_'.$lang_web}; ?></h2>
		<h3><?php echo ${'txtSmall_'.$lang_web}; ?></h3>
		<a href="<?php echo APP_URL; ?>services" class="btnMore btnMore--red"><div class="anim"></div><?php echo ${'hTitleServices_'.$lang_web}; ?></a>
	</div>
</div>

<div class="aboutBox">
	<h2 class="heading_page heading_page--center"><?php echo ${'hTitle_'.$lang_web}; ?></h2>
	<h3 class="large_heading_page large_heading_page--center">Air Ambulance <br class="sp">Medical Evacuation</h3>
	<div class="desc_page desc_page--750">
	<?php 
		$post_about = get_post( 8 ); 
	echo $post_about->post_content;
	?>
	</div>
	<a href="<?php echo APP_URL; ?>about" class="btnMore"><div class="anim"></div><?php echo ${'btnMore_'.$lang_web}; ?></a>
</div>

<div class="partnerBox">
<h2 class="heading_page heading_page--center"><?php echo ${'hTitlePartner_'.$lang_web}; ?></h2>
<ul class="slideLogo">
	<?php 
			$wp_query = new WP_Query();
			$param = array (
			'posts_per_page' => '-1',
			'post_type' => 'partners',
			'post_status' => 'publish',
			);
			$wp_query->query($param);
			if($wp_query->have_posts()): while($wp_query->have_posts()) :$wp_query->the_post();
			$thumb_img = get_post_thumbnail_id($post->ID);
			$thumb_url = wp_get_attachment_image_src($thumb_img,'full');
	?>
	<li><img src="<?php echo thumbCrop($thumb_url[0],325,120); ?>"  alt=""></li>
	<?php endwhile;endif; ?>
</ul>
</div>

<div class="flexBox flexBox--center boxTop1">
	<img src="<?php echo APP_URL; ?>img/top/img01.jpg" class="wow slideInLeft" alt="">
	<div class="textTop">
		<h2 class="heading_page"><?php echo ${'hTitleServices_'.$lang_web}; ?></h2>
		<h3 class="large_heading_page wow fadeInUp">Air Services</h3>
			<a href="<?php echo APP_URL; ?>services?type=air-services" class="btnMore"><div class="anim"></div><?php echo ${'btnMore_'.$lang_web}; ?></a>	
	</div>
</div>

<div class="flexBox flexBox--center boxTop1 boxTop2">
	<div class="textTop">
		<h2 class="heading_page"><?php echo ${'hTitleServices_'.$lang_web}; ?></h2>
		<h3 class="large_heading_page wow fadeInUp">Medical Tourism</h3>
	<a href="<?php echo APP_URL; ?>services?type=medical-tourism" class="btnMore"><div class="anim"></div><?php echo ${'btnMore_'.$lang_web}; ?></a>	
	</div>
	<img src="<?php echo APP_URL; ?>img/top/img02.jpg" class="wow slideInRight" alt="">
</div>

<?php 
			$wp_query = new WP_Query();
			$param = array (
			'posts_per_page' => '3',
			'post_type' => 'news',
			'post_status' => 'publish',
			'order' => 'DESC',
			'paged' => $paged,
			);
			$wp_query->query($param);
			if($wp_query->have_posts()): 
?>
<div class="boxTop3">
	<h2 class="heading_page heading_page--center">Latest News</h2>
		<ul class="lstNews">
			<?php	
				while($wp_query->have_posts()) :$wp_query->the_post();
				$image_pc = wp_get_attachment_image_src(get_field('image'),'full');
				$image_sp = wp_get_attachment_image_src(get_field('image_mobile'),'full');
			?>
			<li class="wow fadeInUp" data-wow-delay="0.3s">
				<div class="descNews">
					<p class="title"><a href="">EJA Hangar complex at Senai International Airport</a></p>
					<p class="info"><i class="fa fa-calendar-o" aria-hidden="true"></i><span>12 Feb 2014</span><i class="fa fa-user-o" aria-hidden="true"></i><span>Admin</span></p>
				</div>
				<p class="thumb"><img src="<?php echo APP_URL; ?>img/top/img03.jpg" alt=""></p>
			</li>
			<?php endwhile; ?>
			</ul>
	<a href="" class="btnMore"><div class="anim"></div>MORE</a>	
</div>
<?php endif; ?>

<!--Footer ==================================================
================================================== -->

<?php include(APP_PATH.'libs/footer.php'); ?>

<!-- End Document
================================================== -->
<script src="<?php echo APP_URL; ?>common/js/slick.js"></script>
<script>
$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 1100,
  autoplay: true,
  fade: true,
  autoplaySpeed: 3000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.slideLogo').slick({
  dots: true,
  infinite: true,
  speed: 1100,
  arrows:false,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});
</script>

</body>
</html>