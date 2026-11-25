<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Sendbird;

enum PushTriggerOption: string
{
    case All = 'all';
    case MentionOnly = 'mention_only';
    case Off = 'off';
}
