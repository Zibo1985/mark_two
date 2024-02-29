<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAiController extends Controller
{

    public function __construct()
    {
        $client = OpenAI::client('YOUR_API_KEY');

        $result = $client->completions()->create([
            'model' => 'davinci',
            'prompt' => 'PHP is',
        ]);
    }

}
