# # SendTextMessageRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
**message** | **string** |  |
**message_type** | **string** | Specifies the type of the message. The value of MESG represents a text message. |
**poll_id** | **int** |  | [optional]
**push_message_template** | [**\Sendbird\Model\SendTextMessageRequestBodyPushMessageTemplate**](SendTextMessageRequestBodyPushMessageTemplate.md) |  | [optional]
**send_push** | **bool** |  | [optional]
**sorted_metaarray** | [**\Sendbird\Model\SendbirdSortedMetaarrayInner[]**](SendbirdSortedMetaarrayInner.md) |  | [optional]
**sound** | **string** |  | [optional]
**volume** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
