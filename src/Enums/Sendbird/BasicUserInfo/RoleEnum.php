<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Sendbird\BasicUserInfo;

enum RoleEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case Operator = 'operator';
}
