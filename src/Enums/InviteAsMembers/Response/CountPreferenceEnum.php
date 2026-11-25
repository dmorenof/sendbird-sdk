<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\InviteAsMembers\Response;

enum CountPreferenceEnum: string
{
    case All = 'all';
    case False_ = 'false';
    case UnreadMentionedCountOnly = 'unread_mentioned_count_only';
    case UnreadMessageCountOnly = 'unread_message_count_only';
}
