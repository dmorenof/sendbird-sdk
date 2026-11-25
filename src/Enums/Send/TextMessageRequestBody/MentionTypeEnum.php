<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Send\TextMessageRequestBody;

enum MentionTypeEnum: string
{
    case Channel = 'channel';
    case Users = 'users';
}
