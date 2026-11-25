<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl;

final class ResetUserHistory extends \SendbirdSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/group_channels/{channel_url}/reset_user_history',
        'responseType' => '\\SendbirdSDK\\DTOs\\ResetChatHistoryResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\ResetChatHistoryRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Reset chat history
     *
     * ## Reset chat history
     *
     * This action resets the properties related to a specific user's chat history in a [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel), clearing existing messages in a channel from only the specified user's end. Because this action doesn't delete messages from the Sendbird database, other members in the channel can still retrieve and see the messages.
     *
     * This action clears the messages for the specified user by updating the `last_message` and `read_receipt` properties of the [group channel resource](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#4-list-of-properties-for-group-channels) in addition to other internally managed data such as the count of a user's unread messages.
     *
     * Using the `reset_all` property, you can also reset the properties related to the chat history of all members in a group channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/reset-chat-history#1-reset-chat-history
     */
    public function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\ResetUserHistory $params = null): \SendbirdSDK\DTOs\ResetChatHistoryResponse
    {
        /** @var \SendbirdSDK\DTOs\ResetChatHistoryResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }
}
