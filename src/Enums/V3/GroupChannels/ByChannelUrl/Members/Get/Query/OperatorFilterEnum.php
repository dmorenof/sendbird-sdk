<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query;

enum OperatorFilterEnum: string
{
    case All = 'all';
    case Nonoperator = 'nonoperator';
    case Operator = 'operator';
}
