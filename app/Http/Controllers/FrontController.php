<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id', 'desc')->get();
        return view('front.index', [
            'projects' => $projects
        ]);
    }

    public function details(){
        return view('front.detail');
    }

    public function book(){
        return view('front.book');
    }
}
