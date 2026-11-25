<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Send\FileMessageRequestBody;

enum MentionTypeEnum: string
{
    case Channel = 'channel';
    case Users = 'users';
}
