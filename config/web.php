<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'admin'   => [
            'class' => 'app\modules\admin\Module',

        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'F0AmwyKU9ZQZ548Qpw6fMuKjS05lAG8R',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\admin\models\User',
            'loginUrl'       => ['admin/user/login'],
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [

                '<_c:(video)>' => 'video/index',
                '<_c:(photo)>' => 'photo/index',

                '<type:(video|photo)>/<url>' => 'category/index',

                '<_c:(video)>/<category>/<url>' => 'video/view',

                '<_c:(photo)>/<category>/<url>' => 'photo/view',

                '<_c:(predvideo)>/<category>/<url>' => 'predvideo/view',
                '<_c:(predphoto)>/<category>/<url>' => 'predphoto/view',

                '<_c:\w+>/<_a:[\w\-]+>/' => '<_c>/<_a>',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
