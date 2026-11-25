<?php

declare(strict_types=1);

namespace SendbirdSDK\V3;

final class Announcements extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** POST /v3/announcements [operationId: scheduleAnAnnouncement] */
    /**
     * Schedule an announcement
     *
     * ## Schedule an announcement
     *
     * Creates an announcement. You can also schedule an announcement in the [Sendbird Dashboard](https://dashboard.sendbird.com).
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/message/announcements/create-an-announcement#1-create-an-announcement](https://sendbird.com/docs/chat/platform-api/v3/message/announcements/create-an-announcement#1-create-an-announcement)
     */
    public static function post(?\SendbirdSDK\PostParams\V3\Announcements $params = null): \SendbirdSDK\DTOs\ScheduleAnAnnouncement\Response
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\Announcements::class)->post($params);
    }

}
