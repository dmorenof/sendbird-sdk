<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3;

final class Migration extends \SendbirdSDK\Client
{
    private const array POST_BY_TARGET_CHANNEL_URL = [
        'method' => 'POST',
        'path' => '/v3/migration/{target_channel_url}',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\MigrateMessages\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Migrate messages
     *
     * ## Migrate messages
     *
     * Using our migration API, you can migrate the messages from another system into a Sendbird system's [channel](https://sendbird.com/docs/chat/v3/platform-api/guides/channel-types) which consists of users, messages, and other chat-related data.
     *
     * > To turn on this feature, [contact our support team](https://dashboard.sendbird.com/settings/contact_us).
     *
     *
     * There are three things to do in advance before the migration. Follow the instructions below:
     *
     * 1. Register the users of your current chat solution to your Sendbird application. You can migrate the users into the Sendbird system using the [user creation API](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-create-a-user).
     *
     * 2. Create either an [open](https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel) or a [group](https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-create-a-channel) channel to migrate the messages of your chat solution. The Sendbird system doesn't create a channel for your migration automatically.
     *
     * 3. The maximum number of migrated messages per call is 100. To avoid the failure during your migration, you must adjust the number of messages to process at once via the API.
     *
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/migration/migrate-messages#1-migrate-messages
     */
    public function postByTargetChannelUrl(string $target_channel_url, ?\SendbirdSDK\PostParams\V3\Migration\ByTargetChannelUrl $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_TARGET_CHANNEL_URL), path: ['target_channel_url' => $target_channel_url], parameters: $params);
        return $result;
    }

}
