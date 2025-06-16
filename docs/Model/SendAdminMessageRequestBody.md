# # SendAdminMessageRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apns_bundle_id** | **string** |  | [optional]
**custom_type** | **string** |  | [optional]
**data** | **string** |  | [optional]
**dedup_id** | **string** |  | [optional]
**is_silent** | **bool** |  | [optional]
**mention_type** | **string** |  | [optional]
**mentioned_user_ids** | **string[]** |  | [optional]
**message** | **string** |  |
**message_type** | **string** | Specifies the type of the message. The value of ADMM represents an admin message. |
**push_message_template** | [**\Sendbird\Model\SendTextMessageRequestBodyPushMessageTemplate**](SendTextMessageRequestBodyPushMessageTemplate.md) |  | [optional]
**send_push** | **bool** |  | [optional]
**sorted_metaarray** | [**\Sendbird\Model\SendbirdSortedMetaarrayInner[]**](SendbirdSortedMetaarrayInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
