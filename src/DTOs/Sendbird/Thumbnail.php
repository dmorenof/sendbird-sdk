<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"real_width":1,"width":1,"plain_url":"plain_url","real_height":1,"url":"url","height":7}
 */
final class Thumbnail extends \Dmorenof\SdkRuntime\DTO
{
    public int $height;
    public string $plain_url;
    public int $real_height;
    public int $real_width;
    public string $url;
    public int $width;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'plain_url' => is_string($value) ? $this->plain_url = $value : parent::assignMember($name, $value),
            'real_height' => is_int($value) ? $this->real_height = $value : parent::assignMember($name, $value),
            'real_width' => is_int($value) ? $this->real_width = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
