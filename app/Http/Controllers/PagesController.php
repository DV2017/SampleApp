<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home');
    }

    public function about(){
      return view('pages/about');
    }

    public function contact(){
      return view('pages/contact');
    }

    public function store(MessageStoreRequest $request){
      // Will return only validated data
      return $request->validated();
    }
}
