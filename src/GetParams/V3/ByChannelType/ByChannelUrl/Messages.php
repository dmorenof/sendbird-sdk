<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\ByChannelType\ByChannelUrl;

final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message_id',
    'message_ts',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'custom_types' => 'custom_types',
        'include' => 'include_',
        'include_parent_message_info' => 'include_parent_message_info',
        'include_poll_details' => 'include_poll_details',
        'include_reactions' => 'include_reactions',
        'include_reply_type' => 'include_reply_type',
        'include_thread_info' => 'include_thread_info',
        'including_removed' => 'including_removed',
        'message_id' => 'message_id',
        'message_ts' => 'message_ts',
        'message_type' => 'message_type',
        'next_limit' => 'next_limit',
        'operator_filter' => 'operator_filter',
        'prev_limit' => 'prev_limit',
        'reverse' => 'reverse',
        'sender_id' => 'sender_id',
        'sender_ids' => 'sender_ids',
        'show_subchannel_messages_only' => 'show_subchannel_messages_only',
        'user_id' => 'user_id',
        'with_sorted_meta_array' => 'with_sorted_meta_array',
    ],
    'header' => [
        'api-token' => 'apiToken',
    ],
];

    protected const array PROPERTY_MAP = [
    'api-token' => 'apiToken',
    'include' => 'include_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'apiToken' => 'api-token',
    'include_' => 'include',
];

    public ?string $apiToken;
    public ?string $custom_types;
    public ?bool $include_;
    public ?bool $include_parent_message_info;
    public ?bool $include_poll_details;
    public ?bool $include_reactions;
    public ?\SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Query\ReplyTypeEnum $include_reply_type;
    public ?bool $include_thread_info;
    public ?bool $including_removed;
    public int $message_id;
    public int $message_ts;
    public ?\SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Query\MessageTypeEnum $message_type;
    public ?int $next_limit;
    public ?\SendbirdSDK\Enums\V3\ByChannelType\ByChannelUrl\Messages\Get\Query\OperatorFilterEnum $operator_filter;
    public ?int $prev_limit;
    public ?bool $reverse;
    public ?string $sender_id;
    public ?string $sender_ids;
    public ?bool $show_subchannel_messages_only;
    public ?string $user_id;
    public ?bool $with_sorted_meta_array;
}
