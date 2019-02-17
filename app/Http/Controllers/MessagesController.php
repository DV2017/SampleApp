<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageStoreRequest;

use App\Message;

class MessagesController extends Controller
{
  
  public function index(){
    $messages = Message::all();
    return view('pages.messages', compact('messages'));
  }
  
  
  public function store(MessageStoreRequest $request){
    // Will return only validated data
    $request->validated();

    //create new Message model instance
    //just like in tinker
    
    $message = new Message;
    
    $message->name = request()->name;
    $message->email = request()->email;
    $message->message = request()->message;
    //insert into db
    $message->save();

    //redirect
    return redirect('/messages')->with('success', 'Message sent.');
  }

  // public function edit($id){

  //   $messages = Message::find($id);
  //   return view('/messages.edit', compact('message'));

  // }

  


}
