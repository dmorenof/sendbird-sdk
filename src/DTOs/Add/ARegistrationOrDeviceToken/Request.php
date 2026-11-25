<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Add\ARegistrationOrDeviceToken;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public string $apns_device_token;
    public string $gcm_reg_token;
    public string $huawei_device_token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apns_device_token' => is_string($value) ? $this->apns_device_token = $value : parent::assignMember($name, $value),
            'gcm_reg_token' => is_string($value) ? $this->gcm_reg_token = $value : parent::assignMember($name, $value),
            'huawei_device_token' => is_string($value) ? $this->huawei_device_token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
