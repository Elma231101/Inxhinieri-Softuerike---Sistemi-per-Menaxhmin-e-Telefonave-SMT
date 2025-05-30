<?php
require __DIR__ . '/../vendor/autoload.php';

use App\RedisClient;

$redis = new RedisClient();

echo "Queue Worker is running...\n";

while (true) {
    $job = $redis->popFromQueue('task_queue');
    if ($job) {
        $data = json_decode($job, true);
        echo "Processing task: " . print_r($data, true) . "\n";
        // Këtu mund të vendosësh logjikën për përpunimin e detyrave.
    } else {
        sleep(1); // S'ka punë – prit pak
    }
}
