# sendbird-platform-sdk

Sendbird Platform API Javascript SDK

https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/sendbird/sendbird-platform-sdk-php.git"
    }
  ],
  "require": {
    "sendbird/sendbird-platform-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sendbird-platform-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$unique_id = 'unique_id_example'; // string

try {
    $result = $apiInstance->getDetailedOpenRateOfAnnouncementById($api_token, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->getDetailedOpenRateOfAnnouncementById: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-APP_ID.sendbird.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnouncementApi* | [**getDetailedOpenRateOfAnnouncementById**](docs/Api/AnnouncementApi.md#getdetailedopenrateofannouncementbyid) | **GET** /v3/announcement_open_rate/{unique_id} | Get detailed open rate of an announcement
*AnnouncementApi* | [**getDetailedOpenRateOfAnnouncementGroup**](docs/Api/AnnouncementApi.md#getdetailedopenrateofannouncementgroup) | **GET** /v3/announcement_open_rate_by_group/{announcement_group} | Get detailed open rate of an announcement group
*AnnouncementApi* | [**getDetailedOpenStatusOfAnnouncementById**](docs/Api/AnnouncementApi.md#getdetailedopenstatusofannouncementbyid) | **GET** /v3/announcement_open_status/{unique_id} | Get detailed open status of an announcement
*AnnouncementApi* | [**viewAnnouncementById**](docs/Api/AnnouncementApi.md#viewannouncementbyid) | **GET** /v3/announcements/{unique_id} | View an announcement
*ApplicationApi* | [**addApnsPushConfiguration**](docs/Api/ApplicationApi.md#addapnspushconfiguration) | **POST** /v3/applications/push/apns | Add an APNs push configuration
*ApplicationApi* | [**addFcmPushConfiguration**](docs/Api/ApplicationApi.md#addfcmpushconfiguration) | **POST** /v3/applications/push/fcm | Add a FCM push configuration
*ApplicationApi* | [**addHmsPushConfiguration**](docs/Api/ApplicationApi.md#addhmspushconfiguration) | **POST** /v3/applications/push/hms | Add an HMS push configuration
*ApplicationApi* | [**addIpToWhitelist**](docs/Api/ApplicationApi.md#addiptowhitelist) | **PUT** /v3/applications/settings/ip_whitelist | Add an IP to a whitelist
*ApplicationApi* | [**banUsersInChannelsWithCustomChannelType**](docs/Api/ApplicationApi.md#banusersinchannelswithcustomchanneltype) | **POST** /v3/applications/settings_by_channel_custom_type/{custom_type}/ban | Ban users in channels with a custom channel type
*ApplicationApi* | [**deleteAllowedIpsFromWhitelist**](docs/Api/ApplicationApi.md#deleteallowedipsfromwhitelist) | **DELETE** /v3/applications/settings/ip_whitelist | Delete allowed IPs from a whitelist
*ApplicationApi* | [**deleteApnsCertificateById**](docs/Api/ApplicationApi.md#deleteapnscertificatebyid) | **DELETE** /v3/applications/push/apns/cert/{provider_id} | Delete an APNs certificate
*ApplicationApi* | [**generateSecondaryApiToken**](docs/Api/ApplicationApi.md#generatesecondaryapitoken) | **POST** /v3/applications/api_tokens | Generate a secondary API token
*ApplicationApi* | [**listBannedUsersInChannelsWithCustomChannelType**](docs/Api/ApplicationApi.md#listbannedusersinchannelswithcustomchanneltype) | **GET** /v3/applications/settings_by_channel_custom_type/{custom_type}/ban | List banned users in channels with a custom channel type
*ApplicationApi* | [**listMutedUsersInChannelsWithCustomChannelType**](docs/Api/ApplicationApi.md#listmutedusersinchannelswithcustomchanneltype) | **GET** /v3/applications/settings_by_channel_custom_type/{custom_type}/mute | List muted users in channels with a custom channel type
*ApplicationApi* | [**listPushConfigurations**](docs/Api/ApplicationApi.md#listpushconfigurations) | **GET** /v3/applications/push/{push_type} | List push configurations
*ApplicationApi* | [**listPushNotificationContentTemplates**](docs/Api/ApplicationApi.md#listpushnotificationcontenttemplates) | **GET** /v3/applications/push/message_templates | List push notification content templates
*ApplicationApi* | [**listSecondaryApiTokens**](docs/Api/ApplicationApi.md#listsecondaryapitokens) | **GET** /v3/applications/api_tokens | List secondary API tokens
*ApplicationApi* | [**muteUsersInChannelsWithCustomChannelType**](docs/Api/ApplicationApi.md#muteusersinchannelswithcustomchanneltype) | **POST** /v3/applications/settings_by_channel_custom_type/{custom_type}/mute | Mute users in channels with a custom channel type
*ApplicationApi* | [**removePushConfigurationById**](docs/Api/ApplicationApi.md#removepushconfigurationbyid) | **DELETE** /v3/applications/push/{push_type}/{provider_id} | Remove a push configuration
*ApplicationApi* | [**retrieveIpWhitelist**](docs/Api/ApplicationApi.md#retrieveipwhitelist) | **GET** /v3/applications/settings/ip_whitelist | Retrieve an IP whitelist
*ApplicationApi* | [**revokeSecondaryApiTokenByToken**](docs/Api/ApplicationApi.md#revokesecondaryapitokenbytoken) | **DELETE** /v3/applications/api_tokens/{api_token} | Revoke a secondary API token
*ApplicationApi* | [**setDomainFilter**](docs/Api/ApplicationApi.md#setdomainfilter) | **PUT** /v3/applications/settings_global/{custom_type} | Message moderation
*ApplicationApi* | [**unbanUsersInChannelsWithCustomChannelType**](docs/Api/ApplicationApi.md#unbanusersinchannelswithcustomchanneltype) | **DELETE** /v3/applications/settings_by_channel_custom_type/{custom_type}/ban | Unban users in channels with a custom channel type
*ApplicationApi* | [**unmuteUsersInChannelsWithCustomChannelType**](docs/Api/ApplicationApi.md#unmuteusersinchannelswithcustomchanneltype) | **DELETE** /v3/applications/settings_by_channel_custom_type/{custom_type}/mute | Unmute users in channels with a custom channel type
*ApplicationApi* | [**updateApnsPushConfigurationById**](docs/Api/ApplicationApi.md#updateapnspushconfigurationbyid) | **PUT** /v3/applications/push/apns/{provider_id} | Update an APNs push configuration
*ApplicationApi* | [**updateDefaultChannelInvitationPreference**](docs/Api/ApplicationApi.md#updatedefaultchannelinvitationpreference) | **PUT** /v3/applications/default_channel_invitation_preference | Update default channel invitation preference
*ApplicationApi* | [**updateFcmPushConfigurationById**](docs/Api/ApplicationApi.md#updatefcmpushconfigurationbyid) | **PUT** /v3/applications/push/fcm/{provider_id} | Update a FCM push configuration
*ApplicationApi* | [**updateHmsPushConfigurationById**](docs/Api/ApplicationApi.md#updatehmspushconfigurationbyid) | **PUT** /v3/applications/push/hms/{provider_id} | Update an HMS push configuration
*ApplicationApi* | [**updatePushNotificationContentTemplate**](docs/Api/ApplicationApi.md#updatepushnotificationcontenttemplate) | **PUT** /v3/applications/push/message_templates/{template_name} | Update a push notification content template
*ApplicationApi* | [**viewDefaultChannelInvitationPreference**](docs/Api/ApplicationApi.md#viewdefaultchannelinvitationpreference) | **GET** /v3/applications/default_channel_invitation_preference | View default channel invitation preference
*ApplicationApi* | [**viewPushConfigurationById**](docs/Api/ApplicationApi.md#viewpushconfigurationbyid) | **GET** /v3/applications/push/{push_type}/{provider_id} | View a push configuration
*ApplicationApi* | [**viewPushNotificationContentTemplate**](docs/Api/ApplicationApi.md#viewpushnotificationcontenttemplate) | **GET** /v3/applications/push/message_templates/{template_name} | View a push notification content template
*ApplicationApi* | [**viewSecondaryApiTokenByToken**](docs/Api/ApplicationApi.md#viewsecondaryapitokenbytoken) | **GET** /v3/applications/api_tokens/{api_token} | View a secondary API token
*BotApi* | [**createBot**](docs/Api/BotApi.md#createbot) | **POST** /v3/bots | Create a bot
*BotApi* | [**deleteBotById**](docs/Api/BotApi.md#deletebotbyid) | **DELETE** /v3/bots/{bot_userid} | Delete a bot
*BotApi* | [**joinChannels**](docs/Api/BotApi.md#joinchannels) | **POST** /v3/bots/{bot_userid}/channels | Join channels
*BotApi* | [**leaveChannels**](docs/Api/BotApi.md#leavechannels) | **DELETE** /v3/bots/{bot_userid}/channels | Leave channels - When leaving all channels
*BotApi* | [**leaveChannelsByUrl**](docs/Api/BotApi.md#leavechannelsbyurl) | **DELETE** /v3/bots/{bot_userid}/channels/{channel_url} | Leave channels - When leaving a channel by its channel URL
*BotApi* | [**listBots**](docs/Api/BotApi.md#listbots) | **GET** /v3/bots | List bots
*BotApi* | [**sendBotsMessage**](docs/Api/BotApi.md#sendbotsmessage) | **POST** /v3/bots/{bot_userid}/send | Send a bot&#39;s message
*BotApi* | [**updateBotById**](docs/Api/BotApi.md#updatebotbyid) | **PUT** /v3/bots/{bot_userid} | Update a bot
*BotApi* | [**viewBotById**](docs/Api/BotApi.md#viewbotbyid) | **GET** /v3/bots/{bot_userid} | View a bot
*DataExportApi* | [**listDataExportsByMessageChannelOrUser**](docs/Api/DataExportApi.md#listdataexportsbymessagechanneloruser) | **GET** /v3/export/{data_type} | List data exports by message, channel, or user
*DataExportApi* | [**registerAndScheduleDataExport**](docs/Api/DataExportApi.md#registerandscheduledataexport) | **POST** /v3/export/{data_type} | Register and schedule a data export
*DataExportApi* | [**viewDataExportById**](docs/Api/DataExportApi.md#viewdataexportbyid) | **GET** /v3/export/{data_type}/{request_id} | View a data export
*GroupChannelApi* | [**gcAcceptInvitation**](docs/Api/GroupChannelApi.md#gcacceptinvitation) | **PUT** /v3/group_channels/{channel_url}/accept | Accept an invitation
*GroupChannelApi* | [**gcCancelTheRegistrationOfOperators**](docs/Api/GroupChannelApi.md#gccanceltheregistrationofoperators) | **DELETE** /v3/group_channels/{channel_url}/operators | Cancel the registration of operators
*GroupChannelApi* | [**gcCheckIfMemberById**](docs/Api/GroupChannelApi.md#gccheckifmemberbyid) | **GET** /v3/group_channels/{channel_url}/members/{user_id} | Check if member
*GroupChannelApi* | [**gcCreateChannel**](docs/Api/GroupChannelApi.md#gccreatechannel) | **POST** /v3/group_channels | Create a channel
*GroupChannelApi* | [**gcDeclineInvitation**](docs/Api/GroupChannelApi.md#gcdeclineinvitation) | **PUT** /v3/group_channels/{channel_url}/decline | Decline an invitation
*GroupChannelApi* | [**gcDeleteChannelByUrl**](docs/Api/GroupChannelApi.md#gcdeletechannelbyurl) | **DELETE** /v3/group_channels/{channel_url} | Delete a channel
*GroupChannelApi* | [**gcHideOrArchiveChannel**](docs/Api/GroupChannelApi.md#gchideorarchivechannel) | **PUT** /v3/group_channels/{channel_url}/hide | Hide or archive a channel
*GroupChannelApi* | [**gcInviteAsMembers**](docs/Api/GroupChannelApi.md#gcinviteasmembers) | **POST** /v3/group_channels/{channel_url}/invite | Invite as members
*GroupChannelApi* | [**gcJoinChannel**](docs/Api/GroupChannelApi.md#gcjoinchannel) | **PUT** /v3/group_channels/{channel_url}/join | Join a channel
*GroupChannelApi* | [**gcLeaveChannel**](docs/Api/GroupChannelApi.md#gcleavechannel) | **PUT** /v3/group_channels/{channel_url}/leave | Leave a channel
*GroupChannelApi* | [**gcListChannels**](docs/Api/GroupChannelApi.md#gclistchannels) | **GET** /v3/group_channels | List channels
*GroupChannelApi* | [**gcListMembers**](docs/Api/GroupChannelApi.md#gclistmembers) | **GET** /v3/group_channels/{channel_url}/members | List members
*GroupChannelApi* | [**gcListOperators**](docs/Api/GroupChannelApi.md#gclistoperators) | **GET** /v3/group_channels/{channel_url}/operators | List operators
*GroupChannelApi* | [**gcRegisterOperators**](docs/Api/GroupChannelApi.md#gcregisteroperators) | **POST** /v3/group_channels/{channel_url}/operators | Register operators
*GroupChannelApi* | [**gcResetChatHistory**](docs/Api/GroupChannelApi.md#gcresetchathistory) | **PUT** /v3/group_channels/{channel_url}/reset_user_history | Reset chat history
*GroupChannelApi* | [**gcUnhideOrUnarchiveChannel**](docs/Api/GroupChannelApi.md#gcunhideorunarchivechannel) | **DELETE** /v3/group_channels/{channel_url}/hide | Unhide or unarchive a channel
*GroupChannelApi* | [**gcUpdateChannelByUrl**](docs/Api/GroupChannelApi.md#gcupdatechannelbyurl) | **PUT** /v3/group_channels/{channel_url} | Update a channel
*GroupChannelApi* | [**gcViewChannelByUrl**](docs/Api/GroupChannelApi.md#gcviewchannelbyurl) | **GET** /v3/group_channels/{channel_url} | View a channel
*MessageApi* | [**addEmojiCategories**](docs/Api/MessageApi.md#addemojicategories) | **POST** /v3/emoji_categories | Add emoji categories
*MessageApi* | [**addEmojis**](docs/Api/MessageApi.md#addemojis) | **POST** /v3/emojis | Add emojis
*MessageApi* | [**addExtraDataToMessage**](docs/Api/MessageApi.md#addextradatatomessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Add extra data to a message
*MessageApi* | [**addReactionToAMessage**](docs/Api/MessageApi.md#addreactiontoamessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Add a reaction to a message
*MessageApi* | [**deleteEmojiByKey**](docs/Api/MessageApi.md#deleteemojibykey) | **DELETE** /v3/emojis/{emoji_key} | Delete an emoji
*MessageApi* | [**deleteEmojiCategoryById**](docs/Api/MessageApi.md#deleteemojicategorybyid) | **DELETE** /v3/emoji_categories/{emoji_category_id} | Delete an emoji category
*MessageApi* | [**deleteMessageById**](docs/Api/MessageApi.md#deletemessagebyid) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id} | Delete a message
*MessageApi* | [**enableReactions**](docs/Api/MessageApi.md#enablereactions) | **PUT** /v3/applications/settings/reactions | Enable reactions
*MessageApi* | [**gcMarkAllMessagesAsDelivered**](docs/Api/MessageApi.md#gcmarkallmessagesasdelivered) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_delivered | Mark all messages as delivered
*MessageApi* | [**gcMarkAllMessagesAsRead**](docs/Api/MessageApi.md#gcmarkallmessagesasread) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_read | Mark all messages as read
*MessageApi* | [**gcViewNumberOfEachMembersUnreadMessages**](docs/Api/MessageApi.md#gcviewnumberofeachmembersunreadmessages) | **GET** /v3/group_channels/{channel_url}/messages/unread_count | View number of each member&#39;s unread messages
*MessageApi* | [**getEmojiByKey**](docs/Api/MessageApi.md#getemojibykey) | **GET** /v3/emojis/{emoji_key} | Get an emoji
*MessageApi* | [**getEmojiCategoryById**](docs/Api/MessageApi.md#getemojicategorybyid) | **GET** /v3/emoji_categories/{emoji_category_id} | Get an emoji category
*MessageApi* | [**getStatistics**](docs/Api/MessageApi.md#getstatistics) | **GET** /v3/announcement_stats/weekly | Get statistics - weekly
*MessageApi* | [**getStatisticsDaily**](docs/Api/MessageApi.md#getstatisticsdaily) | **GET** /v3/announcement_stats/daily | Get statistics - daily
*MessageApi* | [**getStatisticsMonthly**](docs/Api/MessageApi.md#getstatisticsmonthly) | **GET** /v3/announcement_stats/monthly | Get statistics - monthly
*MessageApi* | [**listAllEmojisAndEmojiCategories**](docs/Api/MessageApi.md#listallemojisandemojicategories) | **GET** /v3/emoji_categories | List all emojis and emoji categories
*MessageApi* | [**listAnnouncementGroups**](docs/Api/MessageApi.md#listannouncementgroups) | **GET** /v3/announcement_group | List announcement groups
*MessageApi* | [**listAnnouncements**](docs/Api/MessageApi.md#listannouncements) | **GET** /v3/announcements | List announcements
*MessageApi* | [**listEmojis**](docs/Api/MessageApi.md#listemojis) | **GET** /v3/emojis | List emojis
*MessageApi* | [**listMessages**](docs/Api/MessageApi.md#listmessages) | **GET** /v3/{channel_type}/{channel_url}/messages | List messages
*MessageApi* | [**listReactionsOfMessage**](docs/Api/MessageApi.md#listreactionsofmessage) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | List reactions of a message
*MessageApi* | [**migrateMessagesByUrl**](docs/Api/MessageApi.md#migratemessagesbyurl) | **POST** /v3/migration/{target_channel_url} | Migrate messages
*MessageApi* | [**removeExtraDataFromMessage**](docs/Api/MessageApi.md#removeextradatafrommessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Remove extra data from a message
*MessageApi* | [**removeReactionFromAMessage**](docs/Api/MessageApi.md#removereactionfromamessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Remove a reaction from a message
*MessageApi* | [**scheduleAnnouncement**](docs/Api/MessageApi.md#scheduleannouncement) | **POST** /v3/announcements | Schedule an announcement
*MessageApi* | [**sendMessage**](docs/Api/MessageApi.md#sendmessage) | **POST** /v3/{channel_type}/{channel_url}/messages | Send a message
*MessageApi* | [**translateMessageIntoOtherLanguages**](docs/Api/MessageApi.md#translatemessageintootherlanguages) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/translation | Translate a message into other languages
*MessageApi* | [**updateAnnouncementById**](docs/Api/MessageApi.md#updateannouncementbyid) | **PUT** /v3/announcements/{unique_id} | Update an announcement
*MessageApi* | [**updateEmojiCategoryUrlById**](docs/Api/MessageApi.md#updateemojicategoryurlbyid) | **PUT** /v3/emoji_categories/{emoji_category_id} | Update an emoji category URL
*MessageApi* | [**updateEmojiUrlByKey**](docs/Api/MessageApi.md#updateemojiurlbykey) | **PUT** /v3/emojis/{emoji_key} | Update an emoji URL
*MessageApi* | [**updateExtraDataInMessage**](docs/Api/MessageApi.md#updateextradatainmessage) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Update extra data in a message
*MessageApi* | [**updateMessageById**](docs/Api/MessageApi.md#updatemessagebyid) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id} | Update a message
*MessageApi* | [**useDefaultEmojis**](docs/Api/MessageApi.md#usedefaultemojis) | **PUT** /v3/applications/settings/use_default_emoji | Use default emojis
*MessageApi* | [**viewMessageById**](docs/Api/MessageApi.md#viewmessagebyid) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id} | View a message
*MessageApi* | [**viewTotalNumberOfMessagesInChannel**](docs/Api/MessageApi.md#viewtotalnumberofmessagesinchannel) | **GET** /v3/{channel_type}/{channel_url}/messages/total_count | View total number of messages in a channel
*MetadataApi* | [**createChannelMetacounter**](docs/Api/MetadataApi.md#createchannelmetacounter) | **POST** /v3/{channel_type}/{channel_url}/metacounter | Create a channel metacounter
*MetadataApi* | [**createChannelMetadata**](docs/Api/MetadataApi.md#createchannelmetadata) | **POST** /v3/{channel_type}/{channel_url}/metadata | Create a channel metadata
*MetadataApi* | [**createUserMetadata**](docs/Api/MetadataApi.md#createusermetadata) | **POST** /v3/users/{user_id}/metadata | Create a user metadata
*MetadataApi* | [**deleteChannelMetacounter**](docs/Api/MetadataApi.md#deletechannelmetacounter) | **DELETE** /v3/{channel_type}/{channel_url}/metacounter | Delete a channel metacounter - When deleting all items of a channel metacounter
*MetadataApi* | [**deleteChannelMetacounterByKey**](docs/Api/MetadataApi.md#deletechannelmetacounterbykey) | **DELETE** /v3/{channel_type}/{channel_url}/metacounter/{key} | Delete a channel metacounter - When deleting a specific item of a channel metacounter by its key
*MetadataApi* | [**deleteChannelMetadata**](docs/Api/MetadataApi.md#deletechannelmetadata) | **DELETE** /v3/{channel_type}/{channel_url}/metadata | Delete a channel metadata - When deleting all items of a channel metadata
*MetadataApi* | [**deleteChannelMetadataByKey**](docs/Api/MetadataApi.md#deletechannelmetadatabykey) | **DELETE** /v3/{channel_type}/{channel_url}/metadata/{key} | Delete a channel metadata - When deleting a specific item of a channel metadata by its key
*MetadataApi* | [**deleteUserMetadata**](docs/Api/MetadataApi.md#deleteusermetadata) | **DELETE** /v3/users/{user_id}/metadata | Delete a user metadata - When deleting all items of a user metadata
*MetadataApi* | [**deleteUserMetadataByKey**](docs/Api/MetadataApi.md#deleteusermetadatabykey) | **DELETE** /v3/users/{user_id}/metadata/{key} | Delete a user metadata - When deleting a specific item of a user metadata by its key
*MetadataApi* | [**updateChannelMetacounter**](docs/Api/MetadataApi.md#updatechannelmetacounter) | **PUT** /v3/{channel_type}/{channel_url}/metacounter | Update a channel metacounter - When updating existing items of a channel metacounter by their keys or adding new items to the metacounter
*MetadataApi* | [**updateChannelMetacounterByKey**](docs/Api/MetadataApi.md#updatechannelmetacounterbykey) | **PUT** /v3/{channel_type}/{channel_url}/metacounter/{key} | Update a channel metacounter - When updating a specific item of a channel metacounter by its key
*MetadataApi* | [**updateChannelMetadata**](docs/Api/MetadataApi.md#updatechannelmetadata) | **PUT** /v3/{channel_type}/{channel_url}/metadata | Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata
*MetadataApi* | [**updateChannelMetadataByKey**](docs/Api/MetadataApi.md#updatechannelmetadatabykey) | **PUT** /v3/{channel_type}/{channel_url}/metadata/{key} | Update a channel metadata - When updating a specific item of a channel metadata by its key
*MetadataApi* | [**updateUserMetadata**](docs/Api/MetadataApi.md#updateusermetadata) | **PUT** /v3/users/{user_id}/metadata | Update a user metadata - When updating existing items of a user metadata by their keys or adding new items to the metadata
*MetadataApi* | [**updateUserMetadataByKey**](docs/Api/MetadataApi.md#updateusermetadatabykey) | **PUT** /v3/users/{user_id}/metadata/{key} | Update a user metadata - When updating a specific item of a user metadata by its key
*MetadataApi* | [**viewChannelMetacounter**](docs/Api/MetadataApi.md#viewchannelmetacounter) | **GET** /v3/{channel_type}/{channel_url}/metacounter | View a channel metacounter - When retrieving all items of a channel metacounter
*MetadataApi* | [**viewChannelMetacounterByKey**](docs/Api/MetadataApi.md#viewchannelmetacounterbykey) | **GET** /v3/{channel_type}/{channel_url}/metacounter/{key} | View a channel metacounter - When retrieving a specific item of a channel metacounter by its key
*MetadataApi* | [**viewChannelMetadata**](docs/Api/MetadataApi.md#viewchannelmetadata) | **GET** /v3/{channel_type}/{channel_url}/metadata | View a channel metadata - When retrieving all items of a channel metadata
*MetadataApi* | [**viewChannelMetadataByKey**](docs/Api/MetadataApi.md#viewchannelmetadatabykey) | **GET** /v3/{channel_type}/{channel_url}/metadata/{key} | View a channel metadata - When retrieving a specific item of a channel metadata by its key
*MetadataApi* | [**viewUserMetadata**](docs/Api/MetadataApi.md#viewusermetadata) | **GET** /v3/users/{user_id}/metadata | View a user metadata - When retrieving all items of a user metadata
*MetadataApi* | [**viewUserMetadataByKey**](docs/Api/MetadataApi.md#viewusermetadatabykey) | **GET** /v3/users/{user_id}/metadata/{key} | View a user metadata - When retrieving a specific item of a user metadata by its key
*ModerationApi* | [**banFromChannelsWithCustomChannelTypes**](docs/Api/ModerationApi.md#banfromchannelswithcustomchanneltypes) | **POST** /v3/users/{user_id}/banned_channel_custom_types | Ban from channels with custom channel types
*ModerationApi* | [**blockUser**](docs/Api/ModerationApi.md#blockuser) | **POST** /v3/users/{user_id}/block | Block a user
*ModerationApi* | [**gcBanUser**](docs/Api/ModerationApi.md#gcbanuser) | **POST** /v3/group_channels/{channel_url}/ban | Ban a user
*ModerationApi* | [**gcFreezeChannel**](docs/Api/ModerationApi.md#gcfreezechannel) | **PUT** /v3/group_channels/{channel_url}/freeze | Freeze a channel
*ModerationApi* | [**gcListBannedUsers**](docs/Api/ModerationApi.md#gclistbannedusers) | **GET** /v3/group_channels/{channel_url}/ban | List banned users
*ModerationApi* | [**gcListMutedUsers**](docs/Api/ModerationApi.md#gclistmutedusers) | **GET** /v3/group_channels/{channel_url}/mute | List muted users
*ModerationApi* | [**gcMuteUser**](docs/Api/ModerationApi.md#gcmuteuser) | **POST** /v3/group_channels/{channel_url}/mute | Mute a user
*ModerationApi* | [**gcUnbanUserById**](docs/Api/ModerationApi.md#gcunbanuserbyid) | **DELETE** /v3/group_channels/{channel_url}/ban/{banned_user_id} | Unban a user
*ModerationApi* | [**gcUnmuteUserById**](docs/Api/ModerationApi.md#gcunmuteuserbyid) | **DELETE** /v3/group_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
*ModerationApi* | [**gcUpdateBanById**](docs/Api/ModerationApi.md#gcupdatebanbyid) | **PUT** /v3/group_channels/{channel_url}/ban/{banned_user_id} | Update a ban
*ModerationApi* | [**gcViewBanById**](docs/Api/ModerationApi.md#gcviewbanbyid) | **GET** /v3/group_channels/{channel_url}/ban/{banned_user_id} | View a ban
*ModerationApi* | [**gcViewMuteById**](docs/Api/ModerationApi.md#gcviewmutebyid) | **GET** /v3/group_channels/{channel_url}/mute/{muted_user_id} | View a mute
*ModerationApi* | [**listBannedChannels**](docs/Api/ModerationApi.md#listbannedchannels) | **GET** /v3/users/{user_id}/ban | List banned channels
*ModerationApi* | [**listBlockedUsers**](docs/Api/ModerationApi.md#listblockedusers) | **GET** /v3/users/{user_id}/block | List blocked users
*ModerationApi* | [**listMutedChannels**](docs/Api/ModerationApi.md#listmutedchannels) | **GET** /v3/users/{user_id}/mute | List muted channels
*ModerationApi* | [**muteInChannelsWithCustomChannelTypes**](docs/Api/ModerationApi.md#muteinchannelswithcustomchanneltypes) | **POST** /v3/users/{user_id}/muted_channel_custom_types | Mute in channels with custom channel types
*ModerationApi* | [**ocBanUser**](docs/Api/ModerationApi.md#ocbanuser) | **POST** /v3/open_channels/{channel_url}/ban | Ban a user
*ModerationApi* | [**ocFreezeChannel**](docs/Api/ModerationApi.md#ocfreezechannel) | **PUT** /v3/open_channels/{channel_url}/freeze | Freeze a channel
*ModerationApi* | [**ocListBannedUsers**](docs/Api/ModerationApi.md#oclistbannedusers) | **GET** /v3/open_channels/{channel_url}/ban | List banned users
*ModerationApi* | [**ocListMutedUsers**](docs/Api/ModerationApi.md#oclistmutedusers) | **GET** /v3/open_channels/{channel_url}/mute | List muted users
*ModerationApi* | [**ocMuteUser**](docs/Api/ModerationApi.md#ocmuteuser) | **POST** /v3/open_channels/{channel_url}/mute | Mute a user
*ModerationApi* | [**ocUnbanUserById**](docs/Api/ModerationApi.md#ocunbanuserbyid) | **DELETE** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Unban a user
*ModerationApi* | [**ocUnmuteUserById**](docs/Api/ModerationApi.md#ocunmuteuserbyid) | **DELETE** /v3/open_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
*ModerationApi* | [**ocUpdateBanById**](docs/Api/ModerationApi.md#ocupdatebanbyid) | **PUT** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Update a ban
*ModerationApi* | [**ocViewBanById**](docs/Api/ModerationApi.md#ocviewbanbyid) | **GET** /v3/open_channels/{channel_url}/ban/{banned_user_id} | View a ban
*ModerationApi* | [**ocViewMuteById**](docs/Api/ModerationApi.md#ocviewmutebyid) | **GET** /v3/open_channels/{channel_url}/mute/{muted_user_id} | View a mute
*ModerationApi* | [**unblockUserById**](docs/Api/ModerationApi.md#unblockuserbyid) | **DELETE** /v3/users/{user_id}/block/{target_id} | Unblock a user
*OpenChannelApi* | [**ocCancelTheRegistrationOfOperators**](docs/Api/OpenChannelApi.md#occanceltheregistrationofoperators) | **DELETE** /v3/open_channels/{channel_url}/operators | Cancel the registration of operators
*OpenChannelApi* | [**ocCreateChannel**](docs/Api/OpenChannelApi.md#occreatechannel) | **POST** /v3/open_channels | Create a channel
*OpenChannelApi* | [**ocDeleteChannelByUrl**](docs/Api/OpenChannelApi.md#ocdeletechannelbyurl) | **DELETE** /v3/open_channels/{channel_url} | Delete a channel
*OpenChannelApi* | [**ocListChannels**](docs/Api/OpenChannelApi.md#oclistchannels) | **GET** /v3/open_channels | List channels
*OpenChannelApi* | [**ocListOperators**](docs/Api/OpenChannelApi.md#oclistoperators) | **GET** /v3/open_channels/{channel_url}/operators | List operators
*OpenChannelApi* | [**ocListParticipants**](docs/Api/OpenChannelApi.md#oclistparticipants) | **GET** /v3/open_channels/{channel_url}/participants | List participants
*OpenChannelApi* | [**ocRegisterOperators**](docs/Api/OpenChannelApi.md#ocregisteroperators) | **POST** /v3/open_channels/{channel_url}/operators | Register operators
*OpenChannelApi* | [**ocUpdateChannelByUrl**](docs/Api/OpenChannelApi.md#ocupdatechannelbyurl) | **PUT** /v3/open_channels/{channel_url} | Update a channel
*OpenChannelApi* | [**ocViewChannelByUrl**](docs/Api/OpenChannelApi.md#ocviewchannelbyurl) | **GET** /v3/open_channels/{channel_url} | View a channel
*PrivacyApi* | [**cancelTheRegistrationOfGdprRequestById**](docs/Api/PrivacyApi.md#canceltheregistrationofgdprrequestbyid) | **DELETE** /v3/privacy/gdpr/{request_id} | Cancel the registration of a GDPR request
*PrivacyApi* | [**listGdprRequests**](docs/Api/PrivacyApi.md#listgdprrequests) | **GET** /v3/privacy/gdpr | List GDPR requests
*PrivacyApi* | [**registerGdprRequest**](docs/Api/PrivacyApi.md#registergdprrequest) | **POST** /v3/privacy/gdpr | Register a GDPR request
*PrivacyApi* | [**viewGdprRequestById**](docs/Api/PrivacyApi.md#viewgdprrequestbyid) | **GET** /v3/privacy/gdpr/{request_id} | View a GDPR request
*ReportApi* | [**listReports**](docs/Api/ReportApi.md#listreports) | **GET** /v3/report | List reports
*ReportApi* | [**listReportsOnChannelByUrl**](docs/Api/ReportApi.md#listreportsonchannelbyurl) | **GET** /v3/report/{channel_type}/{channel_url} | List reports on a channel
*ReportApi* | [**listReportsOnMessageById**](docs/Api/ReportApi.md#listreportsonmessagebyid) | **GET** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | List reports on a message
*ReportApi* | [**listReportsOnUserById**](docs/Api/ReportApi.md#listreportsonuserbyid) | **GET** /v3/report/users/{offending_user_id} | List reports on a user
*ReportApi* | [**reportChannelByUrl**](docs/Api/ReportApi.md#reportchannelbyurl) | **POST** /v3/report/{channel_type}/{channel_url} | Report a channel
*ReportApi* | [**reportMessageById**](docs/Api/ReportApi.md#reportmessagebyid) | **POST** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | Report a message
*ReportApi* | [**reportUserById**](docs/Api/ReportApi.md#reportuserbyid) | **POST** /v3/report/users/{offending_user_id} | Report a user
*ReportApi* | [**viewModeratedMessageById**](docs/Api/ReportApi.md#viewmoderatedmessagebyid) | **GET** /v3/report/{channel_type}/{channel_url}/profanity_messages/{message_id} | View a moderated message
*StatisticsApi* | [**retrieveAdvancedAnalyticsMetrics**](docs/Api/StatisticsApi.md#retrieveadvancedanalyticsmetrics) | **GET** /v3/statistics/metric | Retrieve Advanced analytics metrics
*StatisticsApi* | [**viewNumberOfConcurrentConnections**](docs/Api/StatisticsApi.md#viewnumberofconcurrentconnections) | **GET** /v3/applications/ccu | View number of concurrent connections
*StatisticsApi* | [**viewNumberOfDailyActiveUsers**](docs/Api/StatisticsApi.md#viewnumberofdailyactiveusers) | **GET** /v3/applications/dau | View number of daily active users
*StatisticsApi* | [**viewNumberOfMonthlyActiveUsers**](docs/Api/StatisticsApi.md#viewnumberofmonthlyactiveusers) | **GET** /v3/applications/mau | View number of monthly active users
*StatisticsApi* | [**viewNumberOfPeakConnections**](docs/Api/StatisticsApi.md#viewnumberofpeakconnections) | **GET** /v3/applications/peak_connections | View number of peak connections
*UserApi* | [**addRegistrationOrDeviceToken**](docs/Api/UserApi.md#addregistrationordevicetoken) | **POST** /v3/users/{user_id}/push/{token_type} | Add a registration or device token
*UserApi* | [**choosePushNotificationContentTemplate**](docs/Api/UserApi.md#choosepushnotificationcontenttemplate) | **PUT** /v3/users/{user_id}/push/template | Choose a push notification content template
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /v3/users | Create a user
*UserApi* | [**deleteUserById**](docs/Api/UserApi.md#deleteuserbyid) | **DELETE** /v3/users/{user_id} | Delete a user
*UserApi* | [**leaveMyGroupChannels**](docs/Api/UserApi.md#leavemygroupchannels) | **PUT** /v3/users/{user_id}/my_group_channels/leave | Leave my group channels
*UserApi* | [**listMyGroupChannels**](docs/Api/UserApi.md#listmygroupchannels) | **GET** /v3/users/{user_id}/my_group_channels | List my group channels
*UserApi* | [**listRegistrationOrDeviceTokens**](docs/Api/UserApi.md#listregistrationordevicetokens) | **GET** /v3/users/{user_id}/push/{token_type} | List registration or device tokens
*UserApi* | [**listUsers**](docs/Api/UserApi.md#listusers) | **GET** /v3/users | List users
*UserApi* | [**markAllMessagesAsRead**](docs/Api/UserApi.md#markallmessagesasread) | **PUT** /v3/users/{user_id}/mark_as_read_all | Mark all messages as read
*UserApi* | [**registerAsOperatorToChannelsWithCustomChannelTypes**](docs/Api/UserApi.md#registerasoperatortochannelswithcustomchanneltypes) | **POST** /v3/users/{user_id}/operating_channel_custom_types | Register as an operator to channels with custom channel types
*UserApi* | [**removeRegistrationOrDeviceToken**](docs/Api/UserApi.md#removeregistrationordevicetoken) | **DELETE** /v3/users/{user_id}/push | Remove a registration or device token - When unregistering all device tokens
*UserApi* | [**removeRegistrationOrDeviceTokenByToken**](docs/Api/UserApi.md#removeregistrationordevicetokenbytoken) | **DELETE** /v3/users/{user_id}/push/{token_type}/{token} | Remove a registration or device token - When unregistering a specific token
*UserApi* | [**removeRegistrationOrDeviceTokenFromOwnerByToken**](docs/Api/UserApi.md#removeregistrationordevicetokenfromownerbytoken) | **DELETE** /v3/push/device_tokens/{token_type}/{token} | Remove a registration or device token from an owner
*UserApi* | [**resetPushPreferences**](docs/Api/UserApi.md#resetpushpreferences) | **DELETE** /v3/users/{user_id}/push_preference | Reset push preferences
*UserApi* | [**updateChannelInvitationPreference**](docs/Api/UserApi.md#updatechannelinvitationpreference) | **PUT** /v3/users/{user_id}/channel_invitation_preference | Update channel invitation preference
*UserApi* | [**updateCountPreferenceOfChannelByUrl**](docs/Api/UserApi.md#updatecountpreferenceofchannelbyurl) | **PUT** /v3/users/{user_id}/count_preference/{channel_url} | Update count preference of a channel
*UserApi* | [**updatePushPreferences**](docs/Api/UserApi.md#updatepushpreferences) | **PUT** /v3/users/{user_id}/push_preference | Update push preferences
*UserApi* | [**updatePushPreferencesForChannelByUrl**](docs/Api/UserApi.md#updatepushpreferencesforchannelbyurl) | **PUT** /v3/users/{user_id}/push_preference/{channel_url} | Update push preferences for a channel
*UserApi* | [**updateUserById**](docs/Api/UserApi.md#updateuserbyid) | **PUT** /v3/users/{user_id} | Update a user
*UserApi* | [**viewChannelInvitationPreference**](docs/Api/UserApi.md#viewchannelinvitationpreference) | **GET** /v3/users/{user_id}/channel_invitation_preference | View channel invitation preference
*UserApi* | [**viewCountPreferenceOfChannelByUrl**](docs/Api/UserApi.md#viewcountpreferenceofchannelbyurl) | **GET** /v3/users/{user_id}/count_preference/{channel_url} | View count preference of a channel
*UserApi* | [**viewNumberOfChannelsByJoinStatus**](docs/Api/UserApi.md#viewnumberofchannelsbyjoinstatus) | **GET** /v3/users/{user_id}/group_channel_count | View number of channels by join status
*UserApi* | [**viewNumberOfChannelsWithUnreadMessages**](docs/Api/UserApi.md#viewnumberofchannelswithunreadmessages) | **GET** /v3/users/{user_id}/unread_channel_count | View number of channels with unread messages
*UserApi* | [**viewNumberOfUnreadItems**](docs/Api/UserApi.md#viewnumberofunreaditems) | **GET** /v3/users/{user_id}/unread_item_count | View number of unread items
*UserApi* | [**viewNumberOfUnreadMessages**](docs/Api/UserApi.md#viewnumberofunreadmessages) | **GET** /v3/users/{user_id}/unread_message_count | View number of unread messages
*UserApi* | [**viewPushPreferences**](docs/Api/UserApi.md#viewpushpreferences) | **GET** /v3/users/{user_id}/push_preference | View push preferences
*UserApi* | [**viewPushPreferencesForChannelByUrl**](docs/Api/UserApi.md#viewpushpreferencesforchannelbyurl) | **GET** /v3/users/{user_id}/push_preference/{channel_url} | View push preferences for a channel
*UserApi* | [**viewUserById**](docs/Api/UserApi.md#viewuserbyid) | **GET** /v3/users/{user_id} | View a user
*UserApi* | [**viewWhoOwnsRegistrationOrDeviceTokenByToken**](docs/Api/UserApi.md#viewwhoownsregistrationordevicetokenbytoken) | **GET** /v3/push/device_tokens/{token_type}/{token} | View who owns a registration or device token
*WebhookApi* | [**chooseWhichEventsToSubscribeTo**](docs/Api/WebhookApi.md#choosewhicheventstosubscribeto) | **PUT** /v3/applications/settings/webhook | Choose which events to subscribe to
*WebhookApi* | [**retrieveListOfSubscribedEvents**](docs/Api/WebhookApi.md#retrievelistofsubscribedevents) | **GET** /v3/applications/settings/webhook | Retrieve a list of subscribed events

## Models

- [AddApnsPushConfigurationData](docs/Model/AddApnsPushConfigurationData.md)
- [AddApnsPushConfigurationResponse](docs/Model/AddApnsPushConfigurationResponse.md)
- [AddApnsPushConfigurationResponsePushConfigurationsInner](docs/Model/AddApnsPushConfigurationResponsePushConfigurationsInner.md)
- [AddEmojiCategoriesResponse](docs/Model/AddEmojiCategoriesResponse.md)
- [AddEmojiCategoriesResponseEmojiCategoriesInner](docs/Model/AddEmojiCategoriesResponseEmojiCategoriesInner.md)
- [AddEmojisData](docs/Model/AddEmojisData.md)
- [AddEmojisResponse](docs/Model/AddEmojisResponse.md)
- [AddExtraDataToMessageData](docs/Model/AddExtraDataToMessageData.md)
- [AddExtraDataToMessageResponse](docs/Model/AddExtraDataToMessageResponse.md)
- [AddFcmPushConfigurationData](docs/Model/AddFcmPushConfigurationData.md)
- [AddFcmPushConfigurationResponse](docs/Model/AddFcmPushConfigurationResponse.md)
- [AddFcmPushConfigurationResponsePushConfigurationsInner](docs/Model/AddFcmPushConfigurationResponsePushConfigurationsInner.md)
- [AddHmsPushConfigurationData](docs/Model/AddHmsPushConfigurationData.md)
- [AddHmsPushConfigurationResponse](docs/Model/AddHmsPushConfigurationResponse.md)
- [AddHmsPushConfigurationResponsePushConfigurationsInner](docs/Model/AddHmsPushConfigurationResponsePushConfigurationsInner.md)
- [AddIpToWhitelistData](docs/Model/AddIpToWhitelistData.md)
- [AddIpToWhitelistResponse](docs/Model/AddIpToWhitelistResponse.md)
- [AddReactionToAMessageData](docs/Model/AddReactionToAMessageData.md)
- [AddReactionToAMessageResponse](docs/Model/AddReactionToAMessageResponse.md)
- [AddRegistrationOrDeviceTokenData](docs/Model/AddRegistrationOrDeviceTokenData.md)
- [AddRegistrationOrDeviceTokenResponse](docs/Model/AddRegistrationOrDeviceTokenResponse.md)
- [BanFromChannelsWithCustomChannelTypesData](docs/Model/BanFromChannelsWithCustomChannelTypesData.md)
- [BanUsersInChannelsWithCustomChannelTypeData](docs/Model/BanUsersInChannelsWithCustomChannelTypeData.md)
- [BanUsersInChannelsWithCustomChannelTypeDataBannedListInner](docs/Model/BanUsersInChannelsWithCustomChannelTypeDataBannedListInner.md)
- [Blob](docs/Model/Blob.md)
- [BlockUserData](docs/Model/BlockUserData.md)
- [BlockUserResponse](docs/Model/BlockUserResponse.md)
- [ChoosePushNotificationContentTemplateResponse](docs/Model/ChoosePushNotificationContentTemplateResponse.md)
- [ChooseWhichEventsToSubscribeToData](docs/Model/ChooseWhichEventsToSubscribeToData.md)
- [ChooseWhichEventsToSubscribeToResponse](docs/Model/ChooseWhichEventsToSubscribeToResponse.md)
- [ChooseWhichEventsToSubscribeToResponseWebhook](docs/Model/ChooseWhichEventsToSubscribeToResponseWebhook.md)
- [CreateBotData](docs/Model/CreateBotData.md)
- [CreateBotResponse](docs/Model/CreateBotResponse.md)
- [CreateBotResponseBot](docs/Model/CreateBotResponseBot.md)
- [CreateChannelMetacounterData](docs/Model/CreateChannelMetacounterData.md)
- [CreateChannelMetadataData](docs/Model/CreateChannelMetadataData.md)
- [CreateChannelMetadataResponse](docs/Model/CreateChannelMetadataResponse.md)
- [CreateUserData](docs/Model/CreateUserData.md)
- [CreateUserMetadataData](docs/Model/CreateUserMetadataData.md)
- [CreateUserMetadataResponse](docs/Model/CreateUserMetadataResponse.md)
- [CustomTypeListBannedUsersResponse](docs/Model/CustomTypeListBannedUsersResponse.md)
- [DeleteAllowedIpsFromWhitelistResponse](docs/Model/DeleteAllowedIpsFromWhitelistResponse.md)
- [DeleteApnsCertificateByIdResponse](docs/Model/DeleteApnsCertificateByIdResponse.md)
- [EnableReactionsData](docs/Model/EnableReactionsData.md)
- [EnableReactionsResponse](docs/Model/EnableReactionsResponse.md)
- [File](docs/Model/File.md)
- [GcAcceptInvitationData](docs/Model/GcAcceptInvitationData.md)
- [GcBanUserData](docs/Model/GcBanUserData.md)
- [GcBanUserResponse](docs/Model/GcBanUserResponse.md)
- [GcCheckIfMemberByIdResponse](docs/Model/GcCheckIfMemberByIdResponse.md)
- [GcCreateChannelData](docs/Model/GcCreateChannelData.md)
- [GcDeclineInvitationData](docs/Model/GcDeclineInvitationData.md)
- [GcFreezeChannelData](docs/Model/GcFreezeChannelData.md)
- [GcHideOrArchiveChannelData](docs/Model/GcHideOrArchiveChannelData.md)
- [GcInviteAsMembersData](docs/Model/GcInviteAsMembersData.md)
- [GcJoinChannelData](docs/Model/GcJoinChannelData.md)
- [GcLeaveChannelData](docs/Model/GcLeaveChannelData.md)
- [GcListBannedUsersResponse](docs/Model/GcListBannedUsersResponse.md)
- [GcListChannelsResponse](docs/Model/GcListChannelsResponse.md)
- [GcListMembersResponse](docs/Model/GcListMembersResponse.md)
- [GcListMutedUsersResponse](docs/Model/GcListMutedUsersResponse.md)
- [GcListOperatorsResponse](docs/Model/GcListOperatorsResponse.md)
- [GcMarkAllMessagesAsDeliveredData](docs/Model/GcMarkAllMessagesAsDeliveredData.md)
- [GcMarkAllMessagesAsDeliveredResponse](docs/Model/GcMarkAllMessagesAsDeliveredResponse.md)
- [GcMarkAllMessagesAsReadData](docs/Model/GcMarkAllMessagesAsReadData.md)
- [GcMuteUserData](docs/Model/GcMuteUserData.md)
- [GcRegisterOperatorsData](docs/Model/GcRegisterOperatorsData.md)
- [GcRegisterOperatorsResponse](docs/Model/GcRegisterOperatorsResponse.md)
- [GcResetChatHistoryData](docs/Model/GcResetChatHistoryData.md)
- [GcResetChatHistoryResponse](docs/Model/GcResetChatHistoryResponse.md)
- [GcUpdateBanByIdData](docs/Model/GcUpdateBanByIdData.md)
- [GcUpdateBanByIdResponse](docs/Model/GcUpdateBanByIdResponse.md)
- [GcUpdateChannelByUrlData](docs/Model/GcUpdateChannelByUrlData.md)
- [GcViewBanByIdResponse](docs/Model/GcViewBanByIdResponse.md)
- [GcViewMuteByIdResponse](docs/Model/GcViewMuteByIdResponse.md)
- [GcViewNumberOfEachMembersUnreadMessagesResponse](docs/Model/GcViewNumberOfEachMembersUnreadMessagesResponse.md)
- [GenerateSecondaryApiTokenData](docs/Model/GenerateSecondaryApiTokenData.md)
- [GenerateSecondaryApiTokenResponse](docs/Model/GenerateSecondaryApiTokenResponse.md)
- [GetDetailedOpenRateOfAnnouncementByIdResponse](docs/Model/GetDetailedOpenRateOfAnnouncementByIdResponse.md)
- [GetDetailedOpenRateOfAnnouncementGroupResponse](docs/Model/GetDetailedOpenRateOfAnnouncementGroupResponse.md)
- [GetDetailedOpenStatusOfAnnouncementByIdResponse](docs/Model/GetDetailedOpenStatusOfAnnouncementByIdResponse.md)
- [GetDetailedOpenStatusOfAnnouncementByIdResponseOpenStatusInner](docs/Model/GetDetailedOpenStatusOfAnnouncementByIdResponseOpenStatusInner.md)
- [GetStatisticsDailyResponse](docs/Model/GetStatisticsDailyResponse.md)
- [GetStatisticsDailyResponseStatisticsInner](docs/Model/GetStatisticsDailyResponseStatisticsInner.md)
- [GetStatisticsMonthlyResponse](docs/Model/GetStatisticsMonthlyResponse.md)
- [GetStatisticsResponse](docs/Model/GetStatisticsResponse.md)
- [JoinChannelsData](docs/Model/JoinChannelsData.md)
- [JoinChannelsResponse](docs/Model/JoinChannelsResponse.md)
- [LeaveMyGroupChannelsData](docs/Model/LeaveMyGroupChannelsData.md)
- [ListAllEmojisAndEmojiCategoriesResponse](docs/Model/ListAllEmojisAndEmojiCategoriesResponse.md)
- [ListAllEmojisAndEmojiCategoriesResponseEmojiCategoriesInner](docs/Model/ListAllEmojisAndEmojiCategoriesResponseEmojiCategoriesInner.md)
- [ListAllEmojisAndEmojiCategoriesResponseEmojiCategoriesInnerEmojisInner](docs/Model/ListAllEmojisAndEmojiCategoriesResponseEmojiCategoriesInnerEmojisInner.md)
- [ListAnnouncementGroupsResponse](docs/Model/ListAnnouncementGroupsResponse.md)
- [ListAnnouncementsResponse](docs/Model/ListAnnouncementsResponse.md)
- [ListAnnouncementsResponseAnnouncementsInner](docs/Model/ListAnnouncementsResponseAnnouncementsInner.md)
- [ListBannedChannelsResponse](docs/Model/ListBannedChannelsResponse.md)
- [ListBannedChannelsResponseBannedChannelsInner](docs/Model/ListBannedChannelsResponseBannedChannelsInner.md)
- [ListBlockedUsersResponse](docs/Model/ListBlockedUsersResponse.md)
- [ListBotsResponse](docs/Model/ListBotsResponse.md)
- [ListBotsResponseBotsInner](docs/Model/ListBotsResponseBotsInner.md)
- [ListDataExportsByMessageChannelOrUserResponse](docs/Model/ListDataExportsByMessageChannelOrUserResponse.md)
- [ListDataExportsByMessageChannelOrUserResponseExportedDataInner](docs/Model/ListDataExportsByMessageChannelOrUserResponseExportedDataInner.md)
- [ListDataExportsByMessageChannelOrUserResponseExportedDataInnerFile](docs/Model/ListDataExportsByMessageChannelOrUserResponseExportedDataInnerFile.md)
- [ListEmojisResponse](docs/Model/ListEmojisResponse.md)
- [ListGdprRequestsResponse](docs/Model/ListGdprRequestsResponse.md)
- [ListGdprRequestsResponseRequestsInner](docs/Model/ListGdprRequestsResponseRequestsInner.md)
- [ListMessagesResponse](docs/Model/ListMessagesResponse.md)
- [ListMessagesResponseMessagesInner](docs/Model/ListMessagesResponseMessagesInner.md)
- [ListMessagesResponseMessagesInnerOgTag](docs/Model/ListMessagesResponseMessagesInnerOgTag.md)
- [ListMessagesResponseMessagesInnerOgTagOgImage](docs/Model/ListMessagesResponseMessagesInnerOgTagOgImage.md)
- [ListMessagesResponseMessagesInnerSortedMetaarrayInner](docs/Model/ListMessagesResponseMessagesInnerSortedMetaarrayInner.md)
- [ListMutedChannelsResponse](docs/Model/ListMutedChannelsResponse.md)
- [ListMutedUsersInChannelsWithCustomChannelType200Response](docs/Model/ListMutedUsersInChannelsWithCustomChannelType200Response.md)
- [ListMyGroupChannelsResponse](docs/Model/ListMyGroupChannelsResponse.md)
- [ListPushConfigurationsResponse](docs/Model/ListPushConfigurationsResponse.md)
- [ListPushConfigurationsResponsePushConfigurationsInner](docs/Model/ListPushConfigurationsResponsePushConfigurationsInner.md)
- [ListPushNotificationContentTemplatesResponse](docs/Model/ListPushNotificationContentTemplatesResponse.md)
- [ListPushNotificationContentTemplatesResponsePushMessageTemplatesInner](docs/Model/ListPushNotificationContentTemplatesResponsePushMessageTemplatesInner.md)
- [ListPushNotificationContentTemplatesResponsePushMessageTemplatesInnerTemplate](docs/Model/ListPushNotificationContentTemplatesResponsePushMessageTemplatesInnerTemplate.md)
- [ListReactionsOfMessageResponse](docs/Model/ListReactionsOfMessageResponse.md)
- [ListRegistrationOrDeviceTokensResponse](docs/Model/ListRegistrationOrDeviceTokensResponse.md)
- [ListReportsOnChannelByUrlResponse](docs/Model/ListReportsOnChannelByUrlResponse.md)
- [ListReportsOnMessageByIdResponse](docs/Model/ListReportsOnMessageByIdResponse.md)
- [ListReportsOnMessageByIdResponseReportLogsInner](docs/Model/ListReportsOnMessageByIdResponseReportLogsInner.md)
- [ListReportsOnUserByIdResponse](docs/Model/ListReportsOnUserByIdResponse.md)
- [ListReportsResponse](docs/Model/ListReportsResponse.md)
- [ListReportsResponseReportLogsInner](docs/Model/ListReportsResponseReportLogsInner.md)
- [ListSecondaryApiTokensResponse](docs/Model/ListSecondaryApiTokensResponse.md)
- [ListSecondaryApiTokensResponseApiTokensInner](docs/Model/ListSecondaryApiTokensResponseApiTokensInner.md)
- [ListUsersResponse](docs/Model/ListUsersResponse.md)
- [MarkAllMessagesAsReadData](docs/Model/MarkAllMessagesAsReadData.md)
- [ModelFunction](docs/Model/ModelFunction.md)
- [MuteInChannelsWithCustomChannelTypesData](docs/Model/MuteInChannelsWithCustomChannelTypesData.md)
- [MuteUsersInChannelsWithCustomChannelTypeData](docs/Model/MuteUsersInChannelsWithCustomChannelTypeData.md)
- [OcBanUserData](docs/Model/OcBanUserData.md)
- [OcBanUserResponse](docs/Model/OcBanUserResponse.md)
- [OcCreateChannelData](docs/Model/OcCreateChannelData.md)
- [OcDeleteChannelByUrl200Response](docs/Model/OcDeleteChannelByUrl200Response.md)
- [OcFreezeChannelData](docs/Model/OcFreezeChannelData.md)
- [OcListBannedUsersResponse](docs/Model/OcListBannedUsersResponse.md)
- [OcListBannedUsersResponseBannedListInner](docs/Model/OcListBannedUsersResponseBannedListInner.md)
- [OcListChannelsResponse](docs/Model/OcListChannelsResponse.md)
- [OcListMutedUsersResponse](docs/Model/OcListMutedUsersResponse.md)
- [OcListOperatorsResponse](docs/Model/OcListOperatorsResponse.md)
- [OcListParticipantsResponse](docs/Model/OcListParticipantsResponse.md)
- [OcMuteUserData](docs/Model/OcMuteUserData.md)
- [OcRegisterOperatorsData](docs/Model/OcRegisterOperatorsData.md)
- [OcUpdateBanByIdData](docs/Model/OcUpdateBanByIdData.md)
- [OcUpdateBanByIdResponse](docs/Model/OcUpdateBanByIdResponse.md)
- [OcUpdateChannelByUrlData](docs/Model/OcUpdateChannelByUrlData.md)
- [OcViewBanByIdResponse](docs/Model/OcViewBanByIdResponse.md)
- [OcViewMuteByIdResponse](docs/Model/OcViewMuteByIdResponse.md)
- [RegisterAndScheduleDataExportData](docs/Model/RegisterAndScheduleDataExportData.md)
- [RegisterAndScheduleDataExportResponse](docs/Model/RegisterAndScheduleDataExportResponse.md)
- [RegisterAsOperatorToChannelsWithCustomChannelTypesData](docs/Model/RegisterAsOperatorToChannelsWithCustomChannelTypesData.md)
- [RegisterGdprRequestData](docs/Model/RegisterGdprRequestData.md)
- [RegisterGdprRequestResponse](docs/Model/RegisterGdprRequestResponse.md)
- [RemovePushConfigurationByIdResponse](docs/Model/RemovePushConfigurationByIdResponse.md)
- [RemoveReactionFromAMessageResponse](docs/Model/RemoveReactionFromAMessageResponse.md)
- [RemoveRegistrationOrDeviceTokenByTokenResponse](docs/Model/RemoveRegistrationOrDeviceTokenByTokenResponse.md)
- [RemoveRegistrationOrDeviceTokenFromOwnerByTokenResponse](docs/Model/RemoveRegistrationOrDeviceTokenFromOwnerByTokenResponse.md)
- [RemoveRegistrationOrDeviceTokenResponse](docs/Model/RemoveRegistrationOrDeviceTokenResponse.md)
- [ReportChannelByUrlData](docs/Model/ReportChannelByUrlData.md)
- [ReportChannelByUrlResponse](docs/Model/ReportChannelByUrlResponse.md)
- [ReportMessageByIdData](docs/Model/ReportMessageByIdData.md)
- [ReportMessageByIdResponse](docs/Model/ReportMessageByIdResponse.md)
- [ReportUserByIdData](docs/Model/ReportUserByIdData.md)
- [ReportUserByIdResponse](docs/Model/ReportUserByIdResponse.md)
- [ResetPushPreferencesResponse](docs/Model/ResetPushPreferencesResponse.md)
- [RetrieveAdvancedAnalyticsMetricsResponse](docs/Model/RetrieveAdvancedAnalyticsMetricsResponse.md)
- [RetrieveIpWhitelistResponse](docs/Model/RetrieveIpWhitelistResponse.md)
- [RetrieveListOfSubscribedEventsResponse](docs/Model/RetrieveListOfSubscribedEventsResponse.md)
- [RetrieveListOfSubscribedEventsResponseWebhook](docs/Model/RetrieveListOfSubscribedEventsResponseWebhook.md)
- [RevokeSecondaryApiTokenByTokenResponse](docs/Model/RevokeSecondaryApiTokenByTokenResponse.md)
- [SBObject](docs/Model/SBObject.md)
- [ScheduleAnnouncementData](docs/Model/ScheduleAnnouncementData.md)
- [ScheduleAnnouncementResponse](docs/Model/ScheduleAnnouncementResponse.md)
- [ScheduleAnnouncementResponseCreateChannelOptions](docs/Model/ScheduleAnnouncementResponseCreateChannelOptions.md)
- [ScheduleAnnouncementResponseMessage](docs/Model/ScheduleAnnouncementResponseMessage.md)
- [SendBirdAdminMessage](docs/Model/SendBirdAdminMessage.md)
- [SendBirdAppleCriticalAlertOptions](docs/Model/SendBirdAppleCriticalAlertOptions.md)
- [SendBirdBaseChannel](docs/Model/SendBirdBaseChannel.md)
- [SendBirdBaseMessageInstance](docs/Model/SendBirdBaseMessageInstance.md)
- [SendBirdChannelResponse](docs/Model/SendBirdChannelResponse.md)
- [SendBirdEmoji](docs/Model/SendBirdEmoji.md)
- [SendBirdEmojiCategory](docs/Model/SendBirdEmojiCategory.md)
- [SendBirdFileMessageParams](docs/Model/SendBirdFileMessageParams.md)
- [SendBirdGroupChannel](docs/Model/SendBirdGroupChannel.md)
- [SendBirdGroupChannelChannel](docs/Model/SendBirdGroupChannelChannel.md)
- [SendBirdGroupChannelCollection](docs/Model/SendBirdGroupChannelCollection.md)
- [SendBirdGroupChannelCreatedBy](docs/Model/SendBirdGroupChannelCreatedBy.md)
- [SendBirdGroupChannelDisappearingMessage](docs/Model/SendBirdGroupChannelDisappearingMessage.md)
- [SendBirdGroupChannelSmsFallback](docs/Model/SendBirdGroupChannelSmsFallback.md)
- [SendBirdMember](docs/Model/SendBirdMember.md)
- [SendBirdMessageMetaArray](docs/Model/SendBirdMessageMetaArray.md)
- [SendBirdMessageResponse](docs/Model/SendBirdMessageResponse.md)
- [SendBirdMessageResponseMentionedUsersInner](docs/Model/SendBirdMessageResponseMentionedUsersInner.md)
- [SendBirdMessageResponseUser](docs/Model/SendBirdMessageResponseUser.md)
- [SendBirdOGImage](docs/Model/SendBirdOGImage.md)
- [SendBirdOGMetaData](docs/Model/SendBirdOGMetaData.md)
- [SendBirdOpenChannel](docs/Model/SendBirdOpenChannel.md)
- [SendBirdPlugin](docs/Model/SendBirdPlugin.md)
- [SendBirdPoll](docs/Model/SendBirdPoll.md)
- [SendBirdPollDetails](docs/Model/SendBirdPollDetails.md)
- [SendBirdPollOption](docs/Model/SendBirdPollOption.md)
- [SendBirdPollUpdatedVoteCount](docs/Model/SendBirdPollUpdatedVoteCount.md)
- [SendBirdReaction](docs/Model/SendBirdReaction.md)
- [SendBirdRestrictionInfo](docs/Model/SendBirdRestrictionInfo.md)
- [SendBirdSender](docs/Model/SendBirdSender.md)
- [SendBirdThreadInfo](docs/Model/SendBirdThreadInfo.md)
- [SendBirdThumbnailSBObject](docs/Model/SendBirdThumbnailSBObject.md)
- [SendBirdThumbnailSize](docs/Model/SendBirdThumbnailSize.md)
- [SendBirdUser](docs/Model/SendBirdUser.md)
- [SendBirdUserMessageParams](docs/Model/SendBirdUserMessageParams.md)
- [SendBotSMessageData](docs/Model/SendBotSMessageData.md)
- [SendMessageData](docs/Model/SendMessageData.md)
- [SetDomainFilterData](docs/Model/SetDomainFilterData.md)
- [SetDomainFilterDataDomainFilter](docs/Model/SetDomainFilterDataDomainFilter.md)
- [SetDomainFilterDataImageModeration](docs/Model/SetDomainFilterDataImageModeration.md)
- [SetDomainFilterDataImageModerationLimits](docs/Model/SetDomainFilterDataImageModerationLimits.md)
- [SetDomainFilterDataProfanityFilter](docs/Model/SetDomainFilterDataProfanityFilter.md)
- [SetDomainFilterDataProfanityFilterRegexFiltersInner](docs/Model/SetDomainFilterDataProfanityFilterRegexFiltersInner.md)
- [SetDomainFilterDataProfanityTriggeredModeration](docs/Model/SetDomainFilterDataProfanityTriggeredModeration.md)
- [TranslateMessageIntoOtherLanguagesData](docs/Model/TranslateMessageIntoOtherLanguagesData.md)
- [UpdateAnnouncementByIdData](docs/Model/UpdateAnnouncementByIdData.md)
- [UpdateAnnouncementByIdResponse](docs/Model/UpdateAnnouncementByIdResponse.md)
- [UpdateAnnouncementByIdResponseMessage](docs/Model/UpdateAnnouncementByIdResponseMessage.md)
- [UpdateApnsPushConfigurationByIdData](docs/Model/UpdateApnsPushConfigurationByIdData.md)
- [UpdateApnsPushConfigurationByIdResponse](docs/Model/UpdateApnsPushConfigurationByIdResponse.md)
- [UpdateBotByIdData](docs/Model/UpdateBotByIdData.md)
- [UpdateBotByIdResponse](docs/Model/UpdateBotByIdResponse.md)
- [UpdateChannelInvitationPreferenceData](docs/Model/UpdateChannelInvitationPreferenceData.md)
- [UpdateChannelInvitationPreferenceResponse](docs/Model/UpdateChannelInvitationPreferenceResponse.md)
- [UpdateChannelMetacounterData](docs/Model/UpdateChannelMetacounterData.md)
- [UpdateChannelMetadataData](docs/Model/UpdateChannelMetadataData.md)
- [UpdateCountPreferenceOfChannelByUrlData](docs/Model/UpdateCountPreferenceOfChannelByUrlData.md)
- [UpdateCountPreferenceOfChannelByUrlResponse](docs/Model/UpdateCountPreferenceOfChannelByUrlResponse.md)
- [UpdateDefaultChannelInvitationPreferenceData](docs/Model/UpdateDefaultChannelInvitationPreferenceData.md)
- [UpdateDefaultChannelInvitationPreferenceResponse](docs/Model/UpdateDefaultChannelInvitationPreferenceResponse.md)
- [UpdateEmojiCategoryUrlByIdData](docs/Model/UpdateEmojiCategoryUrlByIdData.md)
- [UpdateEmojiUrlByKeyData](docs/Model/UpdateEmojiUrlByKeyData.md)
- [UpdateExtraDataInMessageData](docs/Model/UpdateExtraDataInMessageData.md)
- [UpdateExtraDataInMessageResponse](docs/Model/UpdateExtraDataInMessageResponse.md)
- [UpdateExtraDataInMessageResponseSortedMetaarrayInner](docs/Model/UpdateExtraDataInMessageResponseSortedMetaarrayInner.md)
- [UpdateFcmPushConfigurationByIdData](docs/Model/UpdateFcmPushConfigurationByIdData.md)
- [UpdateFcmPushConfigurationByIdResponse](docs/Model/UpdateFcmPushConfigurationByIdResponse.md)
- [UpdateHmsPushConfigurationByIdData](docs/Model/UpdateHmsPushConfigurationByIdData.md)
- [UpdateHmsPushConfigurationByIdResponse](docs/Model/UpdateHmsPushConfigurationByIdResponse.md)
- [UpdateMessageByIdData](docs/Model/UpdateMessageByIdData.md)
- [UpdatePushNotificationContentTemplateData](docs/Model/UpdatePushNotificationContentTemplateData.md)
- [UpdatePushNotificationContentTemplateResponse](docs/Model/UpdatePushNotificationContentTemplateResponse.md)
- [UpdatePushPreferencesData](docs/Model/UpdatePushPreferencesData.md)
- [UpdatePushPreferencesForChannelByUrlData](docs/Model/UpdatePushPreferencesForChannelByUrlData.md)
- [UpdatePushPreferencesForChannelByUrlResponse](docs/Model/UpdatePushPreferencesForChannelByUrlResponse.md)
- [UpdatePushPreferencesResponse](docs/Model/UpdatePushPreferencesResponse.md)
- [UpdateUserByIdData](docs/Model/UpdateUserByIdData.md)
- [UpdateUserMetadataData](docs/Model/UpdateUserMetadataData.md)
- [UpdateUserMetadataResponse](docs/Model/UpdateUserMetadataResponse.md)
- [UseDefaultEmojisData](docs/Model/UseDefaultEmojisData.md)
- [UseDefaultEmojisResponse](docs/Model/UseDefaultEmojisResponse.md)
- [ViewAnnouncementByIdResponse](docs/Model/ViewAnnouncementByIdResponse.md)
- [ViewBotByIdResponse](docs/Model/ViewBotByIdResponse.md)
- [ViewChannelInvitationPreferenceResponse](docs/Model/ViewChannelInvitationPreferenceResponse.md)
- [ViewCountPreferenceOfChannelByUrlResponse](docs/Model/ViewCountPreferenceOfChannelByUrlResponse.md)
- [ViewDataExportByIdResponse](docs/Model/ViewDataExportByIdResponse.md)
- [ViewDefaultChannelInvitationPreferenceResponse](docs/Model/ViewDefaultChannelInvitationPreferenceResponse.md)
- [ViewGdprRequestByIdResponse](docs/Model/ViewGdprRequestByIdResponse.md)
- [ViewNumberOfChannelsByJoinStatusResponse](docs/Model/ViewNumberOfChannelsByJoinStatusResponse.md)
- [ViewNumberOfChannelsWithUnreadMessagesResponse](docs/Model/ViewNumberOfChannelsWithUnreadMessagesResponse.md)
- [ViewNumberOfConcurrentConnectionsResponse](docs/Model/ViewNumberOfConcurrentConnectionsResponse.md)
- [ViewNumberOfDailyActiveUsersResponse](docs/Model/ViewNumberOfDailyActiveUsersResponse.md)
- [ViewNumberOfMonthlyActiveUsersResponse](docs/Model/ViewNumberOfMonthlyActiveUsersResponse.md)
- [ViewNumberOfPeakConnectionsResponse](docs/Model/ViewNumberOfPeakConnectionsResponse.md)
- [ViewNumberOfPeakConnectionsResponsePeakConnectionsInner](docs/Model/ViewNumberOfPeakConnectionsResponsePeakConnectionsInner.md)
- [ViewNumberOfUnreadItemsResponse](docs/Model/ViewNumberOfUnreadItemsResponse.md)
- [ViewNumberOfUnreadMessagesResponse](docs/Model/ViewNumberOfUnreadMessagesResponse.md)
- [ViewPushConfigurationByIdResponse](docs/Model/ViewPushConfigurationByIdResponse.md)
- [ViewPushNotificationContentTemplateResponse](docs/Model/ViewPushNotificationContentTemplateResponse.md)
- [ViewPushNotificationContentTemplateResponsePushMessageTemplatesInner](docs/Model/ViewPushNotificationContentTemplateResponsePushMessageTemplatesInner.md)
- [ViewPushPreferencesForChannelByUrlResponse](docs/Model/ViewPushPreferencesForChannelByUrlResponse.md)
- [ViewPushPreferencesResponse](docs/Model/ViewPushPreferencesResponse.md)
- [ViewSecondaryApiTokenByTokenResponse](docs/Model/ViewSecondaryApiTokenByTokenResponse.md)
- [ViewTotalNumberOfMessagesInChannelResponse](docs/Model/ViewTotalNumberOfMessagesInChannelResponse.md)
- [ViewUserMetadataResponse](docs/Model/ViewUserMetadataResponse.md)
- [ViewWhoOwnsRegistrationOrDeviceTokenByTokenResponseInner](docs/Model/ViewWhoOwnsRegistrationOrDeviceTokenByTokenResponseInner.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
