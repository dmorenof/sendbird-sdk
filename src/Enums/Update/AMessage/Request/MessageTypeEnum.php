<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Update\AMessage\Request;

enum MessageTypeEnum: string
{
    case ADMM = 'ADMM';
    case FILE = 'FILE';
    case MESG = 'MESG';
}
