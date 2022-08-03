# # OcUpdateChannelByUrlData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_url** | **string** | Specifies the URL of the channel to update. |
**name** | **string** | Specifies the channel topic, or the name of the channel. The length is limited to 191 characters. |
**cover_url** | **string** | Specifies the URL of the cover image. The length is limited to 2,048 characters. |
**cover_file** | **\SplFileObject** | Uploads the file for the channel cover image. |
**custom_type** | **string** | Specifies the custom channel type which is used for channel grouping. The length is limited to 128 characters.&lt;br /&gt;&lt;br /&gt; Custom types are also used within Sendbird&#39;s [Advanced analytics](/docs/chat/v3/platform-api/guides/advanced-analytics) to segment metrics, which enables the sub-classification of data views. |
**data** | **string** | Specifies additional channel information such as a long description of the channel or &#x60;JSON&#x60; formatted string. |
**operator_ids** | **string[]** | Specifies an array of one or more user IDs to register as operators of the channel. The maximum allowed number of operators per channel is 100. Operators can delete any messages in the channel, and can also receive all messages that have been throttled.&lt;br/&gt;&lt;br/&gt;  Operators cannot view messages that have been [moderated by](/docs/chat/v3/platform-api/guides/filter-and-moderation) the domain filter or profanity filter. Only the sender will be notified that the message has been blocked. |
**operators** | **string[]** | (Deprecated) Specifies the string IDs of the users registered as channel operators. Operators can delete any messages in the channel, and can also receive all messages that have been throttled. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
