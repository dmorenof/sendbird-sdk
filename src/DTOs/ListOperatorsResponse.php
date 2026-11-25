<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"next":"next","operators":[{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}]}
 */
final class ListOperatorsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $next;
    public \SendbirdSDK\Collections\Sendbird\Message\Response\MentionedUsersCollection $operators;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'next' => is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'operators' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->operators = new \SendbirdSDK\Collections\Sendbird\Message\Response\MentionedUsersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\BasicUserInfo::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
