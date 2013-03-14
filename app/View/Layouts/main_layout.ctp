<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Ratchet template page</title>

	<!-- Sets initial viewport load and disables zooming  -->
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Set Apple icons for when prototype is saved to home screen -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/touch-icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/touch-icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="./img/touch-icons/apple-touch-icon-57x57.png">

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('ratchet.css');
		echo $this->Html->script('http://code.jquery.com/jquery-1.9.1.min.js');
		echo $this->Html->script('ratchet.js');
	?>

	<!-- Intro paragraph styles. Delete once you start using this page -->
	<style type="text/css">
	    .welcome {
	      line-height: 1.5;
	      color: #555;
	    }
	</style>

	</head>
	<body>

		<!-- Make sure all your bars are the first things in your <body> -->
		<header class="bar-title">
			<h1 class="title">Ratchet</h1>
		</header>

		<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content">

	  		<?php echo $this->fetch('content'); ?>

		  	<nav class="bar-tab">
		    <ul class="tab-inner">
					<li class="tab-item active">
						<?php echo $this->Html->image('icon/home.png', array('class' => 'tab-icon', 'alt' => '')); ?>
						<div class="tab-label">HOME</div>
					</li>
					<li class="tab-item">
						<?php echo $this->Html->image('icon/customers.png', array('class' => 'tab-icon', 'alt' => '')); ?>
						<div class="tab-label">GROUP</div>
					</li>
					<li class="tab-item">
						<?php echo $this->Html->image('icon/headphones.png', array('class' => 'tab-icon', 'alt' => '')); ?>
						<div class="tab-label">MY PAGE</div>
					</li>
					<li class="tab-item">
						<?php echo $this->Html->image('icon/headphones.png', array('class' => 'tab-icon', 'alt' => '')); ?>
						<div class="tab-label">test</div>
					</li>
					<li class="tab-item">
						<?php echo $this->Html->image('icon/settings.png', array('class' => 'tab-icon', 'alt' => '')); ?>
						<div class="tab-label">SETTING</div>
					</li>
				</ul>
			</nav>

			<?php echo $this->element('sql_dump'); ?>

		</div>

	</body>
</html>