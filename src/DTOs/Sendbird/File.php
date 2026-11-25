<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"file_name":"file_name","file_type":"file_type","require_auth":true,"thumbnails":[{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7},{"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}],"url":"url","file_size":4}
 */
final class File extends \Dmorenof\SdkRuntime\DTO
{
    public string $file_name;
    public int $file_size;
    public string $file_type;
    public bool $require_auth;
    public \SendbirdSDK\Collections\Sendbird\File\ThumbnailsCollection $thumbnails;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file_name' => is_string($value) ? $this->file_name = $value : parent::assignMember($name, $value),
            'file_size' => is_int($value) ? $this->file_size = $value : parent::assignMember($name, $value),
            'file_type' => is_string($value) ? $this->file_type = $value : parent::assignMember($name, $value),
            'require_auth' => is_bool($value) ? $this->require_auth = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->thumbnails = new \SendbirdSDK\Collections\Sendbird\File\ThumbnailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\Thumbnail::class)) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
