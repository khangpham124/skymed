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
		<li><a href="<?php echo APP_URL; ?>">Home</a></li>
		<li><a href="<?php echo APP_URL; ?>air-ambulance-fleet/">Air Ambulance Fleet</a></li>
		<li><?php the_title(); ?></li>
	</ul>
</div>

<div class="mainPlane">
	<h2><?php the_title(); ?></h2>
	<h3><?php the_field('cf_serial'); ?></h3>
</div>

<div class="container">
	<?php 
		$thumb_img = get_post_thumbnail_id($post->ID);
		$thumb_url = wp_get_attachment_image_src($thumb_img,'full');
	?>
	<p class="imgPlane"><img src="<?php echo $thumb_url[0]; ?>" alt=""></p>
	<div class="descAir"><?php echo $post->post_content; ?></div>
	<div class="tech_parameter">
		<table>
			<?php while(has_sub_field('info')): ?>
			<tr>
				<th><?php echo get_sub_field('name'); ?></th>
				<td><?php echo get_sub_field('info'); ?></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</div>
	<div class="listImagePlane clearfix">
		<?php while(has_sub_field('image')): 
		$image = wp_get_attachment_image_src(get_sub_field('img'),'full');
		?>
			<img src="<?php echo thumbCrop($image[0],545,380); ?>" alt="">
		<?php endwhile; ?>
	</div>
</div>


<?php include(APP_PATH.'libs/footer-sub.php'); ?>


<!-- End Document
================================================== -->
</body>
</html>