<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\CheckIfMemberResponse;

enum StateEnum: string
{
    case Invited = 'invited';
    case Joined = 'joined';
    case None = 'none';
}
