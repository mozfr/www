<?php
  $incRoot = dirname(__FILE__) . '/custom/pages';
  $tplRoot = dirname(__FILE__) . '/custom/views/default';
  header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html xml:lang="fr" lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Mozilla Francophone :: à propos</title>
  <link rel="stylesheet" type="text/css" href="custom/style/mozfr.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
</head>
<body>
  <div id="wrapper">
    <?php include($tplRoot.'/header.tpl.php'); ?>
    <div id="content">
    <?php include($incRoot.'/manifesto.inc.html'); ?>
    </div>
  </div>
  <?php include($tplRoot.'/sidebar.tpl.php'); ?>
  <?php include($tplRoot.'/footer.tpl.php'); ?>
  <script src="mozfrtab/tabzilla.js"></script>
  <script src="custom/js/nav-main.js" type="text/javascript"></script>
  <script src="app/js/mm.js" type="text/javascript"></script>
</body>
</html>

