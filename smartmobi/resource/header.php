<link rel="stylesheet" type="text/css" href='<?php url_for("/css/header.css"); ?> '>

<nav class="row" id="navbar">
	<div class="container9">
		<div class="col-2"><a href="<?php url_for('index.php'); ?>"><img src="<?php WWW_ROOT.'/images/logoSmartMobi.png' ?>" id="logo"></a></div>
		<div class="col-8 nav-link">
			<span <?php if(getPageName() === 'index.php')
			echo 'class="active"'?>><a href="<?php url_for('index.php');?>">HOME</a></span>
			<span <?php //if(getPageName().'#about' === 'index.php#about')
			//echo 'class="active"'?>><a href="<?php url_for('index.php#about'); ?>">ABOUT US</a></span>
			<span><a href="<?php url_for('index.php#contact'); ?>">CONTACT US</a></span>
			<span <?php if(getPageName() === 'complain.php')
			echo 'class="active"'?>><a href="<?php url_for('complain.php'); ?>">COMPLAIN</a></span>
			<span <?php if(getPageName() === 'feedback.php')
			echo 'class="active"'?>><a href="<?php url_for('feedback.php'); ?>">FEEDBACK</a></span>
			<span <?php if(getPageName() === 'track.php')
			echo 'class="active"'?>><a href="<?php url_for('track.php'); ?>">TRACK</a></span>
			<?php getPageUrl();?>
		</div>
		<div class="col-2 nav-btn">
			<a href="signup.php"><input class="btn" type="button" name="signup" value="SIGN UP"></a>
			<a href="login.php"><input class="btn" type="button" name="login" value="LOGIN"></a>
		</div>
	</div>

<script type="text/javascript" src="./js/navb.js"></script>
</nav>
