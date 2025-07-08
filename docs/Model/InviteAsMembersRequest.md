# # InviteAsMembersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hidden_status** | **object** | Specifies one or more key-value pair items which set the channel&#39;s hidden status for each user. The key should be a user_id and the value should be their hidden status. Acceptable values are limited to the following:&lt;br /&gt;- unhidden (default): the channel is included in when retrieving a list of group channels.&lt;br /&gt;- hidden_allow_auto_unhide: the channel automatically gets unhidden when receiving a new message.&lt;br /&gt;- hidden_prevent_auto_unhide: the channel keeps hidden though receiving a new message. | [optional]
**invitation_status** | **object** | Specifies one or more key-value pair items which set the invitation status of each user invited to the channel. The key should be a user_id and the value should be their joining status. Acceptable values are joined, invited_by_friend, and invited_by_non_friend. (Default: joined) | [optional]
**inviter_id** | **string** |  | [optional]
**user_ids** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
