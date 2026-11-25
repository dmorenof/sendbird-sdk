<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Sendbird;

/**
 * Specifies the extended message payload which is used to send a message with a custom message type.
 */
final class ExtendedMessagePayload extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * JSON format you want to embed in message, eq : {"title": "title", "image": "https://link.to/image.jpg"}
     */
    public \SendbirdSDK\DTOs\Sendbird\ExtendedMessagePayload\CustomViewDTO $custom_view;
    /**
     * Specifies an array of suggested replies to be sent with the message.
     */
    public \SendbirdSDK\Collections\StringCollection $suggested_replies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'suggested_replies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->suggested_replies = new \SendbirdSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
