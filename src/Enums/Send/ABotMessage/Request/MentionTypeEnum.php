<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Send\ABotMessage\Request;

enum MentionTypeEnum: string
{
    case Channel = 'channel';
    case Users = 'users';
}
