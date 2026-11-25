<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl;

final class Typing extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** DELETE /v3/group_channels/{channel_url}/typing [operationId: stopTypingIndicators] */
    /**
     * Stop typing indicators
     *
     * ## Stop typing indicators
     *
     * You can stop showing a typing indicator using this API. To signal that a user is no longer typing, you can let the indicator disappear when the user sends a message or completely deletes the message text.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-typing-indicators/stop-typing-indicators#1-stop-typing-indicators
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to set typing indicators.
     */
    public static function delete(string $channel_url, ?\SendbirdSDK\DeleteParams\V3\GroupChannels\ByChannelUrl\Typing $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Typing::class)->delete($channel_url, $params);
    }

    /** POST /v3/group_channels/{channel_url}/typing [operationId: startTypingIndicators] */
    /**
     * Start typing indicators
     *
     * ## Start typing indicators
     *
     * You can start showing a typing indicator using this API. Seeing whether other users are typing can help a more interactive conversation environment by showing real-time engagement of other users.
     *
     * If you're looking for an easy way to show typing indicators on your app, check out Sendbird UIKit for a ready-to-use UI feature that can be customized to fit your needs.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-typing-indicators/start-typing-indicators#1-start-typing-indicators
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to set typing indicators.
     */
    public static function post(string $channel_url, ?\SendbirdSDK\PostParams\V3\GroupChannels\ByChannelUrl\Typing $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Typing::class)->post($channel_url, $params);
    }

}
