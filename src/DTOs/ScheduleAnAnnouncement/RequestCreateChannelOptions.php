<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\ScheduleAnAnnouncement;

/**
 * Example: {"cover_url":"cover_url","data":"data","custom_type":"custom_type","name":"name","distinct":true}
 */
final class RequestCreateChannelOptions extends \Dmorenof\SdkRuntime\DTO
{
    public string $cover_url;
    public string $custom_type;
    public string $data;
    public bool $distinct;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'distinct' => is_bool($value) ? $this->distinct = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
