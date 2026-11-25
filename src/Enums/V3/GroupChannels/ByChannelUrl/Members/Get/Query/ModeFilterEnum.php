<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query;

enum ModeFilterEnum: string
{
    case Activated = 'activated';
    case Deactivated = 'deactivated';
}
