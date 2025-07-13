<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($text = '')
    {
        // Laravelでは、日付の操作には Carbon クラスの使用が推奨されている
        $date = Carbon::now('Asia/Tokyo');
        $param = [
            'date' => $date,
            'content' => 'Carbonでの日時表示',
            'text' => $text
        ];
        return view('index', $param);
    }
}
