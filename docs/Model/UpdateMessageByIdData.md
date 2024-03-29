# # UpdateMessageByIdData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_type** | **string** | Specifies the type of the channel. Either open_channels or group_channels. | [optional]
**channel_url** | **string** | Specifies the URL of the target channel. | [optional]
**message_id** | **int** | Specifies the unique ID of the message to update. |
**message_type** | **string** | Specifies the type of the message as ADMM. | [optional]
**message** | **string** | Specifies the content of the message. | [optional]
**custom_type** | **string** | Specifies a custom message type which is used for message grouping. The length is limited to 128 characters.&lt;br /&gt;&lt;br /&gt; Custom types are also used within Sendbird&#39;s [Advanced analytics](/docs/chat/v3/platform-api/guides/advanced-analytics) to segment metrics, which enables the sub-classification of data views. | [optional]
**data** | **string** | Specifies additional message information such as custom font size, font type or &#x60;JSON&#x60; formatted string. | [optional]
**mention_type** | **string** | Specifies the mentioning method which indicates the user scope who will get a notification for the message. Acceptable values are users and channel. If set to users, only the specified users with the mentioned_users property below will get notified. If set to channel, all users in the channel will get notified. (Default: users) | [optional]
**mentioned_user_ids** | **string[]** | Specifies an array of one or more IDs of the users who will get a notification for the message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
