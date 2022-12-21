<?php

$params = [];
foreach ($_ENV as $key => $value) {
    $params[$key] = $value;
}
$params['timezone'] = 'Asia/Jakarta';
$params['length_expiration'] = 1; //day
$params['cache_expiration'] = 86400; //seconds (1 day)

return $params;
