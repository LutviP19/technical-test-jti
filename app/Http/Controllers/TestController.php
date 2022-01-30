<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hit(Request $request)
    {
        event(new \App\Events\SendMessage($request->message));
        return 1;
    }

    public function form()
    {
        return view('form');
    }

    public function enkripsi(Request $request)
    {
        $plain_txt = "0812-8888-7777";
        echo "Plain Text =" . $plain_txt . "\n<br>";

        $encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
        echo "Encrypted Text = " . $encrypted_txt . "\n<br>";

        $decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);
        echo "Decrypted Text =" . $decrypted_txt . "\n<br>";
    }
}