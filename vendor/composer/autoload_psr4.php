<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'LINE\\Webhook\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/webhook/lib'),
    'LINE\\Parser\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/parser/lib'),
    'LINE\\Laravel\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/laravel/lib'),
    'LINE\\Constants\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/constants'),
    'LINE\\Clients\\MessagingApi\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/clients/messaging-api/lib'),
    'LINE\\Clients\\ManageAudience\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/clients/manage-audience/lib'),
    'LINE\\Clients\\Liff\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/clients/liff/lib'),
    'LINE\\Clients\\Insight\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/clients/insight/lib'),
    'LINE\\Clients\\ChannelAccessToken\\' => array($vendorDir . '/linecorp/line-bot-sdk/src/clients/channel-access-token/lib'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
);
