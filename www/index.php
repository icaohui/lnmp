<?php 

// phpinfo();

// $redis = new Redis();

// $redis->connect('192.168.1.104', '6379');

// $redis->auth('123456');

// $redis->set('a', 1);

// echo $redis->get('a');

$conn = new mysqli('192.168.1.104', 'root', '123456', 'mysql');

var_dump($conn);

