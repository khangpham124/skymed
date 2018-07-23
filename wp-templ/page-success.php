
<?php /* Template Name: Success */ ?>
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
	<h2 class="h2_subpage">Thank you</h2>
</div>
<!--Footer ==================================================
================================================== -->

<div id="breadcum">
	<ul>
		<li><a href="<?php echo APP_URL; ?>">Home</a></li>
		<li>Success</li>
	</ul>
</div>

<div class="container w750">
	<h3 class="h3_safety">Thanks for your request! We are going to handle it/them very soon</h3>
	<p class="imgSafety"><img src="<?php echo APP_URL; ?>img/subpage/img_safety.jpg" alt=""></p>
	<a href="<?php echo APP_URL; ?>" class="btnBack"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back to top</a>
</div>


<?php include(APP_PATH.'libs/footer-sub.php'); ?>

<!-- End Document
================================================== -->
</body>
</html>