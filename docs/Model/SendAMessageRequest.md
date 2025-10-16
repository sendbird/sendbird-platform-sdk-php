# # SendAMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_type** | **string** |  |
**user_id** | **string** |  |
**message** | **string** | Specifies the content of the message. * This property is required when message_type is MESG or ADMM. | [optional]
**push_message_template** | [**\Sendbird\Model\SendAMessageRequestPushMessageTemplate**](SendAMessageRequestPushMessageTemplate.md) |  | [optional]
**poll_id** | **int** | Specifies the ID of the poll to be associated with the message. * This property is only available for group channels and message_type is MESG. | [optional]
**files** | [**\Sendbird\Model\SendbirdFile**](SendbirdFile.md) |  | [optional]
**require_auth** | **bool** | Determines whether to require an authentication key to verify if the file is being properly accessed. Only the user who uploaded the file or users who are in the channel where the file was uploaded should have access. The authentication key managed internally by the Sendbird system is generated every time a user logs in to the Sendbird server and is valid for three days starting from the last login. If set to false, Sendbird tries to access a file without any key. To access encrypted files, such as the files in the Sendbird server which are by default encrypted, the property must be set to true. (Default: false) The require_auth parameter only works if the file or URL is managed by Sendbird, which means that when you upload files using multipart format or provide URLs that point to the files hosted on the Sendbird server. However, if the file is hosted on a server or service that is not managed by Sendbird, access control and authentication for the file should be handled by the respective server or service hosting the file. | [optional]
**thumbnail1** | **string** | Specifies the URL of the thumbnail of the file. * This property is available when message_type is FILE. | [optional]
**thumbnail2** | **string** | Specifies the URL of the thumbnail of the file. * This property is available when message_type is FILE. | [optional]
**thumbnail3** | **string** | Specifies the URL of the thumbnail of the file. * This property is available when message_type is FILE. | [optional]
**thumbnails** | **string[]** | Specifies the URL of the thumbnail of the file. * This property is available when message_type is FILE. | [optional]
**apns_bundle_id** | **string** |  | [optional]
**apple_critical_alert_options** | **object** |  | [optional]
**created_at** | **int** |  | [optional]
**custom_type** | **string** |  | [optional]
**data** | **string** |  | [optional]
**dedup_id** | **string** |  | [optional]
**include_poll_details** | **bool** |  | [optional]
**is_silent** | **bool** |  | [optional]
**mark_as_read** | **bool** |  | [optional]
**mention_type** | **string** |  | [optional]
**mentioned_user_ids** | **string[]** |  | [optional]
**send_push** | **bool** |  | [optional]
**sorted_metaarray** | [**\Sendbird\Model\SendbirdSortedMetaarrayInner[]**](SendbirdSortedMetaarrayInner.md) |  | [optional]
**sound** | **string** |  | [optional]
**volume** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
