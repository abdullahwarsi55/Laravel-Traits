<?php

namespace App\Http\traits;
use Illuminate\Support\Facades\Http;

trait Apidatatrait{
public function apidata(){
    $api_url="https://jsonplaceholder.typicode.com/posts";
    $response=Http::get($api_url);
    $data=json_decode($response->body());;
    dd($data);
}

}

?>