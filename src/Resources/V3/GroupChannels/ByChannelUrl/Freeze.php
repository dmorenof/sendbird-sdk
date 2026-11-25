<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl;

final class Freeze extends \SendbirdSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/group_channels/{channel_url}/freeze',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\GroupChannelDetail',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\FreezeAGroupChannelRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Freeze a group channel
     *
     * ## Freeze a group channel
     *
     * Freezes or unfreezes a group channel.
     *
     * > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-a-group-channel#1-freeze-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-a-group-channel#1-freeze-a-group-channel)
     */
    public function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Freeze $params = null): \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\GroupChannelDetail $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

}
