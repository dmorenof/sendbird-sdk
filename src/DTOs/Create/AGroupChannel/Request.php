<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\AGroupChannel;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'users',
];

    public ?string $access_code;
    public ?bool $block_sdk_user_channel_join;
    public string $channel_url;
    /**
     * Uploads a file for the channel cover image.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $cover_file;
    public string $cover_url;
    public string $custom_type;
    public string $data;
    /**
     * Specifies one or more key-value pair items which set the channel's hidden status for each user. The key should be a user_id and the value should be their hidden status. Acceptable values are limited to the following:<br />- unhidden (default): the channel is included in when retrieving a list of group channels.<br />- hidden_allow_auto_unhide: the channel automatically gets unhidden when receiving a new message.<br />- hidden_prevent_auto_unhide: the channel keeps hidden though receiving a new message.
     */
    public \SendbirdSDK\DTOs\Create\AGroupChannel\Request\HiddenStatusDTO $hidden_status;
    /**
     * Specifies one or more key-value pair items which set the invitation status of each user invited to the channel. The key should be a user_id and the value should be their joining status. Acceptable values are joined, invited_by_friend, and invited_by_non_friend. (Default: joined)
     */
    public \SendbirdSDK\DTOs\Create\AGroupChannel\Request\InvitationStatusDTO $invitation_status;
    public string $inviter_id;
    public bool $is_distinct;
    public bool $is_ephemeral;
    public bool $is_public;
    public bool $is_super;
    public string $name;
    public \SendbirdSDK\Collections\StringCollection $operator_ids;
    public bool $strict;
    public \SendbirdSDK\Collections\StringCollection $user_ids;
    public \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection $users;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_code' => $value === null || is_string($value) ? $this->access_code = $value : parent::assignMember($name, $value),
            'block_sdk_user_channel_join' => $value === null || is_bool($value) ? $this->block_sdk_user_channel_join = $value : parent::assignMember($name, $value),
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'inviter_id' => is_string($value) ? $this->inviter_id = $value : parent::assignMember($name, $value),
            'is_distinct' => is_bool($value) ? $this->is_distinct = $value : parent::assignMember($name, $value),
            'is_ephemeral' => is_bool($value) ? $this->is_ephemeral = $value : parent::assignMember($name, $value),
            'is_public' => is_bool($value) ? $this->is_public = $value : parent::assignMember($name, $value),
            'is_super' => is_bool($value) ? $this->is_super = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operator_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->operator_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'strict' => is_bool($value) ? $this->strict = $value : parent::assignMember($name, $value),
            'user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'users' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->users = new \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\User::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
