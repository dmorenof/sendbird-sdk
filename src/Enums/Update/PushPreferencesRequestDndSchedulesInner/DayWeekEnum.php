<?php

declare(strict_types=1);

namespace SendbirdSDK\Enums\Update\PushPreferencesRequestDndSchedulesInner;

enum DayWeekEnum: string
{
    case Friday = 'friday';
    case Monday = 'monday';
    case Saturday = 'saturday';
    case Sunday = 'sunday';
    case Thursday = 'thursday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
}
