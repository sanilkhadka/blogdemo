<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = "index";
        
        return view('index', compact('title'));
        //return view('index')->with('abc',$title);
    }
    public function about()
    {
        $title = "about";
        return view('about')->with('abc',$title);
    }
    public function services()
    {
        $tit = "services";
        // return view('services')->with('abc',$tit);
        $data = array(
            'tit'=>'services',
            'services'=>['Advance Treatment','Guaranteed Results','Modern Tech & Equipment']
        );
        return view('services')->with($data);
    }
}
