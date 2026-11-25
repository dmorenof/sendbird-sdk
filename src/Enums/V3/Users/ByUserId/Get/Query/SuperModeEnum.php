<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\Get\Query;

enum SuperModeEnum: string
{
    case All = 'all';
    case Nonsuper = 'nonsuper';
    case Super = 'super';
}
