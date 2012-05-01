<div id="content">
  <?php if (0 == count($items)) : ?>
    <article>
      <h2>Aucun article</h2>
      <p class="article-content">No news, good news.</p>
    </article>
  <?php else : ?>
    <?php foreach ($items as $item): ?>
      <?php
        $arParsedUrl = parse_url($item->get_feed()->get_link());
        $host = preg_replace('/[^a-zA-Z]/i', '-', $arParsedUrl['host']);
      ?>
      <article class="<?php echo $host; ?>">
        <h2>
          <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
        </h2>
        <p class="info">
          <?php echo ($item->get_author()? $item->get_author()->get_name() : 'Anonymous'); ?>,
          <?php
            $ago = time() - $item->get_date('U');
            echo '<span id="post'.$item->get_date('U').'" class="date">'.$item->get_date('d/m/Y').'</span>';
          ?> | Source: <?php
            $feed = $item->get_feed();
            echo '<a href="'.$feed->getWebsite().'" class="source">'.$feed->getName().'</a>';
          ?>
        </p>
        <div class="content">
          <?php echo $item->get_content(); ?>
        </div>
      </article>
      <?php if (++$count == $limit) { break; } ?>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

