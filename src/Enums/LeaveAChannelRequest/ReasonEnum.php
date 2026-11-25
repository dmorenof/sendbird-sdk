<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\LeaveAChannelRequest;

enum ReasonEnum: string
{
    case ADMINDEACTIVATED = 'ADMIN_DEACTIVATED';
    case ADMINDELETED = 'ADMIN_DELETED';
    case ADMINREMOVED = 'ADMIN_REMOVED';
    case CHANNELOPERATORREMOVED = 'CHANNEL_OPERATOR_REMOVED';
    case LEFTBYOWNCHOICE = 'LEFT_BY_OWN_CHOICE';
}
