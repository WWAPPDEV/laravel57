<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller


public function postRequest()
{
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'http://localhost:8001/api/store', [
        'form_params' => [
            'name' => 'krunal',
        ]
    ]);
    $response = $response->getBody()->getContents();
    echo '<pre>';
    print_r($response);
}
