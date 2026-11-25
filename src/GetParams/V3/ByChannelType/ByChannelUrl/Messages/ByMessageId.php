<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl\Messages;

final class ByMessageId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'include_parent_message_info' => 'include_parent_message_info',
        'include_poll_details' => 'include_poll_details',
        'include_reactions' => 'include_reactions',
        'include_thread_info' => 'include_thread_info',
        'with_sorted_meta_array' => 'with_sorted_meta_array',
    ],
    'header' => [
        'api-token' => 'apiToken',
    ],
];

    protected const array PROPERTY_MAP = [
    'api-token' => 'apiToken',
];
    protected const array WIRE_PROPERTY_MAP = [
    'apiToken' => 'api-token',
];

    public ?string $apiToken;
    public ?bool $include_parent_message_info;
    public ?bool $include_poll_details;
    public ?bool $include_reactions;
    public ?bool $include_thread_info;
    public ?bool $with_sorted_meta_array;
}
