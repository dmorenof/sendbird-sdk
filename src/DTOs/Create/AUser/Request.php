<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\AUser;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'nickname',
        'profile_url',
        'user_id',
    ];

    public ?\SendbirdSDK\Collections\StringCollection $discovery_keys;
    public bool $issue_access_token;
    public ?\SendbirdSDK\DTOs\Create\AUser\Request\MetadataDTO $metadata;
    public ?string $nickname;
    /**
     * Specifies the file of the user's profile image. An acceptable image is limited to a JPG, JPEG, or PNG file of up to 5 MB. When passing a file, you should send a multipart request. If the profile_file property is specified, the profile_url property is not required.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $profile_file;
    public string $profile_url;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discovery_keys' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->discovery_keys = $value === null ? null : new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'issue_access_token' => is_bool($value) ? $this->issue_access_token = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'profile_url' => is_string($value) ? $this->profile_url = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
