<?php

$redis = new Redis();


if($redis->pconnect('redis',6379)) {
    $redis->publish('daemon-finished', true); // send message to channel 1.
}
else {

    echo "no connection";
}



print "\n";
$redis->close();