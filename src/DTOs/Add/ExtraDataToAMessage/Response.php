<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Add\ExtraDataToAMessage;

/**
 * Example: {"sorted_metaarray":[{"value":["value","value"],"key":"key"},{"value":["value","value"],"key":"key"}]}
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
