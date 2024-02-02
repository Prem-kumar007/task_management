<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function list_table()
    {
        return view('list_table');
    }
}
