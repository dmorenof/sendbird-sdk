<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\GroupChannels\Get\Query;

enum PublicModeEnum: string
{
    case All = 'all';
    case Private_ = 'private';
    case Public_ = 'public';
}
