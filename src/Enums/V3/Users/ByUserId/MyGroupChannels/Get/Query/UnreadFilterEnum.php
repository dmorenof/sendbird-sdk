<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query;

enum UnreadFilterEnum: string
{
    case All = 'all';
    case UnreadMessage = 'unread_message';
}
