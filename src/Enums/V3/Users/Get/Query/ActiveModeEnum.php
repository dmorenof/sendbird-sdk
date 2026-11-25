<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\Get\Query;

enum ActiveModeEnum: string
{
    case Activated = 'activated';
    case All = 'all';
    case Deactivated = 'deactivated';
}
