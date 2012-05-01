<?php
  $incRoot = dirname(__FILE__) . '/custom/pages';
  $tplRoot = dirname(__FILE__) . '/custom/views/default';
  header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html xml:lang="fr" lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Mozilla Francophone :: à propos</title>
  <link rel="stylesheet" type="text/css" href="custom/style/mozfr.css" />
</head>
<body>
  <?php include($tplRoot.'/header.tpl.php'); ?>
  <div id="content">
    <?php include($incRoot.'/manifesto.inc.html'); ?>
  </div>
  <?php include($tplRoot.'/sidebar.tpl.php'); ?>
  <?php include($tplRoot.'/footer.tpl.php'); ?>
</body>
</html>

