<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use LIQRGV\QueryFilter\RequestParser;

class DebugController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request, RequestParser $parser) {
        dd($request->route(), $parser->getBuilder()->toSql());
    }
}
