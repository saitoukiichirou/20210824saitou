<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($room = null)
    {
        $item = [
            'txt' => '建物',
            'room' => $room
        ];
        return view('index',$item);
    }
}
