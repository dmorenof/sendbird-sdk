<?php

declare(strict_types=1);

namespace SendbirdSDK\Resources\V3\Users\ByUserId;

final class ChannelInvitationPreference extends \SendbirdSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/users/{user_id}/channel_invitation_preference',
        'responseType' => '\\SendbirdSDK\\DTOs\\Get\\ChannelInvitationPreference\\Response',
    ];

    /**
     * Get channel invitation preference
     *
     * ## Get channel invitation preference
     *
     * This action retrieves a user's [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) invitation preference. Users are subject to both user-specific and application-wide invitation preferences. Of the two, the invitation preference set for a specific user takes precedence over [the default channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/setting-up-channels/get-default-invitation-preference).
     *
     * [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/get-channel-invitation-preference#1-get-channel-invitation-preference](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/get-channel-invitation-preference#1-get-channel-invitation-preference)
     */
    public function get(string $user_id, ?\SendbirdSDK\GetParams\V3\Users\ByUserId\ChannelInvitationPreference $params = null): \SendbirdSDK\DTOs\Get\ChannelInvitationPreference\Response
    {
        /** @var \SendbirdSDK\DTOs\Get\ChannelInvitationPreference\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/users/{user_id}/channel_invitation_preference',
        'responseType' => '\\SendbirdSDK\\DTOs\\Update\\ChannelInvitationPreference\\Response',
        'requestBody' => [
            'type' => '\\SendbirdSDK\\DTOs\\Update\\ChannelInvitationPreference\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update channel invitation preference
     *
     * ## Update channel invitation preference
     *
     * This action updates a user's [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) invitation preference. Updating the [application's default channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/setting-up-channels/update-default-invitation-preference) won't override existing users' individual channel invitation preferences. The changed preference only affects the users created after the update.
     *
     * https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-channel-invitation-preference#1-update-channel-invitation-preference
     */
    public function put(string $user_id, ?\SendbirdSDK\PutParams\V3\Users\ByUserId\ChannelInvitationPreference $params = null): \SendbirdSDK\DTOs\Update\ChannelInvitationPreference\Response
    {
        /** @var \SendbirdSDK\DTOs\Update\ChannelInvitationPreference\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: ['user_id' => $user_id], parameters: $params);
        return $result;
    }
}
