<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\Block\Get\Query;

enum QueryListEnum: string
{
    case BlockedByMe = 'blocked_by_me';
    case BlockingMe = 'blocking_me';
}
