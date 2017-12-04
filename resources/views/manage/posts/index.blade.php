@extends('layouts.manage')

@section('content')

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">This is the posts.index pages</h1>
    </div>
    <div class="column">
      <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-file-o  m-r-10"></i>Create New Post</a>
    </div>
  </div>
    <hr class="m-t-0">
</div>

@endsection
