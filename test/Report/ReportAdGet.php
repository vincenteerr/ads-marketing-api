<?php
/**
 * Created by PhpStorm.
 * User: 57F
 * Date: 2022/9/17
 * Email: 
 */

require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Report()->adGet();
$args = [
    'advertiser_id' => '1739667670306888'
];
$req->setArgs($args);

print_r($client->excute($req));
