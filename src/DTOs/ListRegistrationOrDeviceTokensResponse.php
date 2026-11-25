<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"tokens":["tokens","tokens"],"type":"type","user":{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},"token":["token","token"]}
 */
final class ListRegistrationOrDeviceTokensResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\StringCollection $token;
    public \SendbirdSDK\Collections\StringCollection $tokens;
    public string $type;
    public \SendbirdSDK\DTOs\Sendbird\BasicUserInfo $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'token' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->token = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'tokens' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tokens = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'user' => $value instanceof \stdClass ? $this->user = new \SendbirdSDK\DTOs\Sendbird\BasicUserInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
