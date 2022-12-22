<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BlogController extends Controller
{
    protected $base_uri;
    // protected $username = 'webmaster';
    // protected $password = 'Luceand21';
    public function __construct()
    {
        $this->base_uri  = env('API_ENDPOINT_V1');
    }
    public function index(){
        $client = new Client([
            'base_uri' => $this->base_uri,
        ]);
        $response = $client->request('GET','noticias/9', ['verify' => false]);
        $posts = json_decode($response->getBody()->getContents());
        return $posts;
    }
}
