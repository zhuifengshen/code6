<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function view()
    {
        $data = ['title' => '有米巡检系统'];
        return view('index.index', $data);
    }
}
