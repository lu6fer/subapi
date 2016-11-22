<?php namespace App\Facades;
use Illuminate\Contracts\Routing\ResponseFactory;

class Response extends \Illuminate\Support\Facades\Response
{
    public static function api($data)
    {
        $response = [
            'success' => true,
            'data' => $data
        ];
        return ResponseFactory::json($response);
    }
}