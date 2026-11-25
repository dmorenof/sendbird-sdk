<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Example: {"is_triggered_by_message_read":true,"message_survival_seconds":6}
 */
final class DisappearingMessage extends \Dmorenof\SdkRuntime\DTO
{
    public bool $is_triggered_by_message_read;
    public int $message_survival_seconds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_triggered_by_message_read' => is_bool($value) ? $this->is_triggered_by_message_read = $value : parent::assignMember($name, $value),
            'message_survival_seconds' => is_int($value) ? $this->message_survival_seconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
