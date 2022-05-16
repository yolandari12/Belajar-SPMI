<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function data () {
        return view('pages.admin.unit-kerja.data');

    }
}
