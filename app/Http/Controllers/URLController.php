<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class URLController extends BaseController
{
    public function index(Client $client, Request $request) {
        $res = $client->request('GET', $request->item);
        return $res->getBody();
    }
}
