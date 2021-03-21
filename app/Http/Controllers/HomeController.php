<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView()
    {
        return view('home');
    }

    public function tableView()
    {
        $title = 'Table';
        $content = 'table';
        return view('adminLTE.master', compact('title', 'content'));
    }

    public function tableDataView()
    {
        $title = 'Data Tables';
        $content = 'data-tables';
        return view('adminLTE.master', compact('title', 'content'));
    }
}