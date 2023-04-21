<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

// 上部に追加
use App\Mail\ContactsSendmail;

class Controller {
    function send(Request $request) {
        // バリデーション
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        // actionの値を取得
        $action = $request->input('action');

        // action以外のinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){

            // 戻るボタンの場合リダイレクト処理
            return redirect()
            ->route('contact.index')
            ->withInput($inputs);
            
        } else {
            // 送信ボタンの場合、送信処理
            // ユーザにメールを送信
            \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
            // 自分にメールを送信
            \Mail::to('tanigch56@gmail.com')->send(new ContactsSendmail($inputs));

            // 二重送信対策のためトークンを再発行
            $request->session()->regenerateToken();

            // 送信完了ページのviewを表示
            return view('contact.welcome');

        }
    }
}
