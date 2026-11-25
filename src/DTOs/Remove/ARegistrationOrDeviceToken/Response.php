<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Remove\ARegistrationOrDeviceToken;

/**
 * Example: {"user":{"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true},"token":"token"}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $token;
    public \SendbirdSDK\DTOs\Sendbird\BasicUserInfo $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            'user' => $value instanceof \stdClass ? $this->user = new \SendbirdSDK\DTOs\Sendbird\BasicUserInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
