<?php
	$web['base'] = base_url();
	
	$html_class = (!empty($html_class)) ? $html_class : 'app';
?>
<!DOCTYPE html>
<html lang="en" class="<?php echo $html_class; ?>">
<head>
	<meta charset="utf-8" />
	<title>Notebook | Web Application</title>
	<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<link rel="stylesheet" href="static/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="static/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="static/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="static/css/font.css" type="text/css" />
	<link rel="stylesheet" href="static/js/calendar/bootstrap_calendar.css" type="text/css" />
	<link rel="stylesheet" href="static/css/app.css" type="text/css" />
	
	<script type="text/javascript">var web = <?php echo json_encode($web); ?></script>
	<!--[if lt IE 9]>
	<script src="static/js/ie/html5shiv.js" cache="false"></script>
	<script src="static/js/ie/respond.min.js" cache="false"></script>
	<script src="static/js/ie/excanvas.js" cache="false"></script>
	<![endif]-->
</head>