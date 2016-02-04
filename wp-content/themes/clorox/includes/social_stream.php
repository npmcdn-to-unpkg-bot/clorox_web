<?php

require_once __DIR__ . '/celestream/vendor/autoload.php';

use Celestream\SocialStreams as SocialStreams;

$credentials = [
  'facebook' => [
    'app_id' => '1059125477461797',
    'app_secret' => '19f8ecf4e49eaba628d9087aa8cf9474',
    'default_graph_version' => 'v2.5'
  ],
  'youtube' => [
    'app-name' => "Clorox",
    'api-key' => "AIzaSyAR5xR7quRHswB-92WUfhRI-GxfSo_mVRs"
  ]
];

$feed_args = [
  'facebook' => [],
  'youtube' => [
    'fields' => 'snippet',
    'channelId' => 'UCSsUEf0vY2ghWC10lj_oVrw',
    'maxResults' => 5,
    'order' => 'date'
  ]
];

try {
  $API = new SocialStreams($credentials);
  $res = $API->getFeeds($feed_args);
  dd($res);
} catch (Exception $e) {
  dd($e->getMessage());
}
