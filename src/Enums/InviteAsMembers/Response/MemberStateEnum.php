<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\InviteAsMembers\Response;

enum MemberStateEnum: string
{
    case Invited = 'invited';
    case Joined = 'joined';
    case None = 'none';
}
