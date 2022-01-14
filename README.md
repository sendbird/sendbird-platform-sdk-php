# OpenAPIClient-php

Sendbird Platform API Javascript SDK

https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AdvancedAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->retrieveAdvancedAnalyticsMetrics($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedAnalyticsApi->retrieveAdvancedAnalyticsMetrics: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-APP_ID.sendbird.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvancedAnalyticsApi* | [**retrieveAdvancedAnalyticsMetrics**](docs/Api/AdvancedAnalyticsApi.md#retrieveadvancedanalyticsmetrics) | **GET** /v3/statistics/metric | Retrieve Advanced analytics metrics
*AnnouncementsApi* | [**getDetailedOpenRateOfAnnouncementById**](docs/Api/AnnouncementsApi.md#getdetailedopenrateofannouncementbyid) | **GET** /v3/announcement_open_rate/{unique_id} | Get detailed open rate of an announcement
*AnnouncementsApi* | [**getDetailedOpenRateOfAnnouncementGroup**](docs/Api/AnnouncementsApi.md#getdetailedopenrateofannouncementgroup) | **GET** /v3/announcement_open_rate_by_group/{announcement_group} | Get detailed open rate of an announcement group
*AnnouncementsApi* | [**getDetailedOpenStatusOfAnnouncementById**](docs/Api/AnnouncementsApi.md#getdetailedopenstatusofannouncementbyid) | **GET** /v3/announcement_open_status/{unique_id} | Get detailed open status of an announcement
*AnnouncementsApi* | [**getStatistics**](docs/Api/AnnouncementsApi.md#getstatistics) | **GET** /v3/announcement_stats/weekly | Get statistics - weekly
*AnnouncementsApi* | [**getStatisticsDaily**](docs/Api/AnnouncementsApi.md#getstatisticsdaily) | **GET** /v3/announcement_stats/daily | Get statistics - daily
*AnnouncementsApi* | [**getStatisticsMonthly**](docs/Api/AnnouncementsApi.md#getstatisticsmonthly) | **GET** /v3/announcement_stats/monthly | Get statistics - monthly
*AnnouncementsApi* | [**listAnnouncementGroups**](docs/Api/AnnouncementsApi.md#listannouncementgroups) | **GET** /v3/announcement_group | List announcement groups
*AnnouncementsApi* | [**listAnnouncements**](docs/Api/AnnouncementsApi.md#listannouncements) | **GET** /v3/announcements | List announcements
*AnnouncementsApi* | [**scheduleAnnouncement**](docs/Api/AnnouncementsApi.md#scheduleannouncement) | **POST** /v3/announcements | Schedule an announcement
*AnnouncementsApi* | [**updateAnnouncementById**](docs/Api/AnnouncementsApi.md#updateannouncementbyid) | **PUT** /v3/announcements/{unique_id} | Update an announcement
*AnnouncementsApi* | [**viewAnnouncementById**](docs/Api/AnnouncementsApi.md#viewannouncementbyid) | **GET** /v3/announcements/{unique_id} | View an announcement
*ApplicationApi* | [**addApnsPushConfiguration**](docs/Api/ApplicationApi.md#addapnspushconfiguration) | **POST** /v3/applications/push/apns | Add an APNs push configuration
*ApplicationApi* | [**addFcmPushConfiguration**](docs/Api/ApplicationApi.md#addfcmpushconfiguration) | **POST** /v3/applications/push/fcm | Add a FCM push configuration
*ApplicationApi* | [**addHmsPushConfiguration**](docs/Api/ApplicationApi.md#addhmspushconfiguration) | **POST** /v3/applications/push/hms | Add an HMS push configuration
*ApplicationApi* | [**addIpToWhitelist**](docs/Api/ApplicationApi.md#addiptowhitelist) | **PUT** /v3/applications/settings/ip_whitelist | Add an IP to a whitelist
*ApplicationApi* | [**deleteAllowedIpsFromWhitelist**](docs/Api/ApplicationApi.md#deleteallowedipsfromwhitelist) | **DELETE** /v3/applications/settings/ip_whitelist | Delete allowed IPs from a whitelist
*ApplicationApi* | [**deleteApnsCertificateById**](docs/Api/ApplicationApi.md#deleteapnscertificatebyid) | **DELETE** /v3/applications/push/apns/cert/{provider_id} | Delete an APNs certificate
*ApplicationApi* | [**generateSecondaryApiToken**](docs/Api/ApplicationApi.md#generatesecondaryapitoken) | **POST** /v3/applications/api_tokens | Generate a secondary API token
*ApplicationApi* | [**listPushConfigurations**](docs/Api/ApplicationApi.md#listpushconfigurations) | **GET** /v3/applications/push/{push_type} | List push configurations
*ApplicationApi* | [**listPushNotificationContentTemplates**](docs/Api/ApplicationApi.md#listpushnotificationcontenttemplates) | **GET** /v3/applications/push/message_templates | List push notification content templates
*ApplicationApi* | [**listSecondaryApiTokens**](docs/Api/ApplicationApi.md#listsecondaryapitokens) | **GET** /v3/applications/api_tokens | List secondary API tokens
*ApplicationApi* | [**removePushConfigurationById**](docs/Api/ApplicationApi.md#removepushconfigurationbyid) | **DELETE** /v3/applications/push/{push_type}/{provider_id} | Remove a push configuration
*ApplicationApi* | [**retrieveIpWhitelist**](docs/Api/ApplicationApi.md#retrieveipwhitelist) | **GET** /v3/applications/settings/ip_whitelist | Retrieve an IP whitelist
*ApplicationApi* | [**revokeSecondaryApiTokenByToken**](docs/Api/ApplicationApi.md#revokesecondaryapitokenbytoken) | **DELETE** /v3/applications/api_tokens/{api_token} | Revoke a secondary API token
*ApplicationApi* | [**updateApnsPushConfigurationById**](docs/Api/ApplicationApi.md#updateapnspushconfigurationbyid) | **PUT** /v3/applications/push/apns/{provider_id} | Update an APNs push configuration
*ApplicationApi* | [**updateDefaultChannelInvitationPreference**](docs/Api/ApplicationApi.md#updatedefaultchannelinvitationpreference) | **PUT** /v3/applications/default_channel_invitation_preference | Update default channel invitation preference
*ApplicationApi* | [**updateFcmPushConfigurationById**](docs/Api/ApplicationApi.md#updatefcmpushconfigurationbyid) | **PUT** /v3/applications/push/fcm/{provider_id} | Update a FCM push configuration
*ApplicationApi* | [**updateHmsPushConfigurationById**](docs/Api/ApplicationApi.md#updatehmspushconfigurationbyid) | **PUT** /v3/applications/push/hms/{provider_id} | Update an HMS push configuration
*ApplicationApi* | [**updatePushNotificationContentTemplate**](docs/Api/ApplicationApi.md#updatepushnotificationcontenttemplate) | **PUT** /v3/applications/push/message_templates/{template_name} | Update a push notification content template
*ApplicationApi* | [**viewDefaultChannelInvitationPreference**](docs/Api/ApplicationApi.md#viewdefaultchannelinvitationpreference) | **GET** /v3/applications/default_channel_invitation_preference | View default channel invitation preference
*ApplicationApi* | [**viewNumberOfConcurrentConnections**](docs/Api/ApplicationApi.md#viewnumberofconcurrentconnections) | **GET** /v3/applications/ccu | View number of concurrent connections
*ApplicationApi* | [**viewNumberOfDailyActiveUsers**](docs/Api/ApplicationApi.md#viewnumberofdailyactiveusers) | **GET** /v3/applications/dau | View number of daily active users
*ApplicationApi* | [**viewNumberOfMonthlyActiveUsers**](docs/Api/ApplicationApi.md#viewnumberofmonthlyactiveusers) | **GET** /v3/applications/mau | View number of monthly active users
*ApplicationApi* | [**viewNumberOfPeakConnections**](docs/Api/ApplicationApi.md#viewnumberofpeakconnections) | **GET** /v3/applications/peak_connections | View number of peak connections
*ApplicationApi* | [**viewPushConfigurationById**](docs/Api/ApplicationApi.md#viewpushconfigurationbyid) | **GET** /v3/applications/push/{push_type}/{provider_id} | View a push configuration
*ApplicationApi* | [**viewPushNotificationContentTemplate**](docs/Api/ApplicationApi.md#viewpushnotificationcontenttemplate) | **GET** /v3/applications/push/message_templates/{template_name} | View a push notification content template
*ApplicationApi* | [**viewSecondaryApiTokenByToken**](docs/Api/ApplicationApi.md#viewsecondaryapitokenbytoken) | **GET** /v3/applications/api_tokens/{api_token} | View a secondary API token
*BotInterfaceApi* | [**createBot**](docs/Api/BotInterfaceApi.md#createbot) | **POST** /v3/bots | Create a bot
*BotInterfaceApi* | [**deleteBotById**](docs/Api/BotInterfaceApi.md#deletebotbyid) | **DELETE** /v3/bots/{bot_userid} | Delete a bot
*BotInterfaceApi* | [**joinChannels**](docs/Api/BotInterfaceApi.md#joinchannels) | **POST** /v3/bots/{bot_userid}/channels | Join channels
*BotInterfaceApi* | [**leaveChannels**](docs/Api/BotInterfaceApi.md#leavechannels) | **DELETE** /v3/bots/{bot_userid}/channels | Leave channels - When leaving all channels
*BotInterfaceApi* | [**leaveChannelsByUrl**](docs/Api/BotInterfaceApi.md#leavechannelsbyurl) | **DELETE** /v3/bots/{bot_userid}/channels/{channel_url} | Leave channels - When leaving a channel by its channel URL
*BotInterfaceApi* | [**listBots**](docs/Api/BotInterfaceApi.md#listbots) | **GET** /v3/bots | List bots
*BotInterfaceApi* | [**sendBotsMessage**](docs/Api/BotInterfaceApi.md#sendbotsmessage) | **POST** /v3/bots/{bot_userid}/send | Send a bot&#39;s message
*BotInterfaceApi* | [**updateBotById**](docs/Api/BotInterfaceApi.md#updatebotbyid) | **PUT** /v3/bots/{bot_userid} | Update a bot
*BotInterfaceApi* | [**viewBotById**](docs/Api/BotInterfaceApi.md#viewbotbyid) | **GET** /v3/bots/{bot_userid} | View a bot
*DataExportApi* | [**listDataExportsByMessageChannelOrUser**](docs/Api/DataExportApi.md#listdataexportsbymessagechanneloruser) | **GET** /v3/export/{data_type} | List data exports by message, channel, or user
*DataExportApi* | [**registerAndScheduleDataExport**](docs/Api/DataExportApi.md#registerandscheduledataexport) | **POST** /v3/export/{data_type} | Register and schedule a data export
*DataExportApi* | [**viewDataExportById**](docs/Api/DataExportApi.md#viewdataexportbyid) | **GET** /v3/export/{data_type}/{request_id} | View a data export
*DataPrivacyApi* | [**cancelTheRegistrationOfGdprRequestById**](docs/Api/DataPrivacyApi.md#canceltheregistrationofgdprrequestbyid) | **DELETE** /v3/privacy/gdpr/{request_id} | Cancel the registration of a GDPR request
*DataPrivacyApi* | [**listGdprRequests**](docs/Api/DataPrivacyApi.md#listgdprrequests) | **GET** /v3/privacy/gdpr | List GDPR requests
*DataPrivacyApi* | [**registerGdprRequest**](docs/Api/DataPrivacyApi.md#registergdprrequest) | **POST** /v3/privacy/gdpr | Register a GDPR request
*DataPrivacyApi* | [**viewGdprRequestById**](docs/Api/DataPrivacyApi.md#viewgdprrequestbyid) | **GET** /v3/privacy/gdpr/{request_id} | View a GDPR request
*EmojisApi* | [**addEmojiCategories**](docs/Api/EmojisApi.md#addemojicategories) | **POST** /v3/emoji_categories | Add emoji categories
*EmojisApi* | [**addEmojis**](docs/Api/EmojisApi.md#addemojis) | **POST** /v3/emojis | Add emojis
*EmojisApi* | [**deleteEmojiByKey**](docs/Api/EmojisApi.md#deleteemojibykey) | **DELETE** /v3/emojis/{emoji_key} | Delete an emoji
*EmojisApi* | [**deleteEmojiCategoryById**](docs/Api/EmojisApi.md#deleteemojicategorybyid) | **DELETE** /v3/emoji_categories/{emoji_category_id} | Delete an emoji category
*EmojisApi* | [**enableReactions**](docs/Api/EmojisApi.md#enablereactions) | **PUT** /v3/applications/settings/reactions | Enable reactions
*EmojisApi* | [**getEmojiByKey**](docs/Api/EmojisApi.md#getemojibykey) | **GET** /v3/emojis/{emoji_key} | Get an emoji
*EmojisApi* | [**getEmojiCategoryById**](docs/Api/EmojisApi.md#getemojicategorybyid) | **GET** /v3/emoji_categories/{emoji_category_id} | Get an emoji category
*EmojisApi* | [**listAllEmojisAndEmojiCategories**](docs/Api/EmojisApi.md#listallemojisandemojicategories) | **GET** /v3/emoji_categories | List all emojis and emoji categories
*EmojisApi* | [**listEmojis**](docs/Api/EmojisApi.md#listemojis) | **GET** /v3/emojis | List emojis
*EmojisApi* | [**updateEmojiCategoryUrlById**](docs/Api/EmojisApi.md#updateemojicategoryurlbyid) | **PUT** /v3/emoji_categories/{emoji_category_id} | Update an emoji category URL
*EmojisApi* | [**updateEmojiUrlByKey**](docs/Api/EmojisApi.md#updateemojiurlbykey) | **PUT** /v3/emojis/{emoji_key} | Update an emoji URL
*EmojisApi* | [**useDefaultEmojis**](docs/Api/EmojisApi.md#usedefaultemojis) | **PUT** /v3/applications/settings/use_default_emoji | Use default emojis
*GroupChannelApi* | [**gcAcceptInvitation**](docs/Api/GroupChannelApi.md#gcacceptinvitation) | **PUT** /v3/group_channels/{channel_url}/accept | Accept an invitation
*GroupChannelApi* | [**gcBanUser**](docs/Api/GroupChannelApi.md#gcbanuser) | **POST** /v3/group_channels/{channel_url}/ban | Ban a user
*GroupChannelApi* | [**gcCancelTheRegistrationOfOperators**](docs/Api/GroupChannelApi.md#gccanceltheregistrationofoperators) | **DELETE** /v3/group_channels/{channel_url}/operators | Cancel the registration of operators
*GroupChannelApi* | [**gcCheckIfMemberById**](docs/Api/GroupChannelApi.md#gccheckifmemberbyid) | **GET** /v3/group_channels/{channel_url}/members/{user_id} | Check if member
*GroupChannelApi* | [**gcCreateChannel**](docs/Api/GroupChannelApi.md#gccreatechannel) | **POST** /v3/group_channels | Create a channel
*GroupChannelApi* | [**gcDeclineInvitation**](docs/Api/GroupChannelApi.md#gcdeclineinvitation) | **PUT** /v3/group_channels/{channel_url}/decline | Decline an invitation
*GroupChannelApi* | [**gcDeleteChannelByUrl**](docs/Api/GroupChannelApi.md#gcdeletechannelbyurl) | **DELETE** /v3/group_channels/{channel_url} | Delete a channel
*GroupChannelApi* | [**gcFreezeChannel**](docs/Api/GroupChannelApi.md#gcfreezechannel) | **PUT** /v3/group_channels/{channel_url}/freeze | Freeze a channel
*GroupChannelApi* | [**gcHideOrArchiveChannel**](docs/Api/GroupChannelApi.md#gchideorarchivechannel) | **PUT** /v3/group_channels/{channel_url}/hide | Hide or archive a channel
*GroupChannelApi* | [**gcInviteAsMembers**](docs/Api/GroupChannelApi.md#gcinviteasmembers) | **POST** /v3/group_channels/{channel_url}/invite | Invite as members
*GroupChannelApi* | [**gcJoinChannel**](docs/Api/GroupChannelApi.md#gcjoinchannel) | **PUT** /v3/group_channels/{channel_url}/join | Join a channel
*GroupChannelApi* | [**gcLeaveChannel**](docs/Api/GroupChannelApi.md#gcleavechannel) | **PUT** /v3/group_channels/{channel_url}/leave | Leave a channel
*GroupChannelApi* | [**gcListBannedUsers**](docs/Api/GroupChannelApi.md#gclistbannedusers) | **GET** /v3/group_channels/{channel_url}/ban | List banned users
*GroupChannelApi* | [**gcListChannels**](docs/Api/GroupChannelApi.md#gclistchannels) | **GET** /v3/group_channels | List channels
*GroupChannelApi* | [**gcListMembers**](docs/Api/GroupChannelApi.md#gclistmembers) | **GET** /v3/group_channels/{channel_url}/members | List members
*GroupChannelApi* | [**gcListMutedUsers**](docs/Api/GroupChannelApi.md#gclistmutedusers) | **GET** /v3/group_channels/{channel_url}/mute | List muted users
*GroupChannelApi* | [**gcListOperators**](docs/Api/GroupChannelApi.md#gclistoperators) | **GET** /v3/group_channels/{channel_url}/operators | List operators
*GroupChannelApi* | [**gcMuteUser**](docs/Api/GroupChannelApi.md#gcmuteuser) | **POST** /v3/group_channels/{channel_url}/mute | Mute a user
*GroupChannelApi* | [**gcRegisterOperators**](docs/Api/GroupChannelApi.md#gcregisteroperators) | **POST** /v3/group_channels/{channel_url}/operators | Register operators
*GroupChannelApi* | [**gcResetChatHistory**](docs/Api/GroupChannelApi.md#gcresetchathistory) | **PUT** /v3/group_channels/{channel_url}/reset_user_history | Reset chat history
*GroupChannelApi* | [**gcUnbanUserById**](docs/Api/GroupChannelApi.md#gcunbanuserbyid) | **DELETE** /v3/group_channels/{channel_url}/ban/{banned_user_id} | Unban a user
*GroupChannelApi* | [**gcUnhideOrUnarchiveChannel**](docs/Api/GroupChannelApi.md#gcunhideorunarchivechannel) | **DELETE** /v3/group_channels/{channel_url}/hide | Unhide or unarchive a channel
*GroupChannelApi* | [**gcUnmuteUserById**](docs/Api/GroupChannelApi.md#gcunmuteuserbyid) | **DELETE** /v3/group_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
*GroupChannelApi* | [**gcUpdateBanById**](docs/Api/GroupChannelApi.md#gcupdatebanbyid) | **PUT** /v3/group_channels/{channel_url}/ban/{banned_user_id} | Update a ban
*GroupChannelApi* | [**gcUpdateChannelByUrl**](docs/Api/GroupChannelApi.md#gcupdatechannelbyurl) | **PUT** /v3/group_channels/{channel_url} | Update a channel
*GroupChannelApi* | [**gcViewBanById**](docs/Api/GroupChannelApi.md#gcviewbanbyid) | **GET** /v3/group_channels/{channel_url}/ban/{banned_user_id} | View a ban
*GroupChannelApi* | [**gcViewChannelByUrl**](docs/Api/GroupChannelApi.md#gcviewchannelbyurl) | **GET** /v3/group_channels/{channel_url} | View a channel
*GroupChannelApi* | [**gcViewMuteById**](docs/Api/GroupChannelApi.md#gcviewmutebyid) | **GET** /v3/group_channels/{channel_url}/mute/{muted_user_id} | View a mute
*MessagesApi* | [**addExtraDataToMessage**](docs/Api/MessagesApi.md#addextradatatomessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Add extra data to a message
*MessagesApi* | [**addReactionToAMessage**](docs/Api/MessagesApi.md#addreactiontoamessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Add a reaction to a message
*MessagesApi* | [**deleteMessageById**](docs/Api/MessagesApi.md#deletemessagebyid) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id} | Delete a message
*MessagesApi* | [**gcMarkAllMessagesAsDelivered**](docs/Api/MessagesApi.md#gcmarkallmessagesasdelivered) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_delivered | Mark all messages as delivered
*MessagesApi* | [**gcMarkAllMessagesAsRead**](docs/Api/MessagesApi.md#gcmarkallmessagesasread) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_read | Mark all messages as read
*MessagesApi* | [**gcViewNumberOfEachMembersUnreadMessages**](docs/Api/MessagesApi.md#gcviewnumberofeachmembersunreadmessages) | **GET** /v3/group_channels/{channel_url}/messages/unread_count | View number of each member&#39;s unread messages
*MessagesApi* | [**listMessages**](docs/Api/MessagesApi.md#listmessages) | **GET** /v3/{channel_type}/{channel_url}/messages | List messages
*MessagesApi* | [**listReactionsOfMessage**](docs/Api/MessagesApi.md#listreactionsofmessage) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | List reactions of a message
*MessagesApi* | [**removeExtraDataFromMessage**](docs/Api/MessagesApi.md#removeextradatafrommessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Remove extra data from a message
*MessagesApi* | [**removeReactionFromAMessage**](docs/Api/MessagesApi.md#removereactionfromamessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Remove a reaction from a message
*MessagesApi* | [**sendMessage**](docs/Api/MessagesApi.md#sendmessage) | **POST** /v3/{channel_type}/{channel_url}/messages | Send a message
*MessagesApi* | [**translateMessageIntoOtherLanguages**](docs/Api/MessagesApi.md#translatemessageintootherlanguages) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/translation | Translate a message into other languages
*MessagesApi* | [**updateExtraDataInMessage**](docs/Api/MessagesApi.md#updateextradatainmessage) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Update extra data in a message
*MessagesApi* | [**updateMessageById**](docs/Api/MessagesApi.md#updatemessagebyid) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id} | Update a message
*MessagesApi* | [**viewMessageById**](docs/Api/MessagesApi.md#viewmessagebyid) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id} | View a message
*MessagesApi* | [**viewTotalNumberOfMessagesInChannel**](docs/Api/MessagesApi.md#viewtotalnumberofmessagesinchannel) | **GET** /v3/{channel_type}/{channel_url}/messages/total_count | View total number of messages in a channel
*MigrationApi* | [**migrateMessagesByUrl**](docs/Api/MigrationApi.md#migratemessagesbyurl) | **POST** /v3/migration/{target_channel_url} | Migrate messages
*OpenChannelApi* | [**ocBanUser**](docs/Api/OpenChannelApi.md#ocbanuser) | **POST** /v3/open_channels/{channel_url}/ban | Ban a user
*OpenChannelApi* | [**ocCancelTheRegistrationOfOperators**](docs/Api/OpenChannelApi.md#occanceltheregistrationofoperators) | **DELETE** /v3/open_channels/{channel_url}/operators | Cancel the registration of operators
*OpenChannelApi* | [**ocCreateChannel**](docs/Api/OpenChannelApi.md#occreatechannel) | **POST** /v3/open_channels | Create a channel
*OpenChannelApi* | [**ocDeleteChannelByUrl**](docs/Api/OpenChannelApi.md#ocdeletechannelbyurl) | **DELETE** /v3/open_channels/{channel_url} | Delete a channel
*OpenChannelApi* | [**ocFreezeChannel**](docs/Api/OpenChannelApi.md#ocfreezechannel) | **PUT** /v3/open_channels/{channel_url}/freeze | Freeze a channel
*OpenChannelApi* | [**ocListBannedUsers**](docs/Api/OpenChannelApi.md#oclistbannedusers) | **GET** /v3/open_channels/{channel_url}/ban | List banned users
*OpenChannelApi* | [**ocListChannels**](docs/Api/OpenChannelApi.md#oclistchannels) | **GET** /v3/open_channels | List channels
*OpenChannelApi* | [**ocListMutedUsers**](docs/Api/OpenChannelApi.md#oclistmutedusers) | **GET** /v3/open_channels/{channel_url}/mute | List muted users
*OpenChannelApi* | [**ocListOperators**](docs/Api/OpenChannelApi.md#oclistoperators) | **GET** /v3/open_channels/{channel_url}/operators | List operators
*OpenChannelApi* | [**ocListParticipants**](docs/Api/OpenChannelApi.md#oclistparticipants) | **GET** /v3/open_channels/{channel_url}/participants | List participants
*OpenChannelApi* | [**ocMuteUser**](docs/Api/OpenChannelApi.md#ocmuteuser) | **POST** /v3/open_channels/{channel_url}/mute | Mute a user
*OpenChannelApi* | [**ocRegisterOperators**](docs/Api/OpenChannelApi.md#ocregisteroperators) | **POST** /v3/open_channels/{channel_url}/operators | Register operators
*OpenChannelApi* | [**ocUnbanUserById**](docs/Api/OpenChannelApi.md#ocunbanuserbyid) | **DELETE** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Unban a user
*OpenChannelApi* | [**ocUnmuteUserById**](docs/Api/OpenChannelApi.md#ocunmuteuserbyid) | **DELETE** /v3/open_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
*OpenChannelApi* | [**ocUpdateBanById**](docs/Api/OpenChannelApi.md#ocupdatebanbyid) | **PUT** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Update a ban
*OpenChannelApi* | [**ocUpdateChannelByUrl**](docs/Api/OpenChannelApi.md#ocupdatechannelbyurl) | **PUT** /v3/open_channels/{channel_url} | Update a channel
*OpenChannelApi* | [**ocViewBanById**](docs/Api/OpenChannelApi.md#ocviewbanbyid) | **GET** /v3/open_channels/{channel_url}/ban/{banned_user_id} | View a ban
*OpenChannelApi* | [**ocViewChannelByUrl**](docs/Api/OpenChannelApi.md#ocviewchannelbyurl) | **GET** /v3/open_channels/{channel_url} | View a channel
*OpenChannelApi* | [**ocViewMuteById**](docs/Api/OpenChannelApi.md#ocviewmutebyid) | **GET** /v3/open_channels/{channel_url}/mute/{muted_user_id} | View a mute
*OrganizationAPIApi* | [**createApplication**](docs/Api/OrganizationAPIApi.md#createapplication) | **POST** /api/v2/applications | Create an application
*OrganizationAPIApi* | [**deleteApplicationById**](docs/Api/OrganizationAPIApi.md#deleteapplicationbyid) | **DELETE** /api/v2/applications/{app_id} | Delete an application
*OrganizationAPIApi* | [**listApplications**](docs/Api/OrganizationAPIApi.md#listapplications) | **GET** /api/v2/applications | List applications
*OrganizationAPIApi* | [**viewApplicationById**](docs/Api/OrganizationAPIApi.md#viewapplicationbyid) | **GET** /api/v2/applications/{app_id} | View an application
*ReportContentSubjectApi* | [**listReports**](docs/Api/ReportContentSubjectApi.md#listreports) | **GET** /v3/report | List reports
*ReportContentSubjectApi* | [**listReportsOnChannelByUrl**](docs/Api/ReportContentSubjectApi.md#listreportsonchannelbyurl) | **GET** /v3/report/{channel_type}/{channel_url} | List reports on a channel
*ReportContentSubjectApi* | [**listReportsOnMessageById**](docs/Api/ReportContentSubjectApi.md#listreportsonmessagebyid) | **GET** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | List reports on a message
*ReportContentSubjectApi* | [**listReportsOnUserById**](docs/Api/ReportContentSubjectApi.md#listreportsonuserbyid) | **GET** /v3/report/users/{offending_user_id} | List reports on a user
*ReportContentSubjectApi* | [**reportChannelByUrl**](docs/Api/ReportContentSubjectApi.md#reportchannelbyurl) | **POST** /v3/report/{channel_type}/{channel_url} | Report a channel
*ReportContentSubjectApi* | [**reportMessageById**](docs/Api/ReportContentSubjectApi.md#reportmessagebyid) | **POST** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | Report a message
*ReportContentSubjectApi* | [**reportUserById**](docs/Api/ReportContentSubjectApi.md#reportuserbyid) | **POST** /v3/report/users/{offending_user_id} | Report a user
*ReportContentSubjectApi* | [**viewModeratedMessageById**](docs/Api/ReportContentSubjectApi.md#viewmoderatedmessagebyid) | **GET** /v3/report/{channel_type}/{channel_url}/profanity_messages/{message_id} | View a moderated message
*UserApi* | [**addRegistrationOrDeviceToken**](docs/Api/UserApi.md#addregistrationordevicetoken) | **POST** /v3/users/{user_id}/push/{token_type} | Add a registration or device token
*UserApi* | [**banFromChannelsWithCustomChannelTypes**](docs/Api/UserApi.md#banfromchannelswithcustomchanneltypes) | **POST** /v3/users/{user_id}/banned_channel_custom_types | Ban from channels with custom channel types
*UserApi* | [**blockUser**](docs/Api/UserApi.md#blockuser) | **POST** /v3/users/{user_id}/block | Block a user
*UserApi* | [**choosePushNotificationContentTemplate**](docs/Api/UserApi.md#choosepushnotificationcontenttemplate) | **PUT** /v3/users/{user_id}/push/template | Choose a push notification content template
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /v3/users | Create a user
*UserApi* | [**deleteUserById**](docs/Api/UserApi.md#deleteuserbyid) | **DELETE** /v3/users/{user_id} | Delete a user
*UserApi* | [**leaveMyGroupChannels**](docs/Api/UserApi.md#leavemygroupchannels) | **PUT** /v3/users/{user_id}/my_group_channels/leave | Leave my group channels
*UserApi* | [**listBannedChannels**](docs/Api/UserApi.md#listbannedchannels) | **GET** /v3/users/{user_id}/ban | List banned channels
*UserApi* | [**listBlockedUsers**](docs/Api/UserApi.md#listblockedusers) | **GET** /v3/users/{user_id}/block | List blocked users
*UserApi* | [**listMutedChannels**](docs/Api/UserApi.md#listmutedchannels) | **GET** /v3/users/{user_id}/mute | List muted channels
*UserApi* | [**listMyGroupChannels**](docs/Api/UserApi.md#listmygroupchannels) | **GET** /v3/users/{user_id}/my_group_channels | List my group channels
*UserApi* | [**listRegistrationOrDeviceTokens**](docs/Api/UserApi.md#listregistrationordevicetokens) | **GET** /v3/users/{user_id}/push/{token_type} | List registration or device tokens
*UserApi* | [**listUsers**](docs/Api/UserApi.md#listusers) | **GET** /v3/users | List users
*UserApi* | [**markAllMessagesAsRead**](docs/Api/UserApi.md#markallmessagesasread) | **PUT** /v3/users/{user_id}/mark_as_read_all | Mark all messages as read
*UserApi* | [**muteInChannelsWithCustomChannelTypes**](docs/Api/UserApi.md#muteinchannelswithcustomchanneltypes) | **POST** /v3/users/{user_id}/muted_channel_custom_types | Mute in channels with custom channel types
*UserApi* | [**registerAsOperatorToChannelsWithCustomChannelTypes**](docs/Api/UserApi.md#registerasoperatortochannelswithcustomchanneltypes) | **POST** /v3/users/{user_id}/operating_channel_custom_types | Register as an operator to channels with custom channel types
*UserApi* | [**removeRegistrationOrDeviceToken**](docs/Api/UserApi.md#removeregistrationordevicetoken) | **DELETE** /v3/users/{user_id}/push | Remove a registration or device token - When unregistering all device tokens
*UserApi* | [**removeRegistrationOrDeviceTokenByToken**](docs/Api/UserApi.md#removeregistrationordevicetokenbytoken) | **DELETE** /v3/users/{user_id}/push/{token_type}/{token} | Remove a registration or device token - When unregistering a specific token
*UserApi* | [**removeRegistrationOrDeviceTokenFromOwnerByToken**](docs/Api/UserApi.md#removeregistrationordevicetokenfromownerbytoken) | **DELETE** /v3/push/device_tokens/{token_type}/{token} | Remove a registration or device token from an owner
*UserApi* | [**resetPushPreferences**](docs/Api/UserApi.md#resetpushpreferences) | **DELETE** /v3/users/{user_id}/push_preference | Reset push preferences
*UserApi* | [**unblockUserById**](docs/Api/UserApi.md#unblockuserbyid) | **DELETE** /v3/users/{user_id}/block/{target_id} | Unblock a user
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
*UserChannelMetadataApi* | [**createChannelMetacounter**](docs/Api/UserChannelMetadataApi.md#createchannelmetacounter) | **POST** /v3/{channel_type}/{channel_url}/metacounter | Create a channel metacounter
*UserChannelMetadataApi* | [**createChannelMetadata**](docs/Api/UserChannelMetadataApi.md#createchannelmetadata) | **POST** /v3/{channel_type}/{channel_url}/metadata | Create a channel metadata
*UserChannelMetadataApi* | [**createUserMetadata**](docs/Api/UserChannelMetadataApi.md#createusermetadata) | **POST** /v3/users/{user_id}/metadata | Create a user metadata
*UserChannelMetadataApi* | [**deleteChannelMetacounter**](docs/Api/UserChannelMetadataApi.md#deletechannelmetacounter) | **DELETE** /v3/{channel_type}/{channel_url}/metacounter | Delete a channel metacounter - When deleting all items of a channel metacounter
*UserChannelMetadataApi* | [**deleteChannelMetacounterByKey**](docs/Api/UserChannelMetadataApi.md#deletechannelmetacounterbykey) | **DELETE** /v3/{channel_type}/{channel_url}/metacounter/{key} | Delete a channel metacounter - When deleting a specific item of a channel metacounter by its key
*UserChannelMetadataApi* | [**deleteChannelMetadata**](docs/Api/UserChannelMetadataApi.md#deletechannelmetadata) | **DELETE** /v3/{channel_type}/{channel_url}/metadata | Delete a channel metadata - When deleting all items of a channel metadata
*UserChannelMetadataApi* | [**deleteChannelMetadataByKey**](docs/Api/UserChannelMetadataApi.md#deletechannelmetadatabykey) | **DELETE** /v3/{channel_type}/{channel_url}/metadata/{key} | Delete a channel metadata - When deleting a specific item of a channel metadata by its key
*UserChannelMetadataApi* | [**deleteUserMetadata**](docs/Api/UserChannelMetadataApi.md#deleteusermetadata) | **DELETE** /v3/users/{user_id}/metadata | Delete a user metadata - When deleting all items of a user metadata
*UserChannelMetadataApi* | [**deleteUserMetadataByKey**](docs/Api/UserChannelMetadataApi.md#deleteusermetadatabykey) | **DELETE** /v3/users/{user_id}/metadata/{key} | Delete a user metadata - When deleting a specific item of a user metadata by its key
*UserChannelMetadataApi* | [**updateChannelMetacounter**](docs/Api/UserChannelMetadataApi.md#updatechannelmetacounter) | **PUT** /v3/{channel_type}/{channel_url}/metacounter | Update a channel metacounter - When updating existing items of a channel metacounter by their keys or adding new items to the metacounter
*UserChannelMetadataApi* | [**updateChannelMetacounterByKey**](docs/Api/UserChannelMetadataApi.md#updatechannelmetacounterbykey) | **PUT** /v3/{channel_type}/{channel_url}/metacounter/{key} | Update a channel metacounter - When updating a specific item of a channel metacounter by its key
*UserChannelMetadataApi* | [**updateChannelMetadata**](docs/Api/UserChannelMetadataApi.md#updatechannelmetadata) | **PUT** /v3/{channel_type}/{channel_url}/metadata | Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata
*UserChannelMetadataApi* | [**updateChannelMetadataByKey**](docs/Api/UserChannelMetadataApi.md#updatechannelmetadatabykey) | **PUT** /v3/{channel_type}/{channel_url}/metadata/{key} | Update a channel metadata - When updating a specific item of a channel metadata by its key
*UserChannelMetadataApi* | [**updateUserMetadata**](docs/Api/UserChannelMetadataApi.md#updateusermetadata) | **PUT** /v3/users/{user_id}/metadata | Update a user metadata - When updating existing items of a user metadata by their keys or adding new items to the metadata
*UserChannelMetadataApi* | [**updateUserMetadataByKey**](docs/Api/UserChannelMetadataApi.md#updateusermetadatabykey) | **PUT** /v3/users/{user_id}/metadata/{key} | Update a user metadata - When updating a specific item of a user metadata by its key
*UserChannelMetadataApi* | [**viewChannelMetacounter**](docs/Api/UserChannelMetadataApi.md#viewchannelmetacounter) | **GET** /v3/{channel_type}/{channel_url}/metacounter | View a channel metacounter - When retrieving all items of a channel metacounter
*UserChannelMetadataApi* | [**viewChannelMetacounterByKey**](docs/Api/UserChannelMetadataApi.md#viewchannelmetacounterbykey) | **GET** /v3/{channel_type}/{channel_url}/metacounter/{key} | View a channel metacounter - When retrieving a specific item of a channel metacounter by its key
*UserChannelMetadataApi* | [**viewChannelMetadata**](docs/Api/UserChannelMetadataApi.md#viewchannelmetadata) | **GET** /v3/{channel_type}/{channel_url}/metadata | View a channel metadata - When retrieving all items of a channel metadata
*UserChannelMetadataApi* | [**viewChannelMetadataByKey**](docs/Api/UserChannelMetadataApi.md#viewchannelmetadatabykey) | **GET** /v3/{channel_type}/{channel_url}/metadata/{key} | View a channel metadata - When retrieving a specific item of a channel metadata by its key
*UserChannelMetadataApi* | [**viewUserMetadata**](docs/Api/UserChannelMetadataApi.md#viewusermetadata) | **GET** /v3/users/{user_id}/metadata | View a user metadata - When retrieving all items of a user metadata
*UserChannelMetadataApi* | [**viewUserMetadataByKey**](docs/Api/UserChannelMetadataApi.md#viewusermetadatabykey) | **GET** /v3/users/{user_id}/metadata/{key} | View a user metadata - When retrieving a specific item of a user metadata by its key
*WebhooksApi* | [**chooseWhichEventsToSubscribeTo**](docs/Api/WebhooksApi.md#choosewhicheventstosubscribeto) | **PUT** /v3/applications/settings/webhook | Choose which events to subscribe to
*WebhooksApi* | [**retrieveListOfSubscribedEvents**](docs/Api/WebhooksApi.md#retrievelistofsubscribedevents) | **GET** /v3/applications/settings/webhook | Retrieve a list of subscribed events

## Models

- [AddApnsPushConfigurationData](docs/Model/AddApnsPushConfigurationData.md)
- [AddEmojisData](docs/Model/AddEmojisData.md)
- [AddExtraDataToMessageData](docs/Model/AddExtraDataToMessageData.md)
- [AddFcmPushConfigurationData](docs/Model/AddFcmPushConfigurationData.md)
- [AddHmsPushConfigurationData](docs/Model/AddHmsPushConfigurationData.md)
- [AddIpToWhitelistData](docs/Model/AddIpToWhitelistData.md)
- [AddReactionToAMessageData](docs/Model/AddReactionToAMessageData.md)
- [AddRegistrationOrDeviceTokenData](docs/Model/AddRegistrationOrDeviceTokenData.md)
- [BanFromChannelsWithCustomChannelTypesData](docs/Model/BanFromChannelsWithCustomChannelTypesData.md)
- [Blob](docs/Model/Blob.md)
- [BlockUserData](docs/Model/BlockUserData.md)
- [ChooseWhichEventsToSubscribeToData](docs/Model/ChooseWhichEventsToSubscribeToData.md)
- [CreateBotData](docs/Model/CreateBotData.md)
- [CreateChannelMetacounterData](docs/Model/CreateChannelMetacounterData.md)
- [CreateChannelMetadataData](docs/Model/CreateChannelMetadataData.md)
- [CreateUserData](docs/Model/CreateUserData.md)
- [CreateUserMetadataData](docs/Model/CreateUserMetadataData.md)
- [EnableReactionsData](docs/Model/EnableReactionsData.md)
- [File](docs/Model/File.md)
- [GcAcceptInvitationData](docs/Model/GcAcceptInvitationData.md)
- [GcBanUserData](docs/Model/GcBanUserData.md)
- [GcCreateChannelData](docs/Model/GcCreateChannelData.md)
- [GcDeclineInvitationData](docs/Model/GcDeclineInvitationData.md)
- [GcFreezeChannelData](docs/Model/GcFreezeChannelData.md)
- [GcHideOrArchiveChannelData](docs/Model/GcHideOrArchiveChannelData.md)
- [GcInviteAsMembersData](docs/Model/GcInviteAsMembersData.md)
- [GcJoinChannelData](docs/Model/GcJoinChannelData.md)
- [GcLeaveChannelData](docs/Model/GcLeaveChannelData.md)
- [GcMarkAllMessagesAsDeliveredData](docs/Model/GcMarkAllMessagesAsDeliveredData.md)
- [GcMarkAllMessagesAsReadData](docs/Model/GcMarkAllMessagesAsReadData.md)
- [GcMuteUserData](docs/Model/GcMuteUserData.md)
- [GcRegisterOperatorsData](docs/Model/GcRegisterOperatorsData.md)
- [GcResetChatHistoryData](docs/Model/GcResetChatHistoryData.md)
- [GcUpdateBanByIdData](docs/Model/GcUpdateBanByIdData.md)
- [GcUpdateChannelByUrlData](docs/Model/GcUpdateChannelByUrlData.md)
- [GenerateSecondaryApiTokenData](docs/Model/GenerateSecondaryApiTokenData.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20010PeakConnections](docs/Model/InlineResponse20010PeakConnections.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20013PushConfigurations](docs/Model/InlineResponse20013PushConfigurations.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20016PushMessageTemplates](docs/Model/InlineResponse20016PushMessageTemplates.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20023BannedChannels](docs/Model/InlineResponse20023BannedChannels.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse2002PushConfigurations](docs/Model/InlineResponse2002PushConfigurations.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20034BannedList](docs/Model/InlineResponse20034BannedList.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse2003PushConfigurations](docs/Model/InlineResponse2003PushConfigurations.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20040Announcements](docs/Model/InlineResponse20040Announcements.md)
- [InlineResponse20040Message](docs/Model/InlineResponse20040Message.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse20041CreateChannelOptions](docs/Model/InlineResponse20041CreateChannelOptions.md)
- [InlineResponse20042](docs/Model/InlineResponse20042.md)
- [InlineResponse20042Message](docs/Model/InlineResponse20042Message.md)
- [InlineResponse20043](docs/Model/InlineResponse20043.md)
- [InlineResponse20044](docs/Model/InlineResponse20044.md)
- [InlineResponse20044OpenStatus](docs/Model/InlineResponse20044OpenStatus.md)
- [InlineResponse20045](docs/Model/InlineResponse20045.md)
- [InlineResponse20045Statistics](docs/Model/InlineResponse20045Statistics.md)
- [InlineResponse20046](docs/Model/InlineResponse20046.md)
- [InlineResponse20047](docs/Model/InlineResponse20047.md)
- [InlineResponse20048](docs/Model/InlineResponse20048.md)
- [InlineResponse20048Messages](docs/Model/InlineResponse20048Messages.md)
- [InlineResponse20048OgTag](docs/Model/InlineResponse20048OgTag.md)
- [InlineResponse20048OgTagOgImage](docs/Model/InlineResponse20048OgTagOgImage.md)
- [InlineResponse20048SortedMetaarray](docs/Model/InlineResponse20048SortedMetaarray.md)
- [InlineResponse20048User](docs/Model/InlineResponse20048User.md)
- [InlineResponse20048UserMetadata](docs/Model/InlineResponse20048UserMetadata.md)
- [InlineResponse20049](docs/Model/InlineResponse20049.md)
- [InlineResponse2004PushConfigurations](docs/Model/InlineResponse2004PushConfigurations.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse20050](docs/Model/InlineResponse20050.md)
- [InlineResponse20050Unread](docs/Model/InlineResponse20050Unread.md)
- [InlineResponse20051](docs/Model/InlineResponse20051.md)
- [InlineResponse20052](docs/Model/InlineResponse20052.md)
- [InlineResponse20053](docs/Model/InlineResponse20053.md)
- [InlineResponse20054](docs/Model/InlineResponse20054.md)
- [InlineResponse20055](docs/Model/InlineResponse20055.md)
- [InlineResponse20056](docs/Model/InlineResponse20056.md)
- [InlineResponse20057](docs/Model/InlineResponse20057.md)
- [InlineResponse20057EmojiCategories](docs/Model/InlineResponse20057EmojiCategories.md)
- [InlineResponse20057Emojis](docs/Model/InlineResponse20057Emojis.md)
- [InlineResponse20058](docs/Model/InlineResponse20058.md)
- [InlineResponse20058EmojiCategories](docs/Model/InlineResponse20058EmojiCategories.md)
- [InlineResponse20059](docs/Model/InlineResponse20059.md)
- [InlineResponse2005PushMessageTemplates](docs/Model/InlineResponse2005PushMessageTemplates.md)
- [InlineResponse2005Template](docs/Model/InlineResponse2005Template.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse20060](docs/Model/InlineResponse20060.md)
- [InlineResponse20061](docs/Model/InlineResponse20061.md)
- [InlineResponse20062](docs/Model/InlineResponse20062.md)
- [InlineResponse20063](docs/Model/InlineResponse20063.md)
- [InlineResponse20064](docs/Model/InlineResponse20064.md)
- [InlineResponse20064ExportedData](docs/Model/InlineResponse20064ExportedData.md)
- [InlineResponse20064File](docs/Model/InlineResponse20064File.md)
- [InlineResponse20065](docs/Model/InlineResponse20065.md)
- [InlineResponse20066](docs/Model/InlineResponse20066.md)
- [InlineResponse20066Bot](docs/Model/InlineResponse20066Bot.md)
- [InlineResponse20066Bots](docs/Model/InlineResponse20066Bots.md)
- [InlineResponse20067](docs/Model/InlineResponse20067.md)
- [InlineResponse20067Webhook](docs/Model/InlineResponse20067Webhook.md)
- [InlineResponse20068](docs/Model/InlineResponse20068.md)
- [InlineResponse20068Webhook](docs/Model/InlineResponse20068Webhook.md)
- [InlineResponse20069](docs/Model/InlineResponse20069.md)
- [InlineResponse20069Requests](docs/Model/InlineResponse20069Requests.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse20070](docs/Model/InlineResponse20070.md)
- [InlineResponse20071](docs/Model/InlineResponse20071.md)
- [InlineResponse20071ReportLogs](docs/Model/InlineResponse20071ReportLogs.md)
- [InlineResponse20072](docs/Model/InlineResponse20072.md)
- [InlineResponse20072ReportLogs](docs/Model/InlineResponse20072ReportLogs.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse200Region](docs/Model/InlineResponse200Region.md)
- [InlineResponse200Results](docs/Model/InlineResponse200Results.md)
- [JoinChannelsData](docs/Model/JoinChannelsData.md)
- [LeaveMyGroupChannelsData](docs/Model/LeaveMyGroupChannelsData.md)
- [MarkAllMessagesAsReadData](docs/Model/MarkAllMessagesAsReadData.md)
- [ModelFunction](docs/Model/ModelFunction.md)
- [MuteInChannelsWithCustomChannelTypesData](docs/Model/MuteInChannelsWithCustomChannelTypesData.md)
- [Object](docs/Model/Object.md)
- [OcBanUserData](docs/Model/OcBanUserData.md)
- [OcCreateChannelData](docs/Model/OcCreateChannelData.md)
- [OcFreezeChannelData](docs/Model/OcFreezeChannelData.md)
- [OcMuteUserData](docs/Model/OcMuteUserData.md)
- [OcRegisterOperatorsData](docs/Model/OcRegisterOperatorsData.md)
- [OcUpdateBanByIdData](docs/Model/OcUpdateBanByIdData.md)
- [OcUpdateChannelByUrlData](docs/Model/OcUpdateChannelByUrlData.md)
- [RegisterAndScheduleDataExportData](docs/Model/RegisterAndScheduleDataExportData.md)
- [RegisterAsOperatorToChannelsWithCustomChannelTypesData](docs/Model/RegisterAsOperatorToChannelsWithCustomChannelTypesData.md)
- [RegisterGdprRequestData](docs/Model/RegisterGdprRequestData.md)
- [ReportChannelByUrlData](docs/Model/ReportChannelByUrlData.md)
- [ReportMessageByIdData](docs/Model/ReportMessageByIdData.md)
- [ReportUserByIdData](docs/Model/ReportUserByIdData.md)
- [ScheduleAnnouncementData](docs/Model/ScheduleAnnouncementData.md)
- [SendBirdAdminMessage](docs/Model/SendBirdAdminMessage.md)
- [SendBirdAppInfo](docs/Model/SendBirdAppInfo.md)
- [SendBirdAppleCriticalAlertOptions](docs/Model/SendBirdAppleCriticalAlertOptions.md)
- [SendBirdApplicationUserListQuery](docs/Model/SendBirdApplicationUserListQuery.md)
- [SendBirdBannedUserListQuery](docs/Model/SendBirdBannedUserListQuery.md)
- [SendBirdBaseChannel](docs/Model/SendBirdBaseChannel.md)
- [SendBirdBaseMessageInstance](docs/Model/SendBirdBaseMessageInstance.md)
- [SendBirdBaseMessageParams](docs/Model/SendBirdBaseMessageParams.md)
- [SendBirdBlockedUserListQuery](docs/Model/SendBirdBlockedUserListQuery.md)
- [SendBirdCollectionEventSource](docs/Model/SendBirdCollectionEventSource.md)
- [SendBirdDiscoveryObject](docs/Model/SendBirdDiscoveryObject.md)
- [SendBirdDistinctGroupChannelResponse](docs/Model/SendBirdDistinctGroupChannelResponse.md)
- [SendBirdEmoji](docs/Model/SendBirdEmoji.md)
- [SendBirdEmojiCategory](docs/Model/SendBirdEmojiCategory.md)
- [SendBirdEmojiContainer](docs/Model/SendBirdEmojiContainer.md)
- [SendBirdFileMessage](docs/Model/SendBirdFileMessage.md)
- [SendBirdFileMessageParams](docs/Model/SendBirdFileMessageParams.md)
- [SendBirdFileMessagesCallbackObject](docs/Model/SendBirdFileMessagesCallbackObject.md)
- [SendBirdFriendListQuery](docs/Model/SendBirdFriendListQuery.md)
- [SendBirdGetFriendChangeLogs](docs/Model/SendBirdGetFriendChangeLogs.md)
- [SendBirdGroupChannel](docs/Model/SendBirdGroupChannel.md)
- [SendBirdGroupChannelChangeLogs](docs/Model/SendBirdGroupChannelChangeLogs.md)
- [SendBirdGroupChannelChangeLogsParams](docs/Model/SendBirdGroupChannelChangeLogsParams.md)
- [SendBirdGroupChannelCollection](docs/Model/SendBirdGroupChannelCollection.md)
- [SendBirdGroupChannelCollectionHandler](docs/Model/SendBirdGroupChannelCollectionHandler.md)
- [SendBirdGroupChannelCollectionStatic](docs/Model/SendBirdGroupChannelCollectionStatic.md)
- [SendBirdGroupChannelCollectionStaticGroupChannelOrder](docs/Model/SendBirdGroupChannelCollectionStaticGroupChannelOrder.md)
- [SendBirdGroupChannelContext](docs/Model/SendBirdGroupChannelContext.md)
- [SendBirdGroupChannelContextSource](docs/Model/SendBirdGroupChannelContextSource.md)
- [SendBirdGroupChannelFilter](docs/Model/SendBirdGroupChannelFilter.md)
- [SendBirdGroupChannelFilterSearchFilter](docs/Model/SendBirdGroupChannelFilterSearchFilter.md)
- [SendBirdGroupChannelFilterStatic](docs/Model/SendBirdGroupChannelFilterStatic.md)
- [SendBirdGroupChannelFilterStaticHiddenChannelFilter](docs/Model/SendBirdGroupChannelFilterStaticHiddenChannelFilter.md)
- [SendBirdGroupChannelFilterStaticMemberStateFilter](docs/Model/SendBirdGroupChannelFilterStaticMemberStateFilter.md)
- [SendBirdGroupChannelFilterStaticPublicChannelFilter](docs/Model/SendBirdGroupChannelFilterStaticPublicChannelFilter.md)
- [SendBirdGroupChannelFilterStaticQueryType](docs/Model/SendBirdGroupChannelFilterStaticQueryType.md)
- [SendBirdGroupChannelFilterStaticSearchField](docs/Model/SendBirdGroupChannelFilterStaticSearchField.md)
- [SendBirdGroupChannelFilterStaticSuperChannelFilter](docs/Model/SendBirdGroupChannelFilterStaticSuperChannelFilter.md)
- [SendBirdGroupChannelFilterStaticUnreadChannelFilter](docs/Model/SendBirdGroupChannelFilterStaticUnreadChannelFilter.md)
- [SendBirdGroupChannelFilterUserIdsFilter](docs/Model/SendBirdGroupChannelFilterUserIdsFilter.md)
- [SendBirdGroupChannelListQuery](docs/Model/SendBirdGroupChannelListQuery.md)
- [SendBirdGroupChannelMemberListQuery](docs/Model/SendBirdGroupChannelMemberListQuery.md)
- [SendBirdGroupChannelOrder](docs/Model/SendBirdGroupChannelOrder.md)
- [SendBirdGroupChannelParams](docs/Model/SendBirdGroupChannelParams.md)
- [SendBirdGroupChannelTotalUnreadMessageCountParams](docs/Model/SendBirdGroupChannelTotalUnreadMessageCountParams.md)
- [SendBirdHiddenChannelFilter](docs/Model/SendBirdHiddenChannelFilter.md)
- [SendBirdLogLevel](docs/Model/SendBirdLogLevel.md)
- [SendBirdMember](docs/Model/SendBirdMember.md)
- [SendBirdMemberStateFilter](docs/Model/SendBirdMemberStateFilter.md)
- [SendBirdMessageChangeLogs](docs/Model/SendBirdMessageChangeLogs.md)
- [SendBirdMessageChangeLogsParams](docs/Model/SendBirdMessageChangeLogsParams.md)
- [SendBirdMessageCollection](docs/Model/SendBirdMessageCollection.md)
- [SendBirdMessageCollectionHandler](docs/Model/SendBirdMessageCollectionHandler.md)
- [SendBirdMessageCollectionInitPolicy](docs/Model/SendBirdMessageCollectionInitPolicy.md)
- [SendBirdMessageCollectionStatic](docs/Model/SendBirdMessageCollectionStatic.md)
- [SendBirdMessageCollectionStaticMessageCollectionInitPolicy](docs/Model/SendBirdMessageCollectionStaticMessageCollectionInitPolicy.md)
- [SendBirdMessageContext](docs/Model/SendBirdMessageContext.md)
- [SendBirdMessageFilter](docs/Model/SendBirdMessageFilter.md)
- [SendBirdMessageListParams](docs/Model/SendBirdMessageListParams.md)
- [SendBirdMessageMetaArray](docs/Model/SendBirdMessageMetaArray.md)
- [SendBirdMessageRetrievalParams](docs/Model/SendBirdMessageRetrievalParams.md)
- [SendBirdMessageSearchQuery](docs/Model/SendBirdMessageSearchQuery.md)
- [SendBirdMessageSearchQueryOptions](docs/Model/SendBirdMessageSearchQueryOptions.md)
- [SendBirdMessageSendingStatus](docs/Model/SendBirdMessageSendingStatus.md)
- [SendBirdMessageTypeFilter](docs/Model/SendBirdMessageTypeFilter.md)
- [SendBirdMutedInfo](docs/Model/SendBirdMutedInfo.md)
- [SendBirdMutedUserListQuery](docs/Model/SendBirdMutedUserListQuery.md)
- [SendBirdOGImage](docs/Model/SendBirdOGImage.md)
- [SendBirdOGMetaData](docs/Model/SendBirdOGMetaData.md)
- [SendBirdOpenChannel](docs/Model/SendBirdOpenChannel.md)
- [SendBirdOpenChannelListQuery](docs/Model/SendBirdOpenChannelListQuery.md)
- [SendBirdOpenChannelParams](docs/Model/SendBirdOpenChannelParams.md)
- [SendBirdOperatorListQuery](docs/Model/SendBirdOperatorListQuery.md)
- [SendBirdOptions](docs/Model/SendBirdOptions.md)
- [SendBirdParticipantListQuery](docs/Model/SendBirdParticipantListQuery.md)
- [SendBirdPlugin](docs/Model/SendBirdPlugin.md)
- [SendBirdPoll](docs/Model/SendBirdPoll.md)
- [SendBirdPollDetails](docs/Model/SendBirdPollDetails.md)
- [SendBirdPollListQuery](docs/Model/SendBirdPollListQuery.md)
- [SendBirdPollOption](docs/Model/SendBirdPollOption.md)
- [SendBirdPollParams](docs/Model/SendBirdPollParams.md)
- [SendBirdPollRetrievalParams](docs/Model/SendBirdPollRetrievalParams.md)
- [SendBirdPollStatic](docs/Model/SendBirdPollStatic.md)
- [SendBirdPollStaticStatus](docs/Model/SendBirdPollStaticStatus.md)
- [SendBirdPollStatus](docs/Model/SendBirdPollStatus.md)
- [SendBirdPollUpdateEvent](docs/Model/SendBirdPollUpdateEvent.md)
- [SendBirdPollUpdatedVoteCount](docs/Model/SendBirdPollUpdatedVoteCount.md)
- [SendBirdPollVoteEvent](docs/Model/SendBirdPollVoteEvent.md)
- [SendBirdPollVoterListQuery](docs/Model/SendBirdPollVoterListQuery.md)
- [SendBirdPreviousMessageListQuery](docs/Model/SendBirdPreviousMessageListQuery.md)
- [SendBirdPublicChannelFilter](docs/Model/SendBirdPublicChannelFilter.md)
- [SendBirdPublicGroupChannelListQuery](docs/Model/SendBirdPublicGroupChannelListQuery.md)
- [SendBirdPushTokens](docs/Model/SendBirdPushTokens.md)
- [SendBirdQueryType](docs/Model/SendBirdQueryType.md)
- [SendBirdReaction](docs/Model/SendBirdReaction.md)
- [SendBirdReactionEvent](docs/Model/SendBirdReactionEvent.md)
- [SendBirdReplyType](docs/Model/SendBirdReplyType.md)
- [SendBirdRestrictedUser](docs/Model/SendBirdRestrictedUser.md)
- [SendBirdRestrictedUserStatic](docs/Model/SendBirdRestrictedUserStatic.md)
- [SendBirdRestrictedUserStaticRestrictionType](docs/Model/SendBirdRestrictedUserStaticRestrictionType.md)
- [SendBirdRestrictionInfo](docs/Model/SendBirdRestrictionInfo.md)
- [SendBirdRestrictionType](docs/Model/SendBirdRestrictionType.md)
- [SendBirdScheduledUserMessage](docs/Model/SendBirdScheduledUserMessage.md)
- [SendBirdScheduledUserMessageParams](docs/Model/SendBirdScheduledUserMessageParams.md)
- [SendBirdSearchField](docs/Model/SendBirdSearchField.md)
- [SendBirdSearchFilterParams](docs/Model/SendBirdSearchFilterParams.md)
- [SendBirdSendBirdError](docs/Model/SendBirdSendBirdError.md)
- [SendBirdSendBirdInstance](docs/Model/SendBirdSendBirdInstance.md)
- [SendBirdSendBirdInstanceBaseChannel](docs/Model/SendBirdSendBirdInstanceBaseChannel.md)
- [SendBirdSendBirdInstanceBaseChannelMessageTypeFilter](docs/Model/SendBirdSendBirdInstanceBaseChannelMessageTypeFilter.md)
- [SendBirdSendBirdInstanceBaseMessage](docs/Model/SendBirdSendBirdInstanceBaseMessage.md)
- [SendBirdSendBirdInstanceBaseMessageReplyType](docs/Model/SendBirdSendBirdInstanceBaseMessageReplyType.md)
- [SendBirdSender](docs/Model/SendBirdSender.md)
- [SendBirdStatic](docs/Model/SendBirdStatic.md)
- [SendBirdStaticLogLevel](docs/Model/SendBirdStaticLogLevel.md)
- [SendBirdSuperChannelFilter](docs/Model/SendBirdSuperChannelFilter.md)
- [SendBirdThreadInfo](docs/Model/SendBirdThreadInfo.md)
- [SendBirdThreadInfoUpdateEvent](docs/Model/SendBirdThreadInfoUpdateEvent.md)
- [SendBirdThreadedMessageListInfo](docs/Model/SendBirdThreadedMessageListInfo.md)
- [SendBirdThreadedMessageListParams](docs/Model/SendBirdThreadedMessageListParams.md)
- [SendBirdThumbnailObject](docs/Model/SendBirdThumbnailObject.md)
- [SendBirdThumbnailSize](docs/Model/SendBirdThumbnailSize.md)
- [SendBirdUnreadChannelFilter](docs/Model/SendBirdUnreadChannelFilter.md)
- [SendBirdUser](docs/Model/SendBirdUser.md)
- [SendBirdUserIdsFilterParams](docs/Model/SendBirdUserIdsFilterParams.md)
- [SendBirdUserListQuery](docs/Model/SendBirdUserListQuery.md)
- [SendBirdUserMessage](docs/Model/SendBirdUserMessage.md)
- [SendBirdUserMessageParams](docs/Model/SendBirdUserMessageParams.md)
- [SendBotSMessageData](docs/Model/SendBotSMessageData.md)
- [SendMessageData](docs/Model/SendMessageData.md)
- [UpdateAnnouncementByIdData](docs/Model/UpdateAnnouncementByIdData.md)
- [UpdateApnsPushConfigurationByIdData](docs/Model/UpdateApnsPushConfigurationByIdData.md)
- [UpdateBotByIdData](docs/Model/UpdateBotByIdData.md)
- [UpdateChannelInvitationPreferenceData](docs/Model/UpdateChannelInvitationPreferenceData.md)
- [UpdateChannelMetacounterData](docs/Model/UpdateChannelMetacounterData.md)
- [UpdateChannelMetadataData](docs/Model/UpdateChannelMetadataData.md)
- [UpdateCountPreferenceOfChannelByUrlData](docs/Model/UpdateCountPreferenceOfChannelByUrlData.md)
- [UpdateDefaultChannelInvitationPreferenceData](docs/Model/UpdateDefaultChannelInvitationPreferenceData.md)
- [UpdateEmojiCategoryUrlByIdData](docs/Model/UpdateEmojiCategoryUrlByIdData.md)
- [UpdateEmojiUrlByKeyData](docs/Model/UpdateEmojiUrlByKeyData.md)
- [UpdateExtraDataInMessageData](docs/Model/UpdateExtraDataInMessageData.md)
- [UpdateFcmPushConfigurationByIdData](docs/Model/UpdateFcmPushConfigurationByIdData.md)
- [UpdateHmsPushConfigurationByIdData](docs/Model/UpdateHmsPushConfigurationByIdData.md)
- [UpdateMessageByIdData](docs/Model/UpdateMessageByIdData.md)
- [UpdatePushNotificationContentTemplateData](docs/Model/UpdatePushNotificationContentTemplateData.md)
- [UpdatePushPreferencesData](docs/Model/UpdatePushPreferencesData.md)
- [UpdatePushPreferencesForChannelByUrlData](docs/Model/UpdatePushPreferencesForChannelByUrlData.md)
- [UpdateUserByIdData](docs/Model/UpdateUserByIdData.md)
- [UpdateUserMetadataData](docs/Model/UpdateUserMetadataData.md)
- [UseDefaultEmojisData](docs/Model/UseDefaultEmojisData.md)

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
