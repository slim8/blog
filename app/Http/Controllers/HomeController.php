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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title='Welcome to Blog';
        $title2='Welcome to Blog';
        return view('home',compact('title','title2'));
    }
    public function about()
    {
        $title='About Us';
        return view('about')->with('title',$title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'title2' => 'services 1',
            'title3' => 'services 2',
            'services'=> ['Graphique','web','SEO']
        );
        return view('services')->with($data);
    }
}
