<?php echo('<?xml version="1.0" encoding="UTF-8"?>'); ?>
<?php
	if(!isset($_COOKIE['lang_web'])) {
		$lang_web = 'eng';
	} else {
		$lang_web = $_COOKIE['lang_web'];
	}
	$post_info = get_post( 114 );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--responsive or smartphone-->
<?php
	// set viewport by user agent.
	require_once 'ua.class.php';
	$ua = new UserAgent();
	if($ua->set() === 'tablet') :
		// set width when you use the tablet
		$width = '1024px';
?>
<meta content="width=<?php echo $width; ?>" name="viewport">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php endif; ?>
<!--responsive or smartphone-->

<!--responsive or smartphone-->
<?php include(APP_PATH.'libs/argument.php');  ?>
<title><?php echo $titlepage?></title>
<meta name="description" content="<?php echo $desPage; ?>">
<meta name="keywords" content="<?php echo $keyPage; ?>" />

<!--facebook-->
<meta property="og:title" content="<?php echo $titlepage?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<? echo 'http://';echo $_SERVER["SERVER_NAME"];echo $_SERVER["SCRIPT_NAME"];echo $_SERVER["QUERY_STRING"];?>">
<meta property="og:image" content="<?php echo APP_URL;?>common/img/other/og_img.jpg">
<meta property="og:site_name" content="">
<meta property="og:description" content="<?php echo $desPage; ?>" />
<!--/facebook-->

<!--css-->
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/base.css">
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/style.css">
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/media.css">
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/animate.css">
<link rel="stylesheet" href="<?php echo APP_URL;?>common/css/hamburgers.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--/css-->

<!-- Favicons ==================================================-->
<link rel="icon" href="<?php echo APP_URL;?>common/img/icon/favicon.ico" type="image/vnd.microsoft.icon" />

<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

