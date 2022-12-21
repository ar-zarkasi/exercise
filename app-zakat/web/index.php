<?php

require __DIR__ . '/../config/Initiator.php';
\app\config\Initiator::init();

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
