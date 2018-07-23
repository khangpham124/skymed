<?php /* Template Name: Safety */ ?>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH.'libs/head.php');
?>
</head>
<body id="safety">
 
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div class="headSub">
	<h2 class="h2_subpage"><?php echo ${'txt_safety_'.$lang_web}; ?></h2>
</div>
<!--Footer ==================================================
================================================== -->

<div id="breadcum">
	<ul>
		<li><a href="<?php echo APP_URL; ?>"><?php echo ${'txt_home_'.$lang_web}; ?></a></li>
		<li><?php echo ${'txt_safety_'.$lang_web}; ?></li>
	</ul>
</div>

<div class="container w750">
	<h3 class="h3_safety">Safety First - No compromise ! </h3>
	<p class="imgSafety"><img src="<?php echo APP_URL; ?>img/subpage/img_safety.jpg" alt=""></p>
	<div class="txtSafety"><?php echo $post->post_content; ?></div>
</div>


<?php include(APP_PATH.'libs/footer-sub.php'); ?>

<!-- End Document
================================================== -->
</body>
</html>