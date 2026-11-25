<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"accent_color":"accent_color","bot_message_color":"bot_message_color","theme":"theme"}
 */
final class ListBotsResponseBotsInnerBotStyleColor extends \Dmorenof\SdkRuntime\DTO
{
    public string $accent_color;
    public string $bot_message_color;
    public string $theme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accent_color' => is_string($value) ? $this->accent_color = $value : parent::assignMember($name, $value),
            'bot_message_color' => is_string($value) ? $this->bot_message_color = $value : parent::assignMember($name, $value),
            'theme' => is_string($value) ? $this->theme = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
