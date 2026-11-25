<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs;

/**
 * Example: {"color":{"accent_color":"accent_color","bot_message_color":"bot_message_color","theme":"theme"},"toggle_button_type":"toggle_button_type","toggle_button_url":"toggle_button_url","auto_open":true}
 */
final class ListBotsResponseBotsInnerBotStyle extends \Dmorenof\SdkRuntime\DTO
{
    public bool $auto_open;
    public \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBotStyleColor $color;
    public ?string $toggle_button_type;
    public ?string $toggle_button_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'auto_open' => is_bool($value) ? $this->auto_open = $value : parent::assignMember($name, $value),
            'color' => $value instanceof \stdClass ? $this->color = new \SendbirdSDK\DTOs\ListBotsResponseBotsInnerBotStyleColor($value) : parent::assignMember($name, $value),
            'toggle_button_type' => $value === null || is_string($value) ? $this->toggle_button_type = $value : parent::assignMember($name, $value),
            'toggle_button_url' => $value === null || is_string($value) ? $this->toggle_button_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
