<?php

declare(strict_types=1);

namespace SendbirdSDK\V3\GroupChannels\ByChannelUrl;

final class Members extends \SendbirdSDK\SendbirdPlatformSDK
{
    /** GET /v3/group_channels/{channel_url}/members [operationId: listMembers] */
    /**
     * List members
     *
     * ## List members
     *
     * Retrieves a list of members of a group channel.
     *
     * > **Note**: See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/list-members-of-a-group-channel#1-list-members-of-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/list-members-of-a-group-channel#1-list-members-of-a-group-channel)
     *
     * `channel_url`
     * Type: string
     * Description: Specifies the URL of the channel to retrieve a list of members of.
     */
    public static function get(string $channel_url, ?\SendbirdSDK\GetParams\V3\GroupChannels\ByChannelUrl\Members $params = null): \SendbirdSDK\DTOs\GroupChannelListMembersResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Members::class)->get($channel_url, $params);
    }

    /** GET /v3/group_channels/{channel_url}/members/{user_id} [operationId: checkIfMember] */
    /**
     * Check if member
     *
     * ## Check if user is a member
     *
     * Checks if a user is a member of a group channel.
     *
     * > **Note**: See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.
     *
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/check-if-user-is-a-member#1-check-if-user-is-a-member](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/check-if-user-is-a-member#1-check-if-user-is-a-member)
     */
    public static function getByUserId(\SendbirdSDK\PathParams\V3\GroupChannels\ByChannelUrl\Members\ByUserId $identifier, ?\SendbirdSDK\GetParams\V3\GroupChannels\ByChannelUrl\Members\ByUserId $params = null): \SendbirdSDK\DTOs\CheckIfMemberResponse
    {
        return self::client()->resource(\SendbirdSDK\Resources\V3\GroupChannels\ByChannelUrl\Members::class)->getByUserId($identifier, $params);
    }

}
