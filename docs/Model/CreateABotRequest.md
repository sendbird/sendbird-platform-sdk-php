# # CreateABotRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bot_callback_url** | **string** |  |
**bot_nickname** | **string** | Specifies the bot&#39;s nickname. The length is limited to 80 characters. |
**bot_profile_url** | **string** |  |
**bot_type** | **string** |  |
**bot_userid** | **string** | Specifies the unique ID of a bot. The length is limited to 80 characters. |
**is_privacy_mode** | **bool** | Determines whether to forward all or specific messages to the bot in channels where the bot is a member. If set to true, only messages starting with a \&quot;/\&quot; or mentioning the bot_userid are forwarded to the bot. If set to false, all messages are forwarded. This property can help protect the privacy of users&#39; chat logs by configuring the bot to only receive messages addressed to the bot. |
**channel_invitation_preference** | **int** |  | [optional]
**enable_mark_as_read** | **bool** |  | [optional]
**show_member** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
