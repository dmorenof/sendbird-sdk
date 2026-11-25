<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query;

enum MemberFilterEnum: string
{
    case All = 'all';
    case Muted = 'muted';
    case Unmuted = 'unmuted';
}
