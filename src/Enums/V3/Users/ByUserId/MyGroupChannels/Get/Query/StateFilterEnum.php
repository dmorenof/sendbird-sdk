<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query;

enum StateFilterEnum: string
{
    case All = 'all';
    case InvitedByFriend = 'invited_by_friend';
    case InvitedByNonFriend = 'invited_by_non_friend';
    case InvitedOnly = 'invited_only';
    case JoinedOnly = 'joined_only';
}
