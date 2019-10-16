<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
if (file_exists(__DIR__ . '/../_protected/')) {
    defined('YII_PROTECTED_DIR') or define('YII_PROTECTED_DIR', __DIR__ . '/../_protected');
} else {
    defined('YII_PROTECTED_DIR') or define('YII_PROTECTED_DIR', __DIR__ . '/_protected');
}
require(YII_PROTECTED_DIR . '/vendor/autoload.php');
require(YII_PROTECTED_DIR . '/vendor/yiisoft/yii2/Yii.php');
$config = require(YII_PROTECTED_DIR .  '/config/web.php');

(new yii\web\Application($config))->run();
