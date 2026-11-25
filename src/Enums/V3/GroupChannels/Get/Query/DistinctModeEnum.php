<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\Get\Query;

enum DistinctModeEnum: string
{
    case All = 'all';
    case Distinct = 'distinct';
    case Nondistinct = 'nondistinct';
}
