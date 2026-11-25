<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"metadata":"{}","require_auth_for_profile_image":true,"is_active":true,"role":"","user_id":"user_id","profile_url":"profile_url","nickname":"nickname","is_blocked_by_me":true}
 */
final class BasicUserInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'user_id',
    ];

    public bool $is_active;
    public bool $is_blocked_by_me;
    public ?\SendbirdSDK\DTOs\Sendbird\BasicUserInfo\MetadataDTO $metadata;
    public ?string $nickname;
    public string $profile_url;
    public bool $require_auth_for_profile_image;
    public \SendbirdSDK\Enums\Sendbird\BasicUserInfo\RoleEnum $role;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_active' => is_bool($value) ? $this->is_active = $value : parent::assignMember($name, $value),
            'is_blocked_by_me' => is_bool($value) ? $this->is_blocked_by_me = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'profile_url' => is_string($value) ? $this->profile_url = $value : parent::assignMember($name, $value),
            'require_auth_for_profile_image' => is_bool($value) ? $this->require_auth_for_profile_image = $value : parent::assignMember($name, $value),
            'role' => is_string($value) ? $this->role = \SendbirdSDK\Enums\Sendbird\BasicUserInfo\RoleEnum::from($value) : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
