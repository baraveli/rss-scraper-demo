<?php

require 'vendor/autoload.php';

use Baraveli\RssScraper\Rss;
use Phpfastcache\Helper\Psr16Adapter;


Flight::route('/', function () {

    $defaultDriver = 'Files';
    $Psr16Adapter = new Psr16Adapter($defaultDriver);

    if (!$Psr16Adapter->has('rssfeeds')) {

        $feeds = (new Rss)->getRss()->toArray();

        $Psr16Adapter->set('rssfeeds', $feeds, 300);
    } else {
        $feeds = $Psr16Adapter->get('rssfeeds');
    }


    Flight::render('view.php', array('feeds' => $feeds));
});


Flight::start();
