@extends('layouts.app')

@section('title', 'SimpleApp')

@section('content')

  <h1>Home</h1>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, minus officia ad rerum iusto quae vero, fuga culpa quis placeat temporibus totam iure eveniet ex exercitationem fugiat corporis necessitatibus mollitia.</p>

@endsection

@section('sidebar')
  @parent
  <p>Addition to the sidebar from Home page</p>
@endsection