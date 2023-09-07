<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\JsonResponse;
use GuzzleHttp\Client;
class ChatController extends BaseController
{
    //
    public function getChat():JsonResponse{

    }

    public function postChat(Request $request):JsonResponse{

        try {
            
            //code...
            $data = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer '.env('CHAT_GPT_API_KEY'),
              ])
              ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                       "role" => "user",
                       "content" => $request->input('message')
                   ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 200,
                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
              ])
              ->json();
            $response = $data['choices'][0]['message'];  
            return $this->sendResponse($response,'Added chat successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return $this->sendError($th->getMessage(),[],'400');
        }
        
    }
}
