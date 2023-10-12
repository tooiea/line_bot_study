<?php

namespace App\Http\Controllers\Line;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use LINE\Clients\MessagingApi\Api\MessagingApiApi;
use LINE\Clients\MessagingApi\Model\ReplyMessageRequest;
use LINE\Clients\MessagingApi\Model\TextMessage;

class WebhookController extends Controller
{
    /**
     * LINEからメッセージが送信されたときに返信
     *
     * @param  Request $request
     * @return void
     */
    public function replyMessage(Request $request)
    {
        $event = $request->input('events')[0];
        Log::info($event);
        $client = new \GuzzleHttp\Client();
        $config = new \LINE\Clients\MessagingApi\Configuration();
        $config->setAccessToken(config('line-bot.channel_access_token'));
        $messagingApi = new MessagingApiApi(
            client: $client,
            config: $config,
        );
        // 送信メッセージ
        $message = (new TextMessage())
            ->setType(\LINE\Constants\MessageType::TEXT)
            ->setText('hello!');

        // 返信用インスタンスにセット
        $request = (new ReplyMessageRequest)
            ->setReplyToken($event['replyToken'])
            ->setMessages([$message]);
        try {
            $messagingApi->replyMessage($request);
            // Success
        } catch (MessagingApiApi $e) {
            // Failed
            echo $e->getCode() . ' ' . $e->getResponseBody();
        }
        // $response = $messagingApi->replyMessage($request);
        
        return;
    }
}
