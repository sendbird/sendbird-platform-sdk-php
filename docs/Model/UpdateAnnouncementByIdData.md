# # UpdateAnnouncementByIdData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unique_id** | **string** | Specifies the unique ID of the announcement to update. |
**action** | **string** | Specifies an action to take on the announcement. If this property is updated, other specified properties in the request are not effective. Acceptable values are limited to remove, pause, resume, and cancel. The [Announcement actions](#2-update-an-announcement-3-how-to-change-announcement-status) table explains each action in detail. | [optional]
**announcement_group** | **string** | Specifies the name of an announcement group to retrieve. If not specified, all announcements are returned, regardless of their group. | [optional]
**create_channel** | **bool** | Determines whether to create a new channel if there is no existing channel that matches with the target options including target_at and target_list. | [optional]
**create_channel_options_name** | **string** | Specifies the name of the channel. (Default: Group Channel) | [optional]
**create_channel_options_cover_url** | **string** | Specifies the URL of the cover image. | [optional]
**create_channel_options_custom_type** | **string** | Specifies the custom channel type. | [optional]
**create_channel_options_data** | **string** | Specifies additional channel information such as a long description of the channel or &#x60;JSON&#x60; formatted string. | [optional]
**create_channel_options_distinct** | **string** | Determines whether to create a [distinct](/docs/chat/v3/platform-api/guides/channel-types#2-group-channel) channel. (Default: true) | [optional]
**message_user_id** | **string** | Specifies the unique ID of the announcement sender. | [optional]
**message_content** | **string** | Specifies the content of the message. | [optional]
**message_data** | **string** | Specifies additional message information such as custom font size, font type or &#x60;JSON&#x60; formatted string. | [optional]
**enable_push** | **bool** | Determines whether to turn on push notification for the announcement. If set to true, push notifications will be sent for announcements. | [optional]
**scheduled_at** | **int** | Specifies the time to start the announcement, in [Unix milliseconds](/docs/chat/v3/platform-api/guides/miscellaneous#2-timestamps) format. (Default: current timestamp) | [optional]
**end_at** | **int** | Specifies the time to permanently end the announcement, in [Unix milliseconds](/docs/chat/v3/platform-api/guides/miscellaneous#2-timestamps) format, even if the announcement is not sent to all its targets. | [optional]
**cease_at** | **string** | Specifies the time to temporarily put the announcement on hold in UTC. The string is represented in HHMM format. This property should be specified in conjunction with the resume_at below. | [optional]
**resume_at** | **string** | Specifies the time to automatically resume the on-hold announcement in UTC. The string is represented in HHMM format. This property should be specified in conjunction with the cease_at above. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
