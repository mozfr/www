<?php setlocale(LC_TIME, 'fr_FR'); ?>
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
        $feed = $item->get_feed();
      ?>
      <article class="<?php echo $host; ?>">
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php echo $item->get_permalink(); ?>" title="Se rendre sur l'article original"><?php echo $item->get_title(); ?></a></h2>
          <p class="entry-posted">
            <time class="published" title="<?php echo $item->get_date('U');?>" datetime="<?php echo $item->get_date('U');?>">
              <span class="posted-date"><?php echo $item->get_date('d'); ?></span>
              <span class="posted-month"><?php echo strftime("%b", mktime(0, 0, 0, $item->get_date('m'))); ?></span>
              <span class="posted-year" ><?php echo $item->get_date('Y'); ?></span>
            </time>
          </p>
          <address class="vcard"><cite class="author fn"><a class="url" href="<?php echo $feed->getWebsite(); ?>" title="Source"><?php echo $feed->getName(); ?></a></cite></address>
        </header>
        
        <div class="content">
          <?php echo $item->get_content(); ?>
        </div>
      </article>
      <?php if (++$count == $limit) { break; } ?>
    <?php endforeach; ?>
  <?php endif; ?>
  <nav class="nav-paging" role="navigation">
    <ul>
      <li class="prev"><a href="./archives" >Archives</a></li>
    </ul>
  </nav>
</div>

