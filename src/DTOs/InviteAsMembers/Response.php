<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\InviteAsMembers;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel_url',
];

    public string $channel_url;
    public \SendbirdSDK\Enums\InviteAsMembers\Response\CountPreferenceEnum $count_preference;
    public string $cover_url;
    /**
     * Format: int64
     */
    public int $created_at;
    public \SendbirdSDK\DTOs\Sendbird\BasicUserInfo $created_by;
    public string $custom_type;
    public string $data;
    public \SendbirdSDK\DTOs\InviteAsMembers\Response\DeliveryReceiptDTO $delivery_receipt;
    public \SendbirdSDK\DTOs\Sendbird\DisappearingMessage $disappearing_message;
    public bool $freeze;
    public bool $has_ai_bot;
    public bool $has_bot;
    public \SendbirdSDK\Enums\InviteAsMembers\Response\HiddenStateEnum $hidden_state;
    public bool $ignore_profanity_filter;
    /**
     * Format: int64
     */
    public int $invited_at;
    public \SendbirdSDK\DTOs\Sendbird\BasicUserInfo $inviter;
    public ?bool $is_access_code_required;
    public bool $is_broadcast;
    public bool $is_discoverable;
    public bool $is_distinct;
    public bool $is_ephemeral;
    public bool $is_exclusive;
    public bool $is_hidden;
    public bool $is_muted;
    public bool $is_public;
    public bool $is_push_enabled;
    public bool $is_super;
    public int $joined_member_count;
    /**
     * Format: int64
     */
    public ?int $joined_ts;
    public \SendbirdSDK\DTOs\Sendbird\Message\Response $last_message;
    public int $max_length_message;
    public int $member_count;
    public \SendbirdSDK\Enums\InviteAsMembers\Response\MemberStateEnum $member_state;
    public \SendbirdSDK\Collections\Sendbird\GroupChannel\MembersCollection $members;
    public int $message_survival_seconds;
    public ?\SendbirdSDK\DTOs\InviteAsMembers\Response\MetadataDTO $metadata;
    public \SendbirdSDK\Enums\InviteAsMembers\Response\MyRoleEnum $my_role;
    public string $name;
    public \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection $operators;
    public \SendbirdSDK\Enums\Sendbird\PushTriggerOption $push_trigger_option;
    public \SendbirdSDK\DTOs\InviteAsMembers\Response\ReadReceiptMap $read_receipt;
    public \SendbirdSDK\DTOs\Sendbird\SmsFallback $sms_fallback;
    /**
     * Format: int64
     */
    public int $ts_message_offset;
    public int $unread_mention_count;
    public int $unread_message_count;
    /**
     * Format: int64
     */
    public int $user_last_read;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'count_preference' => is_string($value) ? $this->count_preference = \SendbirdSDK\Enums\InviteAsMembers\Response\CountPreferenceEnum::from($value) : parent::assignMember($name, $value),
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'created_by' => $value instanceof \stdClass ? $this->created_by = new \SendbirdSDK\DTOs\Sendbird\BasicUserInfo($value) : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'disappearing_message' => $value instanceof \stdClass ? $this->disappearing_message = new \SendbirdSDK\DTOs\Sendbird\DisappearingMessage($value) : parent::assignMember($name, $value),
            'freeze' => is_bool($value) ? $this->freeze = $value : parent::assignMember($name, $value),
            'has_ai_bot' => is_bool($value) ? $this->has_ai_bot = $value : parent::assignMember($name, $value),
            'has_bot' => is_bool($value) ? $this->has_bot = $value : parent::assignMember($name, $value),
            'hidden_state' => is_string($value) ? $this->hidden_state = \SendbirdSDK\Enums\InviteAsMembers\Response\HiddenStateEnum::from($value) : parent::assignMember($name, $value),
            'ignore_profanity_filter' => is_bool($value) ? $this->ignore_profanity_filter = $value : parent::assignMember($name, $value),
            'invited_at' => is_int($value) ? $this->invited_at = $value : parent::assignMember($name, $value),
            'inviter' => $value instanceof \stdClass ? $this->inviter = new \SendbirdSDK\DTOs\Sendbird\BasicUserInfo($value) : parent::assignMember($name, $value),
            'is_access_code_required' => $value === null || is_bool($value) ? $this->is_access_code_required = $value : parent::assignMember($name, $value),
            'is_broadcast' => is_bool($value) ? $this->is_broadcast = $value : parent::assignMember($name, $value),
            'is_discoverable' => is_bool($value) ? $this->is_discoverable = $value : parent::assignMember($name, $value),
            'is_distinct' => is_bool($value) ? $this->is_distinct = $value : parent::assignMember($name, $value),
            'is_ephemeral' => is_bool($value) ? $this->is_ephemeral = $value : parent::assignMember($name, $value),
            'is_exclusive' => is_bool($value) ? $this->is_exclusive = $value : parent::assignMember($name, $value),
            'is_hidden' => is_bool($value) ? $this->is_hidden = $value : parent::assignMember($name, $value),
            'is_muted' => is_bool($value) ? $this->is_muted = $value : parent::assignMember($name, $value),
            'is_public' => is_bool($value) ? $this->is_public = $value : parent::assignMember($name, $value),
            'is_push_enabled' => is_bool($value) ? $this->is_push_enabled = $value : parent::assignMember($name, $value),
            'is_super' => is_bool($value) ? $this->is_super = $value : parent::assignMember($name, $value),
            'joined_member_count' => is_int($value) ? $this->joined_member_count = $value : parent::assignMember($name, $value),
            'joined_ts' => $value === null || is_int($value) ? $this->joined_ts = $value : parent::assignMember($name, $value),
            'last_message' => $value instanceof \stdClass ? $this->last_message = new \SendbirdSDK\DTOs\Sendbird\Message\Response($value) : parent::assignMember($name, $value),
            'max_length_message' => is_int($value) ? $this->max_length_message = $value : parent::assignMember($name, $value),
            'member_count' => is_int($value) ? $this->member_count = $value : parent::assignMember($name, $value),
            'member_state' => is_string($value) ? $this->member_state = \SendbirdSDK\Enums\InviteAsMembers\Response\MemberStateEnum::from($value) : parent::assignMember($name, $value),
            'members' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->members = new \SendbirdSDK\Collections\Sendbird\GroupChannel\MembersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\Member::class)) : parent::assignMember($name, $value),
            'message_survival_seconds' => is_int($value) ? $this->message_survival_seconds = $value : parent::assignMember($name, $value),
            'my_role' => is_string($value) ? $this->my_role = \SendbirdSDK\Enums\InviteAsMembers\Response\MyRoleEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operators' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->operators = new \SendbirdSDK\Collections\Sendbird\GroupChannelDetail\OperatorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\User::class)) : parent::assignMember($name, $value),
            'push_trigger_option' => is_string($value) ? $this->push_trigger_option = \SendbirdSDK\Enums\Sendbird\PushTriggerOption::from($value) : parent::assignMember($name, $value),
            'sms_fallback' => $value instanceof \stdClass ? $this->sms_fallback = new \SendbirdSDK\DTOs\Sendbird\SmsFallback($value) : parent::assignMember($name, $value),
            'ts_message_offset' => is_int($value) ? $this->ts_message_offset = $value : parent::assignMember($name, $value),
            'unread_mention_count' => is_int($value) ? $this->unread_mention_count = $value : parent::assignMember($name, $value),
            'unread_message_count' => is_int($value) ? $this->unread_message_count = $value : parent::assignMember($name, $value),
            'user_last_read' => is_int($value) ? $this->user_last_read = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
