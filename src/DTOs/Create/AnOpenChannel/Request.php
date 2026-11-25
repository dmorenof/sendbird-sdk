<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\AnOpenChannel;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public string $channel_url;
    /**
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $cover_file;
    public string $cover_url;
    public string $custom_type;
    public string $data;
    public bool $is_dynamic_partitioned;
    public bool $is_ephemeral;
    public string $name;
    public \SendbirdSDK\Collections\StringCollection $operator_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel_url' => is_string($value) ? $this->channel_url = $value : parent::assignMember($name, $value),
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'is_dynamic_partitioned' => is_bool($value) ? $this->is_dynamic_partitioned = $value : parent::assignMember($name, $value),
            'is_ephemeral' => is_bool($value) ? $this->is_ephemeral = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operator_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->operator_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
