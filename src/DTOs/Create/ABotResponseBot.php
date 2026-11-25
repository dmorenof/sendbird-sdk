<?php

declare(strict_types=1);

namespace SendbirdSDK\DTOs\Create;

/**
 * Example: {"feedback":true,"bot_profile_url":"bot_profile_url","bot_userid":"bot_userid","bot_metadata":"{}","bot_type":"bot_type","bot_nickname":"bot_nickname","bot_token":"bot_token","bot_require_auth_for_profile_image":true,"ai_agent_type":"ai_agent_type"}
 */
final class ABotResponseBot extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bot_userid',
];

    public string $ai_agent_type;
    public \SendbirdSDK\DTOs\Create\ABotResponseBot\BotMetadataDTO $bot_metadata;
    public string $bot_nickname;
    public string $bot_profile_url;
    public bool $bot_require_auth_for_profile_image;
    public string $bot_token;
    public string $bot_type;
    public string $bot_userid;
    public bool $feedback;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ai_agent_type' => is_string($value) ? $this->ai_agent_type = $value : parent::assignMember($name, $value),
            'bot_nickname' => is_string($value) ? $this->bot_nickname = $value : parent::assignMember($name, $value),
            'bot_profile_url' => is_string($value) ? $this->bot_profile_url = $value : parent::assignMember($name, $value),
            'bot_require_auth_for_profile_image' => is_bool($value) ? $this->bot_require_auth_for_profile_image = $value : parent::assignMember($name, $value),
            'bot_token' => is_string($value) ? $this->bot_token = $value : parent::assignMember($name, $value),
            'bot_type' => is_string($value) ? $this->bot_type = $value : parent::assignMember($name, $value),
            'bot_userid' => is_string($value) ? $this->bot_userid = $value : parent::assignMember($name, $value),
            'feedback' => is_bool($value) ? $this->feedback = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
