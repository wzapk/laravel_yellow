<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\District;

class DistrictController extends Controller
{
    public function index()
    {
        $data = District::paginate(30);
        return view('backend.district.index', [
            'districts' => $data,
        ]);
    }
}
