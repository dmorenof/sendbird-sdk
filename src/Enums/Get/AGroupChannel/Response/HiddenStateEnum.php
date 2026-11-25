<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Get\AGroupChannel\Response;

enum HiddenStateEnum: string
{
    case HiddenAllowAutoUnhide = 'hidden_allow_auto_unhide';
    case HiddenPreventAutoUnhide = 'hidden_prevent_auto_unhide';
    case Unhidden = 'unhidden';
}
