<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE ?>">

	<head>

		<?php Loader::element('header_required'); ?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo $this->getThemePath(); ?>/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="container">

			<div id="header" class ="col-sm-12">
				<?php
				$a = new GlobalArea('Site Name');
				$a->display();
				?>
			</div>

			<div id="header-nav" class="col-sm-12 container">
				<?php
				$a = new GlobalArea('Header Nav');
				$a->display();
				?>
			</div>

			<div id="header-image" class="col-sm-12 container">
				<?php
				$a = new Area('Header Image');
				$a->display($c);
				?>
			</div>