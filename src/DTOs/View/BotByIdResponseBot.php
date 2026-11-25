<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\View;

/**
 * Example: {"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_token":"bot_token","bot_nickname":"bot_nickname"}
 */
final class BotByIdResponseBot extends \Dmorenof\SdkRuntime\DTO
{
    public \SendbirdSDK\DTOs\View\BotByIdResponseBot\BotMetadataDTO $bot_metadata;
    public string $bot_nickname;
    public string $bot_profile_url;
    public string $bot_token;
    public string $bot_type;
    public string $bot_userid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bot_nickname' => is_string($value) ? $this->bot_nickname = $value : parent::assignMember($name, $value),
            'bot_profile_url' => is_string($value) ? $this->bot_profile_url = $value : parent::assignMember($name, $value),
            'bot_token' => is_string($value) ? $this->bot_token = $value : parent::assignMember($name, $value),
            'bot_type' => is_string($value) ? $this->bot_type = $value : parent::assignMember($name, $value),
            'bot_userid' => is_string($value) ? $this->bot_userid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
