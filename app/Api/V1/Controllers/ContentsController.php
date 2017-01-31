<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentsController extends Controller
{
    public function index()
    {
        return Content::paginate(20);
    }

    public function show($id)
    {
        return Content::find($id);
    }
}