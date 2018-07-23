<?php /* Template Name: FAQ */ ?>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH.'libs/head.php');
?>
</head>
<body id="faq">
 
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div class="headSub">
	<h2 class="h2_subpage">faqs</h2>
</div>
<!--Footer ==================================================
================================================== -->

<div id="breadcum">
	<ul>
		<li><a href="<?php echo APP_URL; ?>">Home</a></li>
		<li>FAQs</li>
	</ul>
</div>

<div class="container">
	<div class="w900">
	<ul class="lstFaq">
		<?php 
			$faq = get_field('cf_list_faq');
			$count = count($faq);
			$col = ceil($count/2);
			while(has_sub_field('cf_list_faq')):
		?>
			<li>
				<p class="question"><?php echo get_sub_field('question'); ?></p>
				<div class="answer"><?php echo get_sub_field('answer'); ?></div>
			</li>
		<?php endwhile; ?>
	</ul>
	</div>
</div>


<?php include(APP_PATH.'libs/footer-sub.php'); ?>

<!-- End Document
================================================== -->
<script>
$(function() {
	$('.lstFaq li').click(function() {
		$(this).find('.answer').slideToggle(200);
		$(this).find('.question').toggleClass('open');
	});
});		
</script>
</body>
</html>