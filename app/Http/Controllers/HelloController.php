<?php

namespace App\Http\Controllers;
//名前空間を指定している

use Illuminate\Http\Request;
//use文。Illuminate\Httpパッケージ内に用意してある「Request」を使える状態にしている。

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknomn') {

        return <<<EOF

<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size:16pt; color:#999; }
        h1 { font-size:100pt; text-align:right; color:#eee; margi:-40px 0px -50px 0px; }
    </style>
</head>
<body>
        <h1>Index</h1>
        <p>これは、Helloコントローラのindexアクションです。</p>
        <ul>
            <li>ID: {$id}</li>
            <li>PASS: {$pass}</li>
        </ul>
</body>
</html>
EOF;

    }
}
