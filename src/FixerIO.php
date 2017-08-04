<?php

namespace FixerIO;

use GuzzleHttp\Client;

class FixerIO
{

    /**
     * Guzzle client
     * @var GuzzleClient\Http
     * */
    private $client;
    private $url = "api.fixer.io";
    private $date;
    private $protocol = 'http';


    public function __construct()
    {
        $this->client = new Client();
    }

    public function https()
    {
        $this->protocol = 'https';
    }


}