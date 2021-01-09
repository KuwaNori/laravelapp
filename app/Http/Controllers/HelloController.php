<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id="noname", $pass="unknown") {
      return <<<EOF
      <html>
        <head>
          <title>Hello</title>
        </head>
        <body>
          <h1>Index</h1>
          <p>This is first controller</p>
          <ul>
            <li>ID: {$id}</li>
            <li>PASS: {$pass}</li>
          </ul>
        </body>
      </html>
      EOF;
    }
}
