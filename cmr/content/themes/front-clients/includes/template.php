<!DOCTYPE html>
<html lang="es">
	<head>
		<?php $site->getHeadGlobal(); ?>
		<?php $session->getHeadTheme(); ?>
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<?php $session->getContentRoute(); ?>
	</body>
</html>