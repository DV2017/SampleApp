@extends('layouts.app')

@section('content')

<h1>Contact</h1>

@include('inc.messages')

{!! Form::open(['url' => 'messages']) !!}
    <div class="form-group">
      {{Form::label('name', 'Full Name')}}
      {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter your full name'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '', ['class'=>'form-control', 'placeholder' => 'example@gmail.com'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder' => 'What are you thinking of?'])}}
    </div>
    <div class="form-group">
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
  
@endsection