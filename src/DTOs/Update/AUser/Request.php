<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\AUser;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public ?\SendbirdSDK\Collections\StringCollection $discovery_keys;
    public bool $is_active;
    public bool $issue_access_token;
    /**
     * Format: int64
     */
    public int $last_seen_at;
    public bool $leave_all_when_deactivated;
    public ?string $nickname;
    public ?\SendbirdSDK\Collections\StringCollection $preferred_languages;
    /**
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $profile_file;
    public ?string $profile_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discovery_keys' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->discovery_keys = $value === null ? null : new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'is_active' => is_bool($value) ? $this->is_active = $value : parent::assignMember($name, $value),
            'issue_access_token' => is_bool($value) ? $this->issue_access_token = $value : parent::assignMember($name, $value),
            'last_seen_at' => is_int($value) ? $this->last_seen_at = $value : parent::assignMember($name, $value),
            'leave_all_when_deactivated' => is_bool($value) ? $this->leave_all_when_deactivated = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'preferred_languages' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->preferred_languages = $value === null ? null : new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'profile_url' => $value === null || is_string($value) ? $this->profile_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
