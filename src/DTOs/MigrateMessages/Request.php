<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\MigrateMessages;

/**
 * Example: {"rewind_read_ts":true,"messages":[null,null],"update_read_ts":true}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\MigrateMessages\Request\MessagesCollection $messages;
    public bool $rewind_read_ts;
    public bool $update_read_ts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'rewind_read_ts' => is_bool($value) ? $this->rewind_read_ts = $value : parent::assignMember($name, $value),
            'update_read_ts' => is_bool($value) ? $this->update_read_ts = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
