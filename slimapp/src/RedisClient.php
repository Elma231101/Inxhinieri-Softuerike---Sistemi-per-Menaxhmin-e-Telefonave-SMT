<?php
namespace App;

use Predis\Client;

class RedisClient {
    private static $client;

    public static function get() {
        if (!self::$client) {
            self::$client = new Client([
                'scheme' => 'tcp',
                'host'   => '127.0.0.1',
                'port'   => 6379,
            ]);
        }
        return self::$client;
    }
}
