<?php

declare(strict_types=1);

namespace SendbirdSDK\GetParams\V3\GroupChannels\ByChannelUrl;

final class Members extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'include_push_preference' => 'include_push_preference',
            'limit' => 'limit',
            'member_active_mode_filter' => 'member_active_mode_filter',
            'member_state_filter' => 'member_state_filter',
            'muted_member_filter' => 'muted_member_filter',
            'nickname_startswith' => 'nickname_startswith',
            'operator_filter' => 'operator_filter',
            'order' => 'order',
            'show_delivery_receipt' => 'show_delivery_receipt',
            'show_member_is_muted' => 'show_member_is_muted',
            'show_read_receipt' => 'show_read_receipt',
            'token' => 'token',
            'user_id' => 'user_id',
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
    public ?bool $include_push_preference;
    public ?int $limit;
    public ?\SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query\ModeFilterEnum $member_active_mode_filter;
    public ?\SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query\StateFilterEnum $member_state_filter;
    public ?\SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query\MemberFilterEnum $muted_member_filter;
    public ?string $nickname_startswith;
    public ?\SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query\OperatorFilterEnum $operator_filter;
    public ?\SendbirdSDK\Enums\V3\GroupChannels\ByChannelUrl\Members\Get\Query\QueryOrderEnum $order;
    public ?bool $show_delivery_receipt;
    public ?bool $show_member_is_muted;
    public ?bool $show_read_receipt;
    public ?string $token;
    public ?string $user_id;
}
