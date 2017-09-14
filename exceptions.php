<?php


try {
    $api->sendRequest();
    echo "OK2";
} catch (UserException $e) {
    
    echo $e->getMessage() . PHP_EOL;
} catch (Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}
echo "OK" . PHP_EOL;