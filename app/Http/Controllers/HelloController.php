<?php

namespace App\Http\Controllers;
//名前空間を指定している

use Illuminate\Http\Request;
//use文。Illuminate\Httpパッケージ内に用意してある「Request」を使える状態にしている。

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
    <style>
        body {font-size:16pt; color:#999; }
        h1 { font-size:100pt; text-align:right; color:#eee; margi:-40px 0px -50px 0px; }
    </style>
    EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index() {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Index') . $style . 
            $body
            . tag('h1','Index') . tag('p', 'this is Index page')
            . '<a href="hello/other">go to Other page</a>'
            . $end;
        return $html;
    }

    public function other() {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Other') . $style . 
            $body
            . tag('h1', 'Other') . tag('p', 'this is Other page')
            . $end;
        return $html;
    }
}
