<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Send\ABotMessage\Request;

enum MessageTypeEnum: string
{
    case FILE = 'FILE';
    case MESG = 'MESG';
}
