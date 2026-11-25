<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Get;

final class AGroupChannelResponseAllOf extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\DTOs\Sendbird\GroupChannelDetailChannel $channel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => $value instanceof \stdClass ? $this->channel = new \SendbirdSDK\DTOs\Sendbird\GroupChannelDetailChannel($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
