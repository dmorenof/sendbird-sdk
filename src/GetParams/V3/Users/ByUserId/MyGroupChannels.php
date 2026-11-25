<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\Users\ByUserId;

final class MyGroupChannels extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiToken',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'channel_urls' => 'channel_urls',
        'created_after' => 'created_after',
        'created_before' => 'created_before',
        'custom_type_startswith' => 'custom_type_startswith',
        'custom_types' => 'custom_types',
        'distinct_mode' => 'distinct_mode',
        'hidden_mode' => 'hidden_mode',
        'include_sorted_metaarray_in_last_message' => 'include_sorted_metaarray_in_last_message',
        'limit' => 'limit',
        'member_state_filter' => 'member_state_filter',
        'members_exactly_in' => 'members_exactly_in',
        'members_include_in' => 'members_include_in',
        'members_nickname' => 'members_nickname',
        'members_nickname_contains' => 'members_nickname_contains',
        'members_nickname_startswith' => 'members_nickname_startswith',
        'metacounter_key' => 'metacounter_key',
        'metacounter_value_gt' => 'metacounter_value_gt',
        'metacounter_value_gte' => 'metacounter_value_gte',
        'metacounter_value_lt' => 'metacounter_value_lt',
        'metacounter_value_lte' => 'metacounter_value_lte',
        'metacounter_values' => 'metacounter_values',
        'metadata_key' => 'metadata_key',
        'metadata_order_key' => 'metadata_order_key',
        'metadata_value_startswith' => 'metadata_value_startswith',
        'metadata_values' => 'metadata_values',
        'name' => 'name',
        'name_contains' => 'name_contains',
        'name_startswith' => 'name_startswith',
        'order' => 'order',
        'public_mode' => 'public_mode',
        'query_type' => 'query_type',
        'search_fields' => 'search_fields',
        'search_query' => 'search_query',
        'show_delivery_receipt' => 'show_delivery_receipt',
        'show_empty' => 'show_empty',
        'show_frozen' => 'show_frozen',
        'show_member' => 'show_member',
        'show_metadata' => 'show_metadata',
        'show_read_receipt' => 'show_read_receipt',
        'super_mode' => 'super_mode',
        'token' => 'token',
        'unread_filter' => 'unread_filter',
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

    public string $apiToken;
    public ?string $channel_urls;
    public ?int $created_after;
    public ?int $created_before;
    public ?string $custom_type_startswith;
    public ?string $custom_types;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\DistinctModeEnum $distinct_mode;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\HiddenModeEnum $hidden_mode;
    public ?bool $include_sorted_metaarray_in_last_message;
    public ?int $limit;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\StateFilterEnum $member_state_filter;
    public ?string $members_exactly_in;
    public ?string $members_include_in;
    public ?string $members_nickname;
    public ?string $members_nickname_contains;
    public ?string $members_nickname_startswith;
    public ?string $metacounter_key;
    public ?string $metacounter_value_gt;
    public ?string $metacounter_value_gte;
    public ?string $metacounter_value_lt;
    public ?string $metacounter_value_lte;
    public ?string $metacounter_values;
    public ?string $metadata_key;
    public ?string $metadata_order_key;
    public ?string $metadata_value_startswith;
    public ?string $metadata_values;
    public ?string $name;
    public ?string $name_contains;
    public ?string $name_startswith;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\QueryOrderEnum $order;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\PublicModeEnum $public_mode;
    public ?string $query_type;
    public ?string $search_fields;
    public ?string $search_query;
    public ?bool $show_delivery_receipt;
    public ?bool $show_empty;
    public ?bool $show_frozen;
    public ?bool $show_member;
    public ?bool $show_metadata;
    public ?bool $show_read_receipt;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\SuperModeEnum $super_mode;
    public ?string $token;
    public ?\SendbirdSDK\Enums\V3\Users\ByUserId\MyGroupChannels\Get\Query\UnreadFilterEnum $unread_filter;
}
