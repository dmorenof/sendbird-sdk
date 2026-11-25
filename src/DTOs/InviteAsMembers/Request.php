<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\InviteAsMembers;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'user_ids',
];

    /**
     * Specifies one or more key-value pair items which set the channel's hidden status for each user. The key should be a user_id and the value should be their hidden status. Acceptable values are limited to the following:<br />- unhidden (default): the channel is included in when retrieving a list of group channels.<br />- hidden_allow_auto_unhide: the channel automatically gets unhidden when receiving a new message.<br />- hidden_prevent_auto_unhide: the channel keeps hidden though receiving a new message.
     */
    public \SendbirdSDK\DTOs\InviteAsMembers\Request\HiddenStatusDTO $hidden_status;
    /**
     * Specifies one or more key-value pair items which set the invitation status of each user invited to the channel. The key should be a user_id and the value should be their joining status. Acceptable values are joined, invited_by_friend, and invited_by_non_friend. (Default: joined)
     */
    public \SendbirdSDK\DTOs\InviteAsMembers\Request\InvitationStatusDTO $invitation_status;
    public string $inviter_id;
    public \SendbirdSDK\Collections\StringCollection $user_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inviter_id' => is_string($value) ? $this->inviter_id = $value : parent::assignMember($name, $value),
            'user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
