<?php defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Google Calendar - Internal Configuration
|--------------------------------------------------------------------------
|
| Declare some of the global config values of the Google Calendar
| synchronization feature.
|
| These values serve as fallback when database settings are not available.
| The primary configuration should be done through the admin UI at
| Settings > Integrations > Google Calendar.
|
*/

$config['google_sync_feature'] = defined('Config::GOOGLE_SYNC_FEATURE') ? Config::GOOGLE_SYNC_FEATURE : false;

$config['google_client_id'] = defined('Config::GOOGLE_CLIENT_ID') ? Config::GOOGLE_CLIENT_ID : '';

$config['google_client_secret'] = defined('Config::GOOGLE_CLIENT_SECRET') ? Config::GOOGLE_CLIENT_SECRET : '';

// cassien fork: one central OAuth callback for every instance (the Booking Gateway bounces the browser back to the
// instance that started the flow). The tenant slug prefixes the OAuth state so the gateway knows where to bounce.
$config['google_redirect_uri'] = defined('Config::GOOGLE_REDIRECT_URI') ? Config::GOOGLE_REDIRECT_URI : '';
$config['tenant_slug'] = defined('Config::TENANT_SLUG') ? Config::TENANT_SLUG : '';
