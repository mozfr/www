<?php
  $limit = $PlanetConfig->getMaxDisplay();
  $count = 0;
  header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html xml:lang="fr" lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo $PlanetConfig->getName(); ?></title>
  <link rel="stylesheet" type="text/css" href="custom/style/mozfr.css" />
  <link rel="alternate" type="application/atom+xml" title="atom" href="./atom.xml" />
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico?v=3" />
</head>
<body>
  <div id="wrapper">
  <?php include(dirname(__FILE__).'/header.tpl.php'); ?>
  <?php include(dirname(__FILE__).'/articles.tpl.php'); ?>
  <?php include(dirname(__FILE__).'/sidebar.tpl.php'); ?>
  </div> <!-- #wrapper -->
  <?php include(dirname(__FILE__).'/footer.tpl.php'); ?>
  <script src="custom/js/jquery-1.7.2.min.js" type="text/javascript"></script>
  <script src="mozfrtab/tabzilla.js"></script>
  <script src="custom/js/nav-main.js" type="text/javascript"></script>
  <!--[if !(lt IE 8)]><!-->
   <script type="text/javascript">
     (function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src=document.location.protocol+"//d1agz031tafz8n.cloudfront.net/thedaywefightback.js/widget.min.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})()
   </script>
  <!--<![endif]-->
</body>
</html>
