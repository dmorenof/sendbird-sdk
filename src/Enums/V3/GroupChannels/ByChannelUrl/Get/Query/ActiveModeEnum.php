<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Get\Query;

enum ActiveModeEnum: string
{
    case Activated = 'activated';
    case All = 'all';
    case Deactivated = 'deactivated';
}
