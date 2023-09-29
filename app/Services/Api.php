<?php

namespace App\Services;

use GuzzleHttp\Client;

class Api
{
    /** @var Client */
    private static $http;

    public static function http(): Client
    {
        if (!self::$http)
            self::$http = self::guzzleClient();
        return self::$http;
    }

    private static function guzzleClient(): Client
    {
        return new Client([
            'base_uri' => config('amo.api_url'),
            'headers'  => [
                'Accept'        => 'application/json',
                'Content-Type'        => 'application/json',
                'Authorization' => 'Bearer ' . \Cache::remember('access_token', 86000, function () {
                    return self::refreshedToken();
                })
            ],
        ]);
    }

    private static function refreshedToken()
    {
        $result = json_decode(
            (new Client(['headers' => [
                'Accept'        => 'application/json',
                'Content-Type'        => 'application/json',
            ]]))->request('post', config('amo.api_url') . '/oauth2/access_token', [
                'form_params' => [
                    'client_id' => config('amo.client_id'),
                    'client_secret' => config('amo.secret_key'),
                    'grant_type' => 'refresh_token',
                    'redirect_uri' => config('amo.redirect_uri'),
                    'refresh_token' => \Cache::get('refresh_token')
                ]
            ])->getBody()->getContents(),
            true
        );
        \Cache::set('refresh_token', $result['refresh_token']);
        return $result['access_token'];
    }
}
