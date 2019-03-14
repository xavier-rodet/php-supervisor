<?php


$redis = new Redis();
$redis->pconnect('redis',6379);

try {
    $get_message = null;
    $redis->subscribe(array('daemon-finished'), function($redis, $chan, $message) use ($get_message) {

        $get_message = $message;
            var_dump(array('msg' => $message));
            echo  PHP_EOL;
        // 'daemon-finished' received
        $redis->close();
    });
}
catch (RedisException $exception) {

    echo 'exception' . PHP_EOL;
    var_dump(array('msg' => $message));
    echo  PHP_EOL;
}


echo "do next stuff ...";


