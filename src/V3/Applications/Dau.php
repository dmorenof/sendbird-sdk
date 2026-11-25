<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\Applications;

final class Dau extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/applications/dau [operationId: viewNumberOfDailyActiveUsers] */
    /**
     * View number of daily active users
     *
     * ## View number of daily active users
     *
     * Retrieves the number of daily active users of an application.
     *
     * > **Note**: This metric is scheduled to be calculated every 30 minutes, starting at 00:00 UTC, with the first update at 00:30 UTC.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/statistics/daus-and-maus/get-number-of-daily-active-users#1-get-number-of-daily-active-users](https://sendbird.com/docs/chat/platform-api/v3/statistics/daus-and-maus/get-number-of-daily-active-users#1-get-number-of-daily-active-users)
     */
    public static function get(?\SendbirdSDK\GetParams\V3\Applications\Dau $params = null): \SendbirdSDK\DTOs\View\NumberOfDailyActiveUsers\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Applications\Dau::class)->get($params);
    }
}
