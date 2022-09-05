![Sendbird banner image](http://ww1.prweb.com/prfiles/2021/09/14/18371217/Sendbird_Logo_RGB_lg.png)

# [Sendbird PHP Platform SDK](https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api)

[![link to docs](https://img.shields.io/badge/SDK-docs-green)](/docs)
This is a SDK written for PHP  that makes talking to the [Sendbird Platform API](https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api) easier.
With this library you can extend your Sendbird integration to include advanced features like message-, and channel automation, user management, create user authentication tokens, and create bots.

# 🔥 Quick start

```php  
<?php
require_once('/PATH_TO/sendbird-platform-sdk-php/vendor/autoload.php');
$config = \Sendbird\Configuration::getDefaultConfiguration();

$api_token = 'MASTER_API_TOKEN_FROM_DASHBOARD';
$config->setHost("API_REQUEST_URL_FROM_DASHBOARD");

$apiInstance = new Sendbird\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUsers($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling listUsers: ', $e->getMessage(), PHP_EOL;
}
```

# ⚠️ Warnings

This package is not currently published. Please see  the Local development section for installation instructions.

# ⚒️ Prerequisite

In order to make requests with this SDK you will need you master API token. This can be found through the [Sendbird dashboard](https://dashboard.sendbird.com/).  Each app you create in Sendbird has its own master api token. These tokens can be found in Settings > Application > General.
![how to find you api token](https://i.imgur.com/0YMKtpX.png)

# 💻 Requirements

You will need [PHP](https://www.php.net/) installed. This has been developed and tested with PHP 7.3 and later.

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

1. Clone this repository, run `composer install` in the `sendbird-platform-sdk` directory
2. Include `autoload.php` in your project

```php
<?php
require_once('/path/to/sendbird-platform-sdk/vendor/autoload.php');
```

##### Helpful links

|       | Documentation |
| ----------- | ----------- |
| Announcement   | [docs/Api/AnnouncementApi.md](docs/Api/AnnouncementApi.md)|
| Application | [docs/Api/ApplicationApi.md](docs/Api/ApplicationApi.md)  |
| Bot | [docs/Api/BotApi.md](docs/Api/BotApi.md)  |
| GroupChannel | [docs/Api/GroupChannelApi.md](docs/Api/GroupChannelApi.md)  |
| OpenChannel | [docs/Api/OpenChannelApi.md ](docs/Api/OpenChannelApi.md)  |
| Message | [docs/Api/MessageApi.md](docs/Api/MessageApi.md)  |
| User | [docs/Api/UserApi.md](docs/Api/UserApi.md)  |
| Webhooks | [docs/Api/WebhooksApi.md](docs/Api/WebhooksApi.md)  |
