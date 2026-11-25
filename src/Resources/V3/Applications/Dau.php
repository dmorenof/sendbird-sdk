<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Applications;

final class Dau extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/applications/dau',
        'responseType' => '\\SendbirdSDK\\DTOs\\View\\NumberOfDailyActiveUsers\\Response',
    ];

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
    public function get(?\SendbirdSDK\GetParams\V3\Applications\Dau $params = null): \SendbirdSDK\DTOs\View\NumberOfDailyActiveUsers\Response
    {
        /** @var \SendbirdSDK\DTOs\View\NumberOfDailyActiveUsers\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
