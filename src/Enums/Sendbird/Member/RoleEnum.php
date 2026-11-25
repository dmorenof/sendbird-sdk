<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Sendbird\Member;

enum RoleEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case Operator = 'operator';
}
