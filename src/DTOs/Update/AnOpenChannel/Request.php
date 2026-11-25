<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\AnOpenChannel;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $cover_file;
    public string $cover_url;
    public string $custom_type;
    public string $data;
    public string $name;
    public \SendbirdSDK\Collections\StringCollection $operator_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cover_url' => is_string($value) ? $this->cover_url = $value : parent::assignMember($name, $value),
            'custom_type' => is_string($value) ? $this->custom_type = $value : parent::assignMember($name, $value),
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operator_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->operator_ids = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
