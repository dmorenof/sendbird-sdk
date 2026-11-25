<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Update\PushPreferencesForAChannel\Request;

enum TriggerOptionEnum: string
{
    case All = 'all';
    case Default_ = 'default';
    case False_ = 'false';
    case MentionOnly = 'mention_only';
}
