# Sendbird SDK for PHP: operations

92 operations. Each is a static method of a facade class (`SendbirdSDK\...`); configure the SDK once with `SendbirdPlatformSDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Schedule an announcement | POST | `/v3/announcements` | `V3\Announcements::post()` |
| View number of daily active users | GET | `/v3/applications/dau` | `V3\Applications\Dau::get()` |
| View number of monthly active users | GET | `/v3/applications/mau` | `V3\Applications\Mau::get()` |
| List bots | GET | `/v3/bots` | `V3\Bots::get()` |
| Create a bot | POST | `/v3/bots` | `V3\Bots::post()` |
| Delete a bot | DELETE | `/v3/bots/{bot_userid}` | `V3\Bots::deleteByBotUserid()` |
| View a bot | GET | `/v3/bots/{bot_userid}` | `V3\Bots::getByBotUserid()` |
| Update a bot | PUT | `/v3/bots/{bot_userid}` | `V3\Bots::putByBotUserid()` |
| Leave channels - When leaving all channels | DELETE | `/v3/bots/{bot_userid}/channels` | `V3\Bots\ByBotUserid\Channels::delete()` |
| Join channels | POST | `/v3/bots/{bot_userid}/channels` | `V3\Bots\ByBotUserid\Channels::post()` |
| Leave channels - When leaving a specific channel | DELETE | `/v3/bots/{bot_userid}/channels/{channel_url}` | `V3\Bots\ByBotUserid\Channels::deleteByChannelUrl()` |
| Send a bot's message | POST | `/v3/bots/{bot_userid}/send` | `V3\Bots\ByBotUserid\Send::post()` |
| List channels | GET | `/v3/group_channels` | `V3\GroupChannels::get()` |
| Create a group channel | POST | `/v3/group_channels` | `V3\GroupChannels::post()` |
| Delete a group channel | DELETE | `/v3/group_channels/{channel_url}` | `V3\GroupChannels::deleteByChannelUrl()` |
| Get a group channel | GET | `/v3/group_channels/{channel_url}` | `V3\GroupChannels::getByChannelUrl()` |
| Update a group channel | PUT | `/v3/group_channels/{channel_url}` | `V3\GroupChannels::putByChannelUrl()` |
| Accept an invitation | PUT | `/v3/group_channels/{channel_url}/accept` | `V3\GroupChannels\ByChannelUrl\Accept::put()` |
| Freeze a group channel | PUT | `/v3/group_channels/{channel_url}/freeze` | `V3\GroupChannels\ByChannelUrl\Freeze::put()` |
| Unhide a channel | DELETE | `/v3/group_channels/{channel_url}/hide` | `V3\GroupChannels\ByChannelUrl\Hide::delete()` |
| Hide a channel | PUT | `/v3/group_channels/{channel_url}/hide` | `V3\GroupChannels\ByChannelUrl\Hide::put()` |
| Invite as members | POST | `/v3/group_channels/{channel_url}/invite` | `V3\GroupChannels\ByChannelUrl\Invite::post()` |
| Join a channel | PUT | `/v3/group_channels/{channel_url}/join` | `V3\GroupChannels\ByChannelUrl\Join::put()` |
| Leave a channel | PUT | `/v3/group_channels/{channel_url}/leave` | `V3\GroupChannels\ByChannelUrl\Leave::put()` |
| List members | GET | `/v3/group_channels/{channel_url}/members` | `V3\GroupChannels\ByChannelUrl\Members::get()` |
| Check if member | GET | `/v3/group_channels/{channel_url}/members/{user_id}` | `V3\GroupChannels\ByChannelUrl\Members::getByUserId()` |
| Mark all messages as read | PUT | `/v3/group_channels/{channel_url}/messages/mark_as_read` | `V3\GroupChannels\ByChannelUrl\Messages\MarkAsRead::put()` |
| Cancel the registration of operators | DELETE | `/v3/group_channels/{channel_url}/operators` | `V3\GroupChannels\ByChannelUrl\Operators::delete()` |
| List operators | GET | `/v3/group_channels/{channel_url}/operators` | `V3\GroupChannels\ByChannelUrl\Operators::get()` |
| Register operators to a group channel | POST | `/v3/group_channels/{channel_url}/operators` | `V3\GroupChannels\ByChannelUrl\Operators::post()` |
| Reset chat history | PUT | `/v3/group_channels/{channel_url}/reset_user_history` | `V3\GroupChannels\ByChannelUrl\ResetUserHistory::put()` |
| Stop typing indicators | DELETE | `/v3/group_channels/{channel_url}/typing` | `V3\GroupChannels\ByChannelUrl\Typing::delete()` |
| Start typing indicators | POST | `/v3/group_channels/{channel_url}/typing` | `V3\GroupChannels\ByChannelUrl\Typing::post()` |
| Migrate messages | POST | `/v3/migration/{target_channel_url}` | `V3\Migration::postByTargetChannelUrl()` |
| List open channels | GET | `/v3/open_channels` | `V3\OpenChannels::get()` |
| Create an open channel | POST | `/v3/open_channels` | `V3\OpenChannels::post()` |
| Delete an open channel | DELETE | `/v3/open_channels/{channel_url}` | `V3\OpenChannels::deleteByChannelUrl()` |
| Get an open channel | GET | `/v3/open_channels/{channel_url}` | `V3\OpenChannels::getByChannelUrl()` |
| Update an open channel | PUT | `/v3/open_channels/{channel_url}` | `V3\OpenChannels::putByChannelUrl()` |
| Freeze an open channel | PUT | `/v3/open_channels/{channel_url}/freeze` | `V3\OpenChannels\ByChannelUrl\Freeze::put()` |
| Unregister operators from an open channel | DELETE | `/v3/open_channels/{channel_url}/operators` | `V3\OpenChannels\ByChannelUrl\Operators::delete()` |
| List operators of an open channel | GET | `/v3/open_channels/{channel_url}/operators` | `V3\OpenChannels\ByChannelUrl\Operators::get()` |
| Register operators to an open channel | POST | `/v3/open_channels/{channel_url}/operators` | `V3\OpenChannels\ByChannelUrl\Operators::post()` |
| Remove a registration or device token from an owner | DELETE | `/v3/push/device_tokens/{token_type}/{token}` | `V3\Push\DeviceTokens\ByTokenType::deleteByToken()` |
| View who owns a registration or device token | GET | `/v3/push/device_tokens/{token_type}/{token}` | `V3\Push\DeviceTokens\ByTokenType::getByToken()` |
| List users | GET | `/v3/users` | `V3\Users::get()` |
| Create a user | POST | `/v3/users` | `V3\Users::post()` |
| Delete a user | DELETE | `/v3/users/{user_id}` | `V3\Users::deleteByUserId()` |
| View a user | GET | `/v3/users/{user_id}` | `V3\Users::getByUserId()` |
| Update a user | PUT | `/v3/users/{user_id}` | `V3\Users::putByUserId()` |
| List blocked users | GET | `/v3/users/{user_id}/block` | `V3\Users\ByUserId\Block::get()` |
| Block a user | POST | `/v3/users/{user_id}/block` | `V3\Users\ByUserId\Block::post()` |
| Unblock a user | DELETE | `/v3/users/{user_id}/block/{target_id}` | `V3\Users\ByUserId\Block::deleteByTargetId()` |
| Get channel invitation preference | GET | `/v3/users/{user_id}/channel_invitation_preference` | `V3\Users\ByUserId\ChannelInvitationPreference::get()` |
| Update channel invitation preference | PUT | `/v3/users/{user_id}/channel_invitation_preference` | `V3\Users\ByUserId\ChannelInvitationPreference::put()` |
| View count preference of a channel | GET | `/v3/users/{user_id}/count_preference/{channel_url}` | `V3\Users\ByUserId\CountPreference::getByChannelUrl()` |
| Update count preference of a channel | PUT | `/v3/users/{user_id}/count_preference/{channel_url}` | `V3\Users\ByUserId\CountPreference::putByChannelUrl()` |
| Mark all messages as read | PUT | `/v3/users/{user_id}/mark_as_read_all` | `V3\Users\ByUserId\MarkAsReadAll::put()` |
| Delete user metadata | DELETE | `/v3/users/{user_id}/metadata` | `V3\Users\ByUserId\Metadata::delete()` |
| Create user metadata | POST | `/v3/users/{user_id}/metadata` | `V3\Users\ByUserId\Metadata::post()` |
| Update user metadata | PUT | `/v3/users/{user_id}/metadata` | `V3\Users\ByUserId\Metadata::put()` |
| Delete user metadata | DELETE | `/v3/users/{user_id}/metadata/{key}` | `V3\Users\ByUserId\Metadata::deleteByKey()` |
| Get specific user metadata | GET | `/v3/users/{user_id}/metadata/{key}` | `V3\Users\ByUserId\Metadata::getByKey()` |
| Update specific user metadata | PUT | `/v3/users/{user_id}/metadata/{key}` | `V3\Users\ByUserId\Metadata::putByKey()` |
| List my group channels | GET | `/v3/users/{user_id}/my_group_channels` | `V3\Users\ByUserId\MyGroupChannels::get()` |
| Leave my group channels | PUT | `/v3/users/{user_id}/my_group_channels/leave` | `V3\Users\ByUserId\MyGroupChannels\Leave::put()` |
| Remove a registration or device token - When unregistering all device tokens | DELETE | `/v3/users/{user_id}/push` | `V3\Users\ByUserId\Push::delete()` |
| Choose a push notification content template | PUT | `/v3/users/{user_id}/push/template` | `V3\Users\ByUserId\Push\Template::put()` |
| List registration or device tokens | GET | `/v3/users/{user_id}/push/{token_type}` | `V3\Users\ByUserId\Push::getByTokenType()` |
| Add a registration or device token | POST | `/v3/users/{user_id}/push/{token_type}` | `V3\Users\ByUserId\Push::postByTokenType()` |
| Remove a registration or device token - When unregistering a specific token | DELETE | `/v3/users/{user_id}/push/{token_type}/{token}` | `V3\Users\ByUserId\Push\ByTokenType::deleteByToken()` |
| Reset push preferences | DELETE | `/v3/users/{user_id}/push_preference` | `V3\Users\ByUserId\PushPreference::delete()` |
| View push preferences | GET | `/v3/users/{user_id}/push_preference` | `V3\Users\ByUserId\PushPreference::get()` |
| Update push preferences | PUT | `/v3/users/{user_id}/push_preference` | `V3\Users\ByUserId\PushPreference::put()` |
| View push preferences for a channel | GET | `/v3/users/{user_id}/push_preference/{channel_url}` | `V3\Users\ByUserId\PushPreference::getByChannelUrl()` |
| Update push preferences for a channel | PUT | `/v3/users/{user_id}/push_preference/{channel_url}` | `V3\Users\ByUserId\PushPreference::putByChannelUrl()` |
| Create user token | POST | `/v3/users/{user_id}/token` | `V3\Users\ByUserId\Token::post()` |
| View number of channels with unread messages | GET | `/v3/users/{user_id}/unread_channel_count` | `V3\Users\ByUserId\UnreadChannelCount::get()` |
| View number of unread messages | GET | `/v3/users/{user_id}/unread_message_count` | `V3\Users\ByUserId\UnreadMessageCount::get()` |
| List messages | GET | `/v3/{channel_type}/{channel_url}/messages` | `V3\ByChannelType\ByChannelUrl\Messages::get()` |
| Send a message | POST | `/v3/{channel_type}/{channel_url}/messages` | `V3\ByChannelType\ByChannelUrl\Messages::post()` |
| Get total number of messages in a channel | GET | `/v3/{channel_type}/{channel_url}/messages/total_count` | `V3\ByChannelType\ByChannelUrl\Messages\TotalCount::get()` |
| Delete a message | DELETE | `/v3/{channel_type}/{channel_url}/messages/{message_id}` | `V3\ByChannelType\ByChannelUrl\Messages::deleteByMessageId()` |
| Get a message | GET | `/v3/{channel_type}/{channel_url}/messages/{message_id}` | `V3\ByChannelType\ByChannelUrl\Messages::getByMessageId()` |
| Update a message | PUT | `/v3/{channel_type}/{channel_url}/messages/{message_id}` | `V3\ByChannelType\ByChannelUrl\Messages::putByMessageId()` |
| Remove extra data from a message | DELETE | `/v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray` | `V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray::delete()` |
| Add extra data to a message | POST | `/v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray` | `V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray::post()` |
| Update extra data in a message | PUT | `/v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray` | `V3\ByChannelType\ByChannelUrl\Messages\ByMessageId\SortedMetaarray::put()` |
| Delete a channel metadata - When deleting all items of a channel metadata | DELETE | `/v3/{channel_type}/{channel_url}/metadata` | `V3\ByChannelType\ByChannelUrl\Metadata::delete()` |
| View a channel metadata - When retrieving all items of a channel metadata | GET | `/v3/{channel_type}/{channel_url}/metadata` | `V3\ByChannelType\ByChannelUrl\Metadata::get()` |
| Create a channel metadata | POST | `/v3/{channel_type}/{channel_url}/metadata` | `V3\ByChannelType\ByChannelUrl\Metadata::post()` |
| Update a channel metadata - When updating existing items of a channel metadata by their ke | PUT | `/v3/{channel_type}/{channel_url}/metadata` | `V3\ByChannelType\ByChannelUrl\Metadata::put()` |
