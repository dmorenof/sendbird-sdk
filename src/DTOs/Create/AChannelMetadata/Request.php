<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\AChannelMetadata;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'metadata',
    ];

    public bool $include_ts;
    public ?\SendbirdSDK\DTOs\Create\AChannelMetadata\Request\MetadataDTO $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'include_ts' => is_bool($value) ? $this->include_ts = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
