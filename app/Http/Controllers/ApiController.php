<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\traits\Apidatatrait;

class ApiController extends Controller
{
    use Apidatatrait;
    public function index(){
        $response=$this->apidata();
        return $response;
    }
}
