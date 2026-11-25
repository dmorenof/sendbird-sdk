<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Sendbird\GroupChannel;

enum MyRoleEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case Operator = 'operator';
}
