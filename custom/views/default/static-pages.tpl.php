<!DOCTYPE html>
<html xml:lang="fr" lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Mozilla Francophone :: <?= $pageTitle ?></title>
  <link rel="stylesheet" type="text/css" href="./custom/style/mozfr.css" />
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
  <style>
/* Définitions */
dt {
  font-weight: bold;
}
/* Accodéon */
.accordion-panel {
  display: block;
  padding: 1em;
  overflow: hidden;
}
.accordion-panel h3 {
  width: 100%;
}
.accordion-panel h3 a {
  display: block;
  width: 100%;
  line-height: .5em;
  text-decoration: none;
  color: #333;
  font-size: 1.4em;
}
.accordion-panel:not(:target) h3 a:hover {
  color: #a11;
}
.accordion-panel:not(:target) h3 a {
  font-size: 1.2em;
}
.accordion-panel,
.accordion-panel h3 a {
  transition-property: font-size,height;
  transition-duration: 2s;
}
.accordion-panel:not(:target) {
  transition-property: height;
  transition-duration: 0s;
}
.accordion-panel p {padding-right: 110px; }

/* mozfr form */

#mozfr-form {
  padding:40px;
  margin-bottom:40px;
  -webkit-box-shadow:0 0 0 1px #fff inset;
  -moz-box-shadow:0 0 0 1px #fff inset;
  box-shadow:0 0 0 1px #fff inset;
  background:#fff;
  border-bottom:1px solid #ddd;
  zoom:1
}

#mozfr-form:after {
  display:block;
  visibility:hidden;
  height:0;
  clear:both;
  content:"."
}

#mozfr-form input[type="text"], #mozfr-form input[type="email"] {
  width: 200px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  #mozfr-form input[type="text"], #mozfr-form input[type="email"] {
    width: 110px;
  }
}

@media only screen and (max-width: 767px) {
  #mozfr-form input[type="text"], #mozfr-form input[type="email"] {
    width: 90%;
    margin: 5px 0;
  }
} 

  </style>
</head>
<body>
    <div id="wrapper">
        <?php include __DIR__ . '/header.tpl.php'; ?>
      <div id="content">
        <?php include __DIR__ . "/../../pages/{$page}.inc.html"; ?>
      </div>
    </div>
  <?php include __DIR__ . '/sidebar.tpl.php'; ?>
  <?php include __DIR__ . '/footer.tpl.php'; ?>
  <script type="text/javascript">
  // very basic document.getElementsByClassName polyfill
  if (!document.getElementsByClassName) {
    document.getElementsByClassName = function (el) {
      document.body.querySelectorAll('.'+el)
    };
  }
  var newStyle = document.createElement('style');
  newStyle.type = 'text/css';
  newStyle.innerHTML = '.accordion-panel:not(:target) h3 a:after { content: " (Cliquez pour plus de détails)"; font-size: 1rem; color: #a11; }';
  var panels = document.getElementsByClassName('accordion-panel');
  for(var i=0,im=panels.length;i<im;i++) {
    // set a height to enable transitions
    newStyle.innerHTML += '#' + panels[i].id + ' { height: ' + panels[i].scrollHeight + 'px; border-bottom: 2px dashed transparent; }' + "\n";
    newStyle.innerHTML += '#' + panels[i].id + ':not(:target) { height: 6em; border-bottom: 2px dashed #000; margin-bottom:1em; }';
    // make the whole div clickable
    panels[i].addEventListener(
      'click',
      function(event) {
        if(window.location.hash !== event.currentTarget.id) {
          window.location.hash = event.currentTarget.id;
        }
      }
    );
  }
  document.head.appendChild(newStyle);
  </script>
  <script src="custom/js/jquery-1.7.2.min.js" type="text/javascript"></script>
  <script src="mozfrtab/tabzilla.js"></script>
  <script src="custom/js/nav-main.js" type="text/javascript"></script>
</body>
</html>

