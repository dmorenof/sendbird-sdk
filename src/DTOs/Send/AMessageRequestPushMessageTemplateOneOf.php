<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Send;

final class AMessageRequestPushMessageTemplateOneOf extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies the body of the custom push notification template. You can customize the body using the variables sender_name and message, which can be later replaced with corresponding real values when the template is sent out as a notification request to FCM, HMS, or APNs.
     * If not specified, the body by default contains the message content inside the message property.
     */
    public string $body;
    /**
     * Specifies the title of the custom push notification template. You can customize the title using the variables sender_name and message, which can be later replaced with corresponding real values when the template is sent out as a notification request to FCM, HMS, or APNs.
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
