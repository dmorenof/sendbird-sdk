<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Sendbird\User;

enum StateEnum: string
{
    case Empty_ = '';
    case Invited = 'invited';
    case Joined = 'joined';
}
