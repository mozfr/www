<div id="content">
  <?php if (0 == count($items)) : ?>
    <article>
      <h2>Aucun article</h2>
      <p class="article-content">No news, good news.</p>
    </article>
  <?php endif; ?>

  <?php if (count($today)): ?>
    <article>
      <h2>Aujourd’hui</h2>
      <ul>
      <?php foreach ($today as $item): ?>
        <?php $feed = $item->get_feed(); ?>
        <li>
          <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
          <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
        </li>
      <?php endforeach; ?>
      </ul>
    </article>
  <?php endif; ?>

  <?php if (count($week)): ?>
    <article>
      <h2>Cette semaine</h2>
      <ul>
      <?php foreach ($week as $item): ?>
        <?php $feed = $item->get_feed(); ?>
        <li>
          <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
          <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
        </li>
      <?php endforeach; ?>
      </ul>
    </article>
  <?php endif; ?>

  <?php if (count($month)): ?>
    <article>
      <h2>Ce mois</h2>
      <ul>
      <?php foreach ($month as $item): ?>
        <?php $feed = $item->get_feed(); ?>
        <li>
          <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
          <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
        </li>
      <?php endforeach; ?>
      </ul>
    </article>
  <?php endif; ?>

  <?php if (count($older)): ?>
    <article>
      <h2>Anciens articles</h2>
      <ul>
      <?php foreach ($older as $item): ?>
        <?php $feed = $item->get_feed(); ?>
        <li>
          <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
          <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
        </li>
      <?php endforeach; ?>
      </ul>
    </article>
  <?php endif; ?>
</div>

