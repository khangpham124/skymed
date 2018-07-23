<?php /* Template Name: Services */ ?>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/app_config.php");
include(APP_PATH.'libs/head.php');
?>
</head>
<body id="services">
 
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div class="headSub">
	<h2 class="h2_subpage"><?php echo ${'txt_services_'.$lang_web}; ?></h2>
</div>
<!--Footer ==================================================
================================================== -->

<div id="breadcum">
	<ul>
		<li><a href="<?php echo APP_URL; ?>"><?php echo ${'txt_home_'.$lang_web}; ?></a></li>
		<li><?php echo ${'txt_services_'.$lang_web}; ?></li>
	</ul>
</div>

<div class="container">
	<div class="flexBox flexBox--between companyBox  companyBox--nobd noneFlex">
		<div class="tabBox">
			<ul class="listTab">
				<li id="service1"><a href="javascript:void(0)" data-attribute="1"><?php echo ${'tab_overall_'.$lang_web}; ?></a></li>
				<li id="service2"><a href="javascript:void(0)" class="hasChild"><?php echo ${'tab_air_'.$lang_web}; ?></a>
					<ul class="subList">
						<li><a href="javascript:void(0)" data-attribute="4"><img src="<?php echo APP_URL; ?>img/subpage/icon_about01.svg" alt=""><?php echo ${'tab_ambulance_'.$lang_web}; ?></a></li>
						<li><a href="javascript:void(0)" data-attribute="5"><img src="<?php echo APP_URL; ?>img/subpage/icon_about01.svg" alt=""><?php echo ${'tab_escort_'.$lang_web}; ?></a></li>
						<li><a href="javascript:void(0)" data-attribute="6"><img src="<?php echo APP_URL; ?>img/subpage/icon_about01.svg" alt=""><?php echo ${'tab_organ_'.$lang_web}; ?></a></li>
					</ul>
				</li>
				<li id="service3"><a href="javascript:void(0)" data-attribute="3"><?php echo ${'tab_tour_'.$lang_web}; ?></a></li>
			</ul>
		</div>
		<div class="tabContent">
			<div id="tab1" class="tabInner">
				<?php while(has_sub_field('overall_content')): 
				$image_over = wp_get_attachment_image_src(get_sub_field('image'),'full');
				?>
				<h4 class="h4_about"><?php echo get_sub_field('title'); ?></h4>
				<div class="servicesDesc flexBox  flexBox--between noneFlex">
					<div class="servicesDesc--left">
						<div class="servicesDesc--text"><?php echo get_sub_field('content'); ?></div>
						<ul class="servicesDesc--list flexBox  flexBox--between flexBox--wrap">
							<?php while(has_sub_field('list')): ?>
								<li><?php echo get_sub_field('title'); ?></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<p class="imgServices"><img src="<?php echo thumbCrop($image_over[0],440,580); ?>" class="imgMax" alt=""></p>
				</div>
				<?php endwhile; ?>
				
				<?php include(APP_PATH.'libs/contactBox.php'); ?>

			</div>
			<!-- End tab1 -->

			
			<!-- End tab1 -->
			<div id="tab3" class="tabInner">
				<?php while(has_sub_field('medial_content')): ?>
					<h4 class="h4_about h4Medical"><?php echo get_sub_field('title'); ?></h4>
					<div class="textService txtMedical"><?php echo get_sub_field('content'); ?>
						<div class="textTocontact">
							<a href="#contactBox">
							<span>Contact us now to learn more</span> about our treatment services and to arrange and a confidential assessment. Fill out the short form here, or call us directly to start your journey to recovery now.
							</a>
						</div>
					</div>
				<?php endwhile; ?>	
				<div id="contactBox"></div>
				<?php include(APP_PATH.'libs/contactBox.php'); ?>
			</div>
			<?php 
			$i=3;
			while(has_sub_field('air_content')):
			$image_air = wp_get_attachment_image_src(get_sub_field('image'),'full');
			$i++;
			?>
			<div id="tab<?php echo $i; ?>" class="tabInner">
				<h4 class="sub_h4"><img src="<?php echo APP_URL; ?>img/subpage/icon_about01.svg" alt=""><span><?php echo get_sub_field('title'); ?></span></h4>
				<img src="<?php echo $image_air[0]; ?>" alt="">
				<div class="textAbout"><?php echo get_sub_field('content'); ?></div>
				<?php include(APP_PATH.'libs/contactBox.php'); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>	
</div>


<div class="pop_overlay"></div>
<div class="popup" id="">
	<p class="btnClose"><img src="<?php echo APP_URL; ?>img/subpage/btnClose_w.svg" class="imgMax" alt=""></p>
	<h3><?php echo ${'title_form_'.$lang_web}; ?></h3>			
	<form class="formBlock" id="ajaxform" action="http://www.skymedasia.com/mailer/">
		<div class="flexBox flexBox--between">
			<input type="text" class="inputText" placeholder="<?php echo ${'phName_'.$lang_web}; ?>" name="form_name" require>
			<input type="email" class="inputText" placeholder="<?php echo ${'phMail_'.$lang_web}; ?>" name="form_mail" require>
		</div>
		<input type="text" class="inputText inputText_100" placeholder="<?php echo ${'phPhone_'.$lang_web}; ?>" name="form_phone">
		<div class="wrapSelect">
			<select name="services" require>
				<option><?php echo ${'txt_sl_'.$lang_web}; ?></option>
				<option value="<?php echo ${'tab_ambulance_'.$lang_web} ?>"><?php echo ${'tab_ambulance_'.$lang_web} ?></option>
				<option value="<?php echo ${'tab_escort_'.$lang_web} ?>"><?php echo ${'tab_escort_'.$lang_web} ?></option>
				<option value="<?php echo ${'tab_organ_'.$lang_web} ?>"><?php echo ${'tab_organ_'.$lang_web} ?></option>
				<option value="N - Pain technology">N - Pain technology</option>
				<option value="Cosmetic Surgery">Cosmetic Surgery</option>
				<option value="Medical check up">Medical check up</option>
				<option value="Male & Female Sexual Functional Health Care">Male & Female Sexual Functional Health Care</option>
				<option value="Drug addiction treatment">Drug addiction treatment</option>
			</select>
		</div>
		<textarea placeholder="<?php echo ${'phMess_'.$lang_web}; ?>" name="form_mess"></textarea>
		<input type="submit" class="submitForm" id="simple-post" value="<?php echo ${'btnSend_'.$lang_web}; ?>">
		<input type="hidden" name="action" value="send">
    </form>
    <p id="simple-msg"></p>
</div>	
<?php include(APP_PATH.'libs/footer-sub.php'); ?>
<script type="text/javascript">
	$(function() {
		<?php 
		$type = $_GET['type'];
		if($type=='air-services') {
		?>
		$('#tab4').show();
		$('.subList').show();
		$('.listTab li').removeClass('active');
		$('#service2').addClass('active');
		<?php } ?>
		<?php if($type=='medical-tourism') { ?>
		$('#tab3').show();
		$('.listTab li').removeClass('active');
		$('#service3').addClass('active');
		<?php } ?>
		<?php if($type=='') { ?>
		$('#tab1').show();
		$('.listTab li:first-child').addClass('active');
		<?php } ?>
		$('.listTab li a').click(function(){
			if ($(this).hasClass("hasChild")) {
				$('.subList').slideToggle(200);
			} else {
				var id_show = $(this).attr('data-attribute');
				$('.tabInner').fadeOut(200);
				$('#tab' + id_show).fadeIn(200);
				$('.listTab li').removeClass('active');
				$(this).parent().addClass('active');
				var par = $(this).parent().parent();
				if(par.hasClass("subList")) {
					console.log('no-action');
				} else {
					$('.subList').slideUp(200);
				}
			}
		});	
	});	
</script>

<script>
$(document).ready(function()
{

$("#simple-post").click(function()
{
	$("#ajaxform").submit(function(e)
	{
		$("#simple-msg").html("<p class='taC'><img src='http://www.skymedasia.com/common/img/footer/loading.gif'/></p>");
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
			//$("#name").value='';	 
            window.location.href = '<?php echo APP_URL; ?>success';
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#simple-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
			}
		});
	    e.preventDefault();	//STOP default action
	    e.unbind();
	});
		
	//$("#ajaxform").submit(); //SUBMIT FORM
});

$('.h4Medical').click(function(){
	$(this).next('.txtMedical').slideToggle(200);
});	
});
</script>


<!-- End Document
================================================== -->
</body>
</html>