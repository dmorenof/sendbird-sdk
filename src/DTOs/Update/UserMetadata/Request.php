<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\UserMetadata;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'metadata',
];

    public ?\SendbirdSDK\DTOs\Update\UserMetadata\Request\MetadataDTO $metadata;
    public ?bool $upsert;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'upsert' => $value === null || is_bool($value) ? $this->upsert = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
