<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"pii_masking":true,"banned_phrases":["",""],"message":"message","enabled":true}
 */
final class ListBotsResponseBotsInnerSafeguard extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * @var list<mixed>
     */
    public array $banned_phrases;
    public bool $enabled;
    public string $message;
    public bool $pii_masking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'pii_masking' => is_bool($value) ? $this->pii_masking = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
