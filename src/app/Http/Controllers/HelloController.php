<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $date = Carbon::now('Asia/Tokyo');
        $param = [
            'date' => $date,
            'content' => 'Carbonでの日時表示',
            'text' => $request->text
        ];
        return view('hello', $param);
    }
}
