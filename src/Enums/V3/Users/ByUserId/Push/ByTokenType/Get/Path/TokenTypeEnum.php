<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\Push\ByTokenType\Get\Path;

enum TokenTypeEnum: string
{
    case Apns = 'apns';
    case Gcm = 'gcm';
    case Huawei = 'huawei';
}
