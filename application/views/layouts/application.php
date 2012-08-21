<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo isset($title) ? $title: 'Dealer Central';?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php echo css('bootstrap.css');?>
		<?php echo css('bootstrap-responsive.css');?>
		<?php //echo css('style.css');?>
		<?php //echo css('dealercentral.css');?>
	
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--- Le fav icons -->
	</head>
	
	<body>
		<?php echo isset($yield_header) ? $yield_header: '';?>
		
		<div class="container-fluid">
			<?php echo isset($yield) ? $yield: '';?>
			<hr>
			<?php echo isset($yield_footer) ? $yield_footer: '';?>
		</div><!-- /.container-fluid -->
	</body>
</html>