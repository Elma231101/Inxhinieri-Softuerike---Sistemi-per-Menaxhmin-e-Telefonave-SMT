<?php
require 'vendor/autoload.php';  // Nëse përdor Composer

use App\RedisClient;

$redis = RedisClient::get();

$redis->set('test_key', 'Hello Redis!');
echo $redis->get('test_key');
