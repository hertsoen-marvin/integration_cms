<!DOCTYPE html>
<?php $path =  $view->getThemePath(); ?>
<html>
	<head>
		<?php Loader::element('header_required'); ?>

		<link rel="stylesheet" href="<?php echo $path?>/css/bootstrap.min.css"></script>
		<link rel="stylesheet" href="<?php echo $path?>/css/style.css"></script>

	</head>
	<body>

	<!------------------------------------------------------ Barre de navigation / HEADER --------------------------------------------->

		<div class='container'>
			<div class = 'row'>
				<div class = 'col-md-2'>
					<h3 class='m_titre'> Factorian</h3>
				</div>
				<div class = 'col-md-10 m_nav_bar pull-right'>
					<?php
						$a = new Area("autonav");
						$a->display($c);
					?>
				</div>
			</div>
		</div>
