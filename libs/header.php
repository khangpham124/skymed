<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
<div id="header">		
	<div class="headerInner flexBox flexBox--between flexBox--center">
		<p id="logo"><a href="<?php echo APP_URL; ?>"><img src="<?php echo APP_URL; ?>common/img/header/logo.png" alt=""></a></p>
		<div class="rightHead flexBox flexBox--between flexBox--center">
			<div class="contactHead flexBox flexBox--center onlypc">
				<p class="p1">
					<span><?php echo ${'textPhone_'.$lang_web}; ?></span>
					<i class="fa fa-phone" aria-hidden="true"></i><em><?php echo $phoneNumb;  ?></em>
				</p>
				<a href="<?php echo APP_URL; ?>#footerWrap" class="p3"><i class="fa fa-envelope" aria-hidden="true"></i>Quick quote</a>
			</div>

			<div class="sp">
				<p class="phoneBtn"><a href="tel:<?php echo $phoneNumb; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a></p>
				<p class="mailBtn"><a href="<?php echo APP_URL; ?>#footerWrap"><i class="fa fa-envelope" aria-hidden="true"></i></a></p>
			</div>

			<?php if ( is_user_logged_in() ) { ?>
				<div class="langBar">
					<p id="curr_lang">
						<?php if(!isset($_COOKIE['lang_web'])) { ?>
						<a href="javascript:void(0)" data-attribute="eng"><img src="<?php echo APP_URL; ?>img/subpage/icon_eng.jpg" alt=""></a>
						<?php } else { ?>
						<a href="javascript:void(0)" data-attribute="<?php echo $lang_web; ?>"><img src="<?php echo APP_URL; ?>img/subpage/icon_<?php echo $lang_web; ?>.jpg" alt=""></a>
						<?php } ?>	
					</p>
					<div class="allLang">
						<?php 
							$lang_arr = array('eng','thai','viet','china');
							$curr_lang = array_search($_COOKIE['lang_web'],$lang_arr);
							unset($lang_arr[$curr_lang]);
							foreach($lang_arr as $lng) {
						?>
							<p><a href="javascript:void(0)" data-attribute="<?php echo $lng ?>"><img src="<?php echo APP_URL; ?>img/subpage/icon_<?php echo $lng ?>.jpg" alt=""></a></p>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			<button class="hamburger hamburger--collapse" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>	
	</div>
</div>

<div class="wrapMenu">
	<ul class="gNavi">
		<?php
			$menulist = ${'menu_list_'.$lang_web}; 
			foreach($menulist as $menus => $link) { 
		?>						
		<li><a href="<?php echo APP_URL; ?><?php echo $link; ?>"><?php echo $menus; ?></a></li>
		<?php } ?>
	</ul>	
</div>