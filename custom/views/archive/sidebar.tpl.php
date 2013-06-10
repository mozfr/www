<?php
  $all_people = &$Planet->getPeople();
  usort($all_people, array('PlanetPerson', 'compare'));
?>
<div id="sidebar" class="aside">

  <div class="section" id="sidebar-people">
    <h2>Personnes (<?php echo count($all_people); ?>)</h2>
    <ul>
      <?php foreach ($all_people as $person) : ?>
      <li>
        <a href="<?php echo htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8'); ?>" title="Feed"><img src="postload.php?url=<?php echo urlencode(htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8')); ?>" alt="" height="12" width="12" /></a>
        <a href="<?php echo $person->getWebsite(); ?>" title="Website"><?php echo htmlspecialchars($person->getName(), ENT_QUOTES, 'UTF-8'); ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
    <p>
      <img src="custom/img/opml.png" alt="feed" height="12" width="12" />
      <a href="custom/people.opml">Tous les flux au format OPML</a>
    </p>
  </div>

  <div id="sidebar-syndicate" class="section">
    <h2>S'abonner</h2>
    <ul>
      <li><img src="custom/img/feed.png" alt="feed" height="12" width="12" />&nbsp;<a href="./atom.xml">Flux atom</a></li>
      <li><img src="custom/img/feed.png" alt="feed" height="12" width="12" />&nbsp;<a href="./rss.xml">Flux rss</a></li>
    </ul>
  </div>

  <div>
    <p>Powered by <a href="http://moonmoon.org/">moonmoon</a> |
    <a href="./admin/">Administration</a></p>
  </div>

</div>
