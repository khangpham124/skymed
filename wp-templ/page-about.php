<?php /* Template Name: About */ ?>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/slick.css">
</head>
<body id="about">
 
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div class="headSub">
	<h2 class="h2_subpage"><?php echo ${'txt_about_'.$lang_web}; ?></h2>
</div>
<!--Footer ==================================================
================================================== -->

<div id="breadcum">
	<ul>
		<li><a href="<?php echo APP_URL; ?>"><?php echo ${'txt_home_'.$lang_web}; ?></a></li>
		<li><?php echo ${'txt_about_'.$lang_web}; ?></li>
	</ul>
</div>

<div class="container">
	<div class="flexBox flexBox--between noneFlex">
		<h3 class="h3_about">
		<?php echo get_field('title_page'); ?>
		</h3>
		<div class="txtAbout"><?php echo $post->post_content; ?></div>
	</div>

	<ul class="listIconAbout flexBox flexBox--between flexBox--wrap">
		<?php 
			$i=0;
			while(has_sub_field('cf_list_about')):
			$i++;
			if($i%4==0) {$ul='</ul><ul class="listIconAbout flexBox flexBox--between flexBox--wrap">';} else {$ul='';}
			$icon = wp_get_attachment_image_src(get_sub_field('icon'),'full');
		?>
			<li class="wow fadeInUp" data-wow-delay="0.2s">
				<img src="<?php echo thumbCrop($icon[0],65,65); ?>" alt="">
				<p><?php echo get_sub_field('name') ?></p>
			</li>
			<?php echo $ul; ?>
		<?php endwhile; ?>
	</ul>

	<div class="flexBox flexBox--between companyBox noneFlex">
		<div class="tabBox">
			<ul class="listTab">
				<li><a href="javascript:void(0)" data-attribute="1"><?php echo ${'tab_companyInfo_'.$lang_web}; ?></a></li>
				<li><a href="javascript:void(0)" data-attribute="2"><?php echo ${'tab_medical_'.$lang_web}; ?></a></li>
				<li><a href="javascript:void(0)" data-attribute="3"><?php echo ${'tab_air_'.$lang_web}; ?></a>
					<!-- <ul class="subList">
						<li><a href="javascript:void(0)" data-attribute="3"><img src="<?php echo APP_URL; ?>img/subpage/icon_about01.svg" alt="">Cessna Citation Mustang Model 510</a></li>
						<li><a href="javascript:void(0)" data-attribute="4"><img src="<?php echo APP_URL; ?>img/subpage/icon_about01.svg" alt="">Hawker 800B</a></li>
					</ul> -->
				</li>
			</ul>
		</div>
		<div class="tabContent">
			<div id="tab1" class="tabInner">
				<h4 class="h4_about"><?php echo ${'h4_mile_'.$lang_web}; ?></h4>
				<ul class="listMilestone">
					<?php 
						$i=3;
						while(has_sub_field('cf_milestone')):
						$i++;
					?>
					<li class="wow fadeInUp" data-wow-delay="0.<?php echo $i; ?>s"><span><?php echo get_sub_field('year'); ?></span><div><?php echo get_sub_field('action'); ?></div></li>
					<?php endwhile; ?>
				</ul>
				<h4 class="h4_about"><?php echo ${'h4_loc_'.$lang_web}; ?></h4>
				<ul class="listLocate flexBox flexBox--between">
					<?php while(has_sub_field('cf_location')):
						$image_flag = wp_get_attachment_image_src(get_sub_field('flag'),'full');
						?>
						<li>
							<p class="name"><img src="<?php echo thumbCrop($image_flag[0],44,30); ?>" alt=""><?php echo get_sub_field('country');  ?></p>
							<div class="desc"><?php echo get_sub_field('info');  ?></div>
						</li>
					<?php endwhile; ?>
				</ul>

				<h4 class="h4_about"><?php echo ${'h4_exp_'.$lang_web}; ?></h4>	
				<ul class="flexBox listTeam flexBox--center flexBox--between flexBox--wrap">
					<?php 
						while(has_sub_field('cf_expert')):
						$image_ex = wp_get_attachment_image_src(get_sub_field('img'),'full');
					?>	
						<li>
							<p class="thumb"><img src="<?php echo thumbCrop($image_ex[0],300,353); ?>" class="imgMax" alt=""></p>
							<div class="desc">
								<p class="name"><?php echo get_sub_field('name');  ?></p>
								<p class="sub"><?php echo get_sub_field('position');  ?></p>
							</div>
							<a href="javascript:void(0)" class="btnMore" data-attribute="<?php if(get_sub_field('position')=="CEO") { ?>p_ceo<?php } else {?>p_dr<?php } ?>">
							<div class="anim"></div><?php echo ${'btnMore_'.$lang_web}; ?></a>
						</li>
					<?php endwhile; ?>	
				</ul>

			</div>
			<!-- End tab1 -->

			<div id="tab2" class="tabInner">
				<ul class="medicalTeam">
					<?php 
						while(has_sub_field('cf_image_medical')):
						$image = wp_get_attachment_image_src(get_sub_field('image'),'full');
					?>	
						<li><img src="<?php echo thumbCrop($image[0],750,500); ?>" alt=""></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<!-- End tab2 -->
			<div id="tab3" class="tabInner">
				<ul class="listPlane">
				<?php
					$wp_query = new WP_Query();
					$param = array (
					'post_type' => 'air',
					'posts_per_page' => '-1',
					'post_status' => 'publish',
					'order' => 'DESC',
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
				<?php endwhile;endif; ?>	
				</ul>
			</div>
			<!-- End tab3 -->
		</div>
	</div>	
</div>

<?php wp_reset_query(); ?>
<div class="pop_overlay"></div>
<?php while(has_sub_field('cf_expert')):
	$image_ex = wp_get_attachment_image_src(get_sub_field('img'),'full');
	?>
	<div class="popup" id="<?php if(get_sub_field('position')=='CEO') { ?>p_ceo<?php } else { ?>p_dr<?php } ?>">
	<p class="btnClose"><img src="<?php echo APP_URL; ?>img/subpage/btnClose.svg" class="imgMax" alt=""></p>
	<div class="flexBox flexBox--between flexBox--center headPopup">
		<p class="thumb"><img src="<?php echo thumbCrop($image_ex[0],300,353); ?>" class="imgMax" alt=""></p>
		<div class="desc">
			<p class="name"><?php echo get_sub_field('name') ?></p>
			<p class="sub"><?php echo get_sub_field('position'); ?></p>
			<div class="note"><?php echo get_sub_field('description'); ?></div>
		</div>
	</div>
	<table class="infoGuy">
		<tr>
			<th><p class="text">Education</p></th>
			<td><?php echo get_sub_field('education'); ?></td>
		</tr>

		<tr>
			<th><p class="text">Career</p></th>
			<td><?php echo get_sub_field('career'); ?></td>
		</tr>

		<tr>
			<th><p class="text">Job history</p></th>
			<td><?php echo get_sub_field('job_history'); ?></td>
		</tr>
	</table>
</div>
<?php endwhile; ?>


<?php include(APP_PATH.'libs/footer-sub.php'); ?>

<script type="text/javascript">
	$(function() {
		$('#tab1').show();
		$('.listTab li:first-child').addClass('active');
		$('.listTab li a').click(function() {
			if ($(this).hasClass("hasChild")) {
				$('.subList').slideToggle(200);
			} else {
				var id_show = $(this).attr('data-attribute');
				$('.tabInner').fadeOut(200);
				$('#tab' + id_show).fadeIn(200);
				$('.listTab li').removeClass('active');
				$(this).parent().addClass('active');
				// $('.subList').slideUp(200);
			}
		});	
	});	
</script>

<script src="<?php echo APP_URL; ?>common/js/slick.js"></script>
<script>
$('.medicalTeam').slick({
  dots: false,
  infinite: true,
  speed: 800,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 1,
  slidesToScroll: 1,
});
</script>


<!-- End Document
================================================== -->
</body>
</html>