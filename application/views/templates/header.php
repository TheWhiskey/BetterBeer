<html>
	<head>
		<title>Better Beer</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
	</head>
	<body>
	
		
		<div class="header_menu">
		<?php echo anchor('beer','Beer Archive'); ?><br>
		<?php echo anchor('beer/create','Beer create'); ?><br>
		<?php echo anchor('rating','Ratings archive'); ?><br>
		<?php echo anchor('rating/create','Rating create'); ?><br>
		</div>
		<h2><?php echo $title; ?></h2>
		