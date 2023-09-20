<?php

namespace Yuniorhernandez\Alertsli;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Alertsli
{
    protected $api_token;
    protected $api_url;

    /**
     * Create a new Alertsli Instance
     */
    public function __construct()
    {
        $this->api_token = config('alertsli.api_token');
        $this->api_url = config('alertsli.api_url');
    }

    /*
    |--------------------------------------------------------------------------
    | Get all links
    |--------------------------------------------------------------------------
    | @return array
    */
    public function allLinks($options = [])
    {
        $url = $this->api_url . 'links';   
        $all_links = Http::withToken($this->api_token)->get($url, $options);
        return json_decode($all_links);
    }

    /*
    |--------------------------------------------------------------------------
    | Get a link
    |--------------------------------------------------------------------------
    | @return array
    */
    public function getLink($code)
    {
        $url = $this->api_url . 'links/' . $code;
        $link = Http::withToken($this->api_token)->get($url);
        return json_decode($link);
    }

    /*
    |--------------------------------------------------------------------------
    | Create a link
    |--------------------------------------------------------------------------
    | @return array
    */
    public function createLink($data)
    {
        $url = $this->api_url . 'links';
        $link = Http::withToken($this->api_token)->post($url, $data);
        return json_decode($link);
    }

    /*
    |--------------------------------------------------------------------------
    | Update a link
    |--------------------------------------------------------------------------
    | @return array
    */
    public function updateLink($code, $data)
    {
        $url = $this->api_url . 'links/' . $code;
        $link = Http::withToken($this->api_token)->put($url, $data);
        return json_decode($link);
    }

    /*
    |--------------------------------------------------------------------------
    | Delete a link
    |--------------------------------------------------------------------------
    | @return array
    */
    public function deleteLink($code)
    {
        $url = $this->api_url . 'links/' . $code;
        $link = Http::withToken($this->api_token)->delete($url);
        return json_decode($link);
    }

    /*
    |--------------------------------------------------------------------------
    | Get all clicks
    |--------------------------------------------------------------------------
    | @return array
    */

    public function allClicks($code, $options = [])
    {
        $url = $this->api_url . 'links/' . $code . '/visits';
        //dd($url);
        $all_clicks = Http::withToken($this->api_token)->get($url, $options);
        return json_decode($all_clicks);
    }

    /*
    |--------------------------------------------------------------------------
    |logout
    |--------------------------------------------------------------------------
    | @return array
    */
    public function logout()
    {
        $url = $this->api_url . 'logout';
        $logout = Http::withToken($this->api_token)->post($url);
        return json_decode($logout);
    }
}
