<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use SendbirdSDK\Configuration;
use SendbirdSDK\SendbirdPlatformSDK;
use SendbirdSDK\GetParams\V3\Applications\Dau as DauParams;
use SendbirdSDK\V3\Applications\Dau;

$configuration = new Configuration();
$configuration->serverVariables = ['app_id' => getenv('SENDBIRD_APP_ID') ?: ''];
SendbirdPlatformSDK::configure($configuration);

$users = Dau::get(new DauParams((object) ['ApiToken' => getenv('SENDBIRD_API_TOKEN') ?: '']));

echo json_encode($users), "\n";
