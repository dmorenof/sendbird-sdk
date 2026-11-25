<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Update\ExtraDataInAMessage;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public string $mode;
    public \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection $sorted_metaarray;
    public bool $upsert;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mode' => is_string($value) ? $this->mode = $value : parent::assignMember($name, $value),
            'sorted_metaarray' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sorted_metaarray = new \SendbirdSDK\Collections\Send\ABotMessage\Request\SortedMetaarrayCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendbirdSDK\DTOs\Sendbird\SortedMetaarrayInner::class)) : parent::assignMember($name, $value),
            'upsert' => is_bool($value) ? $this->upsert = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
