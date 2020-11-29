<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function index()
    {
        Redis::set('nameq','12344111');
        dd(config('app'));
    }
}
