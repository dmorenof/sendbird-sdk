<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3;

final class Announcements extends \SendbirdSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/announcements',
        'responseType' => '\\SendbirdSDK\\DTOs\\ScheduleAnAnnouncement\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\ScheduleAnAnnouncement\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Schedule an announcement
     *
     * ## Schedule an announcement
     *
     * Creates an announcement. You can also schedule an announcement in the [Sendbird Dashboard](https://dashboard.sendbird.com).
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/message/announcements/create-an-announcement#1-create-an-announcement](https://sendbird.com/docs/chat/platform-api/v3/message/announcements/create-an-announcement#1-create-an-announcement)
     */
    public function post(?\SendbirdSDK\PostParams\V3\Announcements $params = null): \SendbirdSDK\DTOs\ScheduleAnAnnouncement\Response
    {
        /** @var \SendbirdSDK\DTOs\ScheduleAnAnnouncement\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
