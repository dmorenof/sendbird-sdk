<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\InviteAsMembers\Response;

enum MyRoleEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case Operator = 'operator';
}
