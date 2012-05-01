<?php
  $limit = $PlanetConfig->getMaxDisplay();
  $count = 0;
  header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html xml:lang="fr" lang="fr">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $PlanetConfig->getName(); ?></title>
  <link rel="stylesheet" type="text/css" href="custom/style/mozfr.css" />
  <link rel="alternate" type="application/atom+xml" title="atom" href="?type=atom10" />
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
</head>
<body>
  <?php include(dirname(__FILE__).'/header.tpl.php'); ?>
  <?php include(dirname(__FILE__).'/articles.tpl.php'); ?>
  <?php include(dirname(__FILE__).'/sidebar.tpl.php'); ?>
  <?php include(dirname(__FILE__).'/footer.tpl.php'); ?>
  <script src="app/js/mm.js" type="text/javascript"></script>
</body>
</html>
