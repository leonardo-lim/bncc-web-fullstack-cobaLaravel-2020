<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homeView()
    {
        return view('homepage');
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