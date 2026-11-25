<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Messages;

final class MarkAsRead extends \SendbirdSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/group_channels/{channel_url}/messages/mark_as_read',
        'responseType' => '\\SendbirdSDK\\DTOs\\EmptyObjectResponse',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\MarkChannelMessagesAsReadRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Mark all messages as read
     *
     * ## Mark all messages as read
     *
     * Marks all messages in a group channel as read for a specific user. This action is only applicable for users in a group channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/read-receipts/mark-all-messages-as-read-message#1-mark-all-messages-as-read
     */
    public function put(string $channel_url, ?\SendbirdSDK\PutParams\V3\GroupChannels\ByChannelUrl\Messages\MarkAsRead $params = null): \SendbirdSDK\DTOs\EmptyObjectResponse
    {
        /** @var \SendbirdSDK\DTOs\EmptyObjectResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['channel_url' => $channel_url], parameters: $params);
        return $result;
    }

}
