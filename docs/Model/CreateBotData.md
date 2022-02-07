# # CreateBotData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bot_userid** | **string** | Specifies the unique ID of the bot. The length is limited to 80 characters. |
**bot_nickname** | **string** | Specifies the bot&#39;s nickname. The length is limited to 80 characters. |
**bot_profile_url** | **string** | Specifies the URL of the bot&#39;s profile image. The size is limited to 2,048 characters. |
**bot_type** | **string** | Specifies the type of the bot that you can specify for categorization. The length is limited to 128 characters. |
**bot_callback_url** | **string** | Specifies the server URL where bot is located to receive all events, requests, and data forwarded from an application. For security reasons, it is highly recommended that you use an SSL server. The length is limited to 1,024 characters. |
**is_privacy_mode** | **bool** | In the channels of where the bot is a member, determines whether to only forward the messages with the specific conditions to the bot or forword all messages to the bot, for privacy concerns. If set to true, only messages that start with a &#39;/&#39; or mention the bot_userid are forwarded to the bot. If set to false, all messages are forwarded. |
**enable_mark_as_read** | **bool** | Determines whether to mark the bot&#39;s message as read upon sending it. (Default: true) | [optional]
**show_member** | **bool** | Determines whether to include information about the members of each channel in a callback response. (Default: false) | [optional]
**channel_invitation_preference** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
