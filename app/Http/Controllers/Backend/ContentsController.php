<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

class ContentsController extends Controller
{
    use Helpers;

    public function index()
    {
        $contents = $this->api->get('contents');
        return view('backend.contents.index')->with('contents', $contents);
    }

    public function show($id)
    {
        $content = $this->api->get("content/$id");
        return view('backend.contents.show', [
            'content' => $content,
            'id' => $id,
        ]);
    }
}
