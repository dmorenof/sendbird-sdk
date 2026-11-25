<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\ByChannelType\ByChannelUrl\Messages;

final class TotalCount extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/{channel_type}/{channel_url}/messages/total_count',
        'responseType' => '\\SendbirdSDK\\DTOs\\Get\\TotalNumberOfMessagesInAChannel\\Response',
    ];

    /**
     * Get total number of messages in a channel
     *
     * ## Get total number of messages in a channel
     *
     * Retrieves the total number of messages in a specific channel.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/get-total-number-of-messages-in-a-channel#1-get-total-number-of-messages-in-a-channel
     * ----------------------------
     */
    public function get(\SendbirdSDK\PathParams\V3\ByChannelType\ByChannelUrl\Messages\TotalCount $identifier, ?\SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages\TotalCount $params = null): \SendbirdSDK\DTOs\Get\TotalNumberOfMessagesInAChannel\Response
    {
        /** @var \SendbirdSDK\DTOs\Get\TotalNumberOfMessagesInAChannel\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
