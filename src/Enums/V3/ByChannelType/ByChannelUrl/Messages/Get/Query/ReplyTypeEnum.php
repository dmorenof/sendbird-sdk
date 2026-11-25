<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Query;

enum ReplyTypeEnum: string
{
    case ALL = 'ALL';
    case NONE = 'NONE';
    case ONLYREPLYTOCHANNEL = 'ONLY_REPLY_TO_CHANNEL';
}
