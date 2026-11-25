<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create\AChannelMetadata;

/**
 * Example: {"metadata":"{}","include_ts":0}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: int64
     */
    public int $include_ts;
    public \SendbirdSDK\DTOs\Create\AChannelMetadata\Response\MetadataDTO $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'include_ts' => is_int($value) ? $this->include_ts = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
