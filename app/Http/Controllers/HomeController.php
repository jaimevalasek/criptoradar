<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function panel()
    {
        $endpoint = "https://api.thegraph.com/subgraphs/name/uniswap/uniswap-v2";

        $client = new \GuzzleHttp\Client();

        $response = $client->post($endpoint, [
            \GuzzleHttp\RequestOptions::JSON => ['pairs' => ['id' => "0x00004ee988665cdda9a1080d5792cecd16dc1220"]]
        ]);

        dd($response);

        return view('home');
    }
}
