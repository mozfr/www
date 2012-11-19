<?php

function getTweets($screen_name, $nb_tweets=5, $timeout=3) {
    $source = 'https://www.twitter.com/statuses/user_timeline.json?screen_name='
            . $screen_name
            . '&include_rts=false&exclude_replies=true&contributor_details=false';
    $ctx    = stream_context_create(array('http' => array('timeout' => $timeout)));
    $tweets = json_decode(@file_get_contents($source, 0, $ctx));
    $output = '';

    if ($tweets) {
        foreach ($tweets as $status) {
            if ($status->in_reply_to_user_id_str != '') {
                continue; # don't display answers to tweets
            } else {
                $output .= '<li><a href="https://twitter.com/#!/'
                            . $screen_name . '/status/' . $status->id_str . '">'
                            . $status->text . '</a></li>';
                --$nb_tweets;
            }
            if($nb_tweets == 0) break;
        }
    } else {
        $output = '<li>Twitter est indisponible pour le moment.</li>';
    }
    return $output;
}

?>
<div id="sidebar" class="aside">
  <div class="section">
    <h2>Gazouillis</h2>
    <ul id="twitter">
      <?=getTweets('mozilla_fr', 5, 2)?>
      <li class="more"><a href="https://twitter.com/#!/mozilla_fr/">Plus…</a></li>
    </ul>
  </div>
  <div class="section">
    <h2>MozFR ailleurs</h2>
    <ul id="sns">
      <li id="twitterlogo"><a href="https://twitter.com/mozilla_fr/">Twitter</a></li>
      <li id="diasporalogo"><a href="https://free-beer.ch/u/mozfr">Diaspora</a></li>
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
        <a href="http://frenchmozilla.org/downloads">Autres…</a>
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
        <a href="./participer">Participer&nbsp;!</a>
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
      <li id="community-qc-ca">
        <a href="http://mozillaquebec.org/web/fr/" title="site de la communauté québecoise">Mozilla Québec</a>
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
      <li class="feed"><a href="./atom.xml">Flux atom</a></li>
      <li class="feed"><a href="./rss.xml">Flux rss</a></li>
      <li class="more"><a href="./archives">Archives</a></li>
    </ul>
  </div>
</div>

