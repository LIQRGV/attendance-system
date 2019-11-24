<?php

namespace App\Http\Controllers;

use LIQRGV\QueryFilter\RequestParser;

class AttendanceController extends Controller
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

    public function index(RequestParser $parser) {
        dd($parser->getBuilder()->toSql());
    }
}
