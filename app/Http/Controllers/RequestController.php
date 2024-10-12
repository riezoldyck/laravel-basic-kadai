<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create() {
        return view('requests.create');
    }

    public function confirm(Request $request) {
        // HTTPリクエストに含まれる、単一のパラメータの値を取得する
        $title = $request->input('title');
        $content = $content->input('content');

        $variables = [
            'title',
            'content'
        ];

        return view('requests.confirm', compact($variables));
    }
}
