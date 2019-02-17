@extends('layouts.app')

@section('content')
  @include('inc.messages')
  <h1>Messages</h1>
  <p>You are viewing all messages received on this website.</p>


    @foreach($messages as $message)
      <div class="card card-body">
        <div class="card-title"><h4>{{$message->name}}</h4></div>
        <div class="card-subtitle">{{$message->email}}</div>
        <div class="card-text">{{$message->message}}</div>
      </div>
    @endforeach


@endsection