<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Sendbird\GroupChannel;

enum MemberStateEnum: string
{
    case Invited = 'invited';
    case Joined = 'joined';
    case None = 'none';
}
