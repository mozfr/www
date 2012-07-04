<?php
  $incRoot = dirname(__FILE__) . '/custom/pages';
  $tplRoot = dirname(__FILE__) . '/custom/views/default';
  header('Content-type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html xml:lang="fr" lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Mozilla Francophone :: Participer</title>
  <link rel="stylesheet" type="text/css" href="custom/style/mozfr.css" />
  <link rel="stylesheet" type="text/css" href="custom/style/tabzilla.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
</head>

<body>

<div id="meta-wrap">
    <div id="wrapper">
		<?php include($tplRoot.'/header.tpl.php'); ?>
		<div id="content">
			<?php include($incRoot.'/contrib.inc.html'); ?>
		</div>
		<?php include($tplRoot.'/sidebar.tpl.php'); ?>
		<?php include($tplRoot.'/footer.tpl.php'); ?>
	</div>
</div>

<script src="app/js/tabzilla.js" type="text/javascript"></script>
	
</body>
</html>

