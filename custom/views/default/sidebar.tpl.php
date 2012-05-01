<?php function getTweets($screen_name, $nb_tweets=5) {
  $tweets = file_get_contents('https://www.twitter.com/statuses/user_timeline.json?screen_name=' . $screen_name .'&include_rts=false&exclude_replies=true&contributor_details=false' );
  if ($tweets) {
    $tweets = json_decode($tweets);
    $rv = '';
    $nb_displayed = 0;
    foreach ($tweets as $status) { // don't display answers to tweets
      if ($status->in_reply_to_user_id_str != '') continue;
      $nb_displayed++;
      if ($nb_displayed > $nb_tweets) break;
      $link = '<a href="https://twitter.com/#!/' . $screen_name . '/status/' .
                $status->id_str . '">' . $status->text . '</a>';
      $rv .= '<li>' . $link . '</li>';
    }
  }
  return $rv;
} ?>
<div id="sidebar" class="aside">
  <div class="section">
    <h2>Gazouillis</h2>
    <ul id="twitter">
      <?=getTweets('mozilla_fr', 5)?>
      <li class="more"><a href="https://twitter.com/#!/mozilla_fr/">plus…</a></li>
    </ul>
  </div>

  <div class="section">
    <h2>Téléchargements</h2>
    <ul id="downloads">
      <li id="firefox">
        <a href="http://www.mozilla.org/fr/firefox/?from=mozfr">Firefox</a>
      </li>
      <li id="thunderbird">
        <a href="http://www.mozilla.org/fr/thunderbird/?from=mozfr">Thunderbird</a>
      </li>
      <li class="more">
        <a href="http://frenchmozilla.org/downloads">plus…</a>
      </li>
    </ul>
  </div>

  <div class="section">
    <h2>Activités</h2>
    <ul id="activities">
      <li id="bonjourMozilla">
        <a href="http://bonjourmozilla.fr/" title="tous les jours, un membre de la communauté francophone est présenté">Bonjour Mozilla</a>
      </li>
      <li id="frenchMozilla">
        <a href="http://frenchmozilla.org/" title="le site des traducteurs francophones">French Mozilla</a>
      </li>
      <li id="geckozone">
        <a href="http://geckozone.org/" title="aide et support technique des utilisateurs Mozilla">Geckozone</a>
      </li>
      <li class="more">
        <a href="./contrib">Contribuer !</a>
      </li>
    </ul>
  </div>

  <div class="section">
    <h2>Communautés</h2>
    <ul id="communities">
      <li id="community-dz">
        <a href="http://mozilla-algeria.org/" title="site de la communauté algérienne">Mozilla Algeria</a>
      </li>
      <li id="community-be">
        <a href="http://mozilla-belgium.org/" title="site de la communauté belge">Mozilla Belgium</a>
      </li>
      <li id="community-ma">
        <a href="http://mozilla.ma/" title="site de la communauté marocaine">Mozilla Morocco</a>
      </li>
      <li id="community-sn">
        <a href="http://mozilla-senegal.org/" title="site de la communauté sénégalaise">Mozilla Senegal</a>
      </li>
      <li id="community-tn">
        <a href="http://mozilla-tunisia.org/" title="site de la communauté tunisienne">Mozilla Tunisia</a>
      </li>
    </ul>
  </div>

  <div class="section">
    <h2>Billets</h2>
    <ul>
      <li class="feed"><a href="?type=atom10">Flux atom</a></li>
      <li class="feed"><a href="?type=rss10">Flux rss</a></li>
      <li class="more"><a href="?type=archive">Archives</a></li>
    </ul>
  </div>
</div>

