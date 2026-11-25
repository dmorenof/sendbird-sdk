<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query;

enum HiddenModeEnum: string
{
    case All = 'all';
    case HiddenAllowAutoUnhide = 'hidden_allow_auto_unhide';
    case HiddenOnly = 'hidden_only';
    case HiddenPreventAutoUnhide = 'hidden_prevent_auto_unhide';
    case UnhiddenOnly = 'unhidden_only';
}
