<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

final class LeaveAChannelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_ids',
    ];

    /**
     * Specifies the reason for leaving a channel. Acceptable values are admin_removed, admin_deleted, admin_deactivated, left_by_own_choice, and channel_operator_removed.
     */
    public \SendbirdSDK\Enums\LeaveAChannelRequest\ReasonEnum $reason;
    /**
     * Determines whether to make all members leave the channel. (Default: false)
     */
    public bool $should_leave_all;
    /**
     * Determines whether to remove a user from the channel's operator list if the user who is leaving the channel is an operator. (Default: false)
     */
    public bool $should_remove_operator_status;
    /**
     * Specifies an array of one or more IDs of the users to leave the channel.
     */
    public \SendbirdSDK\Collections\StringCollection $user_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = \SendbirdSDK\Enums\LeaveAChannelRequest\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'should_leave_all' => is_bool($value) ? $this->should_leave_all = $value : parent::assignMember($name, $value),
            'should_remove_operator_status' => is_bool($value) ? $this->should_remove_operator_status = $value : parent::assignMember($name, $value),
            'user_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->user_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
