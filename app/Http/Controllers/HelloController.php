<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index(Request $request, Response $respose) {
      return <<<EOF
      <html>
        <head>
          <title>Single</title>
        </head>
        <body>
          <h3>Request</h3>
          <pre>{$request}</pre>
          <h3>Response</h3>
          <pre>{$respose}</pre>
        </body>
      </html>
      EOF;

      $respose->setContent($html);
      return $respose;
    }

}
