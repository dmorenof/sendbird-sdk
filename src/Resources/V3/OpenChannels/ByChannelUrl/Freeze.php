<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\OpenChannels\ByChannelUrl;

final class Freeze extends \SendbirdSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/open_channels/{channel_url}/freeze',
        'responseType' => '\\SendbirdSDK\\DTOs\\Sendbird\\OpenChannel',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\FreezeAnOpenChannelRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Freeze an open channel
     *
     * ## Freeze an open channel
     *
     * Freezes or unfreezes an open channel.
     *
     * > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-an-open-channel#1-freeze-an-open-channel](https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-an-open-channel#1-freeze-an-open-channel)
     */
    public function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\OpenChannels\ByChannelUrl\Freeze $params = null): \SendbirdSDK\DTOs\Sendbird\OpenChannel
    {
        /** @var \SendbirdSDK\DTOs\Sendbird\OpenChannel $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }
}
