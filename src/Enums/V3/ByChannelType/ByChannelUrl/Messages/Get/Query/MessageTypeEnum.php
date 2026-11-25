<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Query;

enum MessageTypeEnum: string
{
    case ADMM = 'ADMM';
    case FILE = 'FILE';
    case MESG = 'MESG';
}
