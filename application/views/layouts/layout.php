<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>AskAway</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
	<header class="highlight">
		<h1><a href="<?php echo site_url(); ?>">Ask Away</a></h1>
		<ul class="nav">
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li><a href="<?php echo site_url('questions/listing'); ?>">Questions</a></li>
		</ul>
	</header>
	<div class="main">
		<?php $this->load->view($subview); ?>
	</div>
	<footer>
		&copy; <?php echo date('Y'); ?> AskAway
	</footer>
</div>

</body>
</html>