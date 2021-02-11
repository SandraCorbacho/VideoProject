<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class WelcomeController extends Controller
{

    public function index(){
        $videos = Video::get();
        
        return view('welcome',[
            'videos' => $videos,
        ]);

    }
}
