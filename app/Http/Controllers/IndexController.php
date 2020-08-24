<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $news = [
        1 => 'News 1',
        'News 2',
        'News 3',
        'News 4',
    ];

    public function index()
    {
        return $this->news;
    }

    public function show($id)
    {
        if (array_key_exists($id, $this->news)) {
            return $this->news[$id];
        }
        abort(404);
    }
}
