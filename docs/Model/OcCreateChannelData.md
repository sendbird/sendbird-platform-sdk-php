# # OcCreateChannelData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Specifies the channel topic, or the name of the channel. The length is limited to 191 characters. (Default: open channel) | [optional]
**channel_url** | **string** | Specifies the URL of the channel. Only numbers, characters, and underscores are allowed. The length is 4 to 100 characters, inclusive. If not specified, a URL is automatically generated. | [optional]
**cover_url** | **string** | Specifies the URL of the cover image. The length is limited to 2,048 characters. | [optional]
**cover_file** | **\SplFileObject** | Uploads a file for the channel cover image. | [optional]
**custom_type** | **string** | Specifies the custom channel type which is used for channel grouping. The length is limited to 128 characters.&lt;br /&gt;&lt;br /&gt; Custom types are also used within Sendbird&#39;s [Advanced analytics](/docs/chat/v3/platform-api/guides/advanced-analytics) to segment metrics, which enables the sub-classification of data views. | [optional]
**data** | **string** | Specifies additional channel information such as a long description of the channel or &#x60;JSON&#x60; formatted string. | [optional]
**is_ephemeral** | **bool** | Determines whether to preserve the messages in the channel for the purpose of retrieving chat history or not. It set to true, the messages in the channel are not saved in the Sendbird database and the chat history can&#39;t be retrieved. (Default: false) | [optional]
**_is_dynamic_partitioned_2_how_dynamic_partitioning_works** | **bool** | Determines whether the channel is an open channel with dynamic partitioning or not. If the value of this property is true, the open channel can create several subchannels in order to accommodate a massive number of usres. (Default: false)&lt;br/&gt;&lt;br/&gt;  For the new Sendbird applications created after December 15, 2020, this property will be automatically set to true. | [optional]
**operator_ids** | **string[]** | Specifies an array of one or more user IDs to register as operators of the channel. The maximum allowed number of operators per channel is 100. Operators can delete any messages in the channel, and can also receive all messages that have been throttled.&lt;br/&gt;&lt;br/&gt;  Operators cannot view messages that have been [moderated by](/docs/chat/v3/platform-api/guides/filter-and-moderation) the domain filter or profanity filter. Only the sender will be notified that the message has been blocked. | [optional]
**operators** | **string[]** | (Deprecated) Specifies the string IDs of the users registered as channel operators. Operators can delete any messages in the channel, and can also receive all messages that have been throttled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
