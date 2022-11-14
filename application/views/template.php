<html>
	<head>
		<title>DELTA Gallery</title>
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
		<?php foreach ($styles as $style):?>
			<link rel = "stylesheet" type="text/css" media="all" href = "<?php echo URL::base()?>imagegallery/css/<?php echo $style; ?>"/>
		<?php endforeach;?>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<span class="myhead">Simple Image Gallery</span>
				<span class="mynav">
					<ul>
						<li><a href="/kohana/Home">Home</a></li>
						<li><a href="/kohana/Gallery">Gallery</a></li>
						<li><a href="/kohana/About">About</a></li><br/>
					</ul>
				</span>
			</div>
			<div class="alone"><?php echo $header; ?></div>
			<div class="content">
			<?= $content; ?>
			</div>
			<div id="footer" class="span12">
				Copyright &copy; 2014,
			<a href="mailto: delta@bcitxml.com">DELTA</a>
			</div>
	</body>			
</html>