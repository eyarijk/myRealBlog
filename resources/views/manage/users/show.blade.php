@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column is-half is-offset-one-quarter">
      <h1 class="title">{{$user->name}}</h1>
      <h4 class="subtitle">View User Details</h4>
    </div>
    <div class="column">
      <a href="{{route('users.edit',$user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Edit User</a>
    </div>
  </div>
  <hr class="m-t-0">
  <div class="columns m-t-10">
    <div class="column is-half is-offset-one-quarter">
      <div class="field">
        <label for="name" class="label">Name:</label>
        <pre>{{$user->name}}</pre>
      </div>
      <div class="field">
        <label class="label" for="email">Email:</label>
        <pre>{{$user->email}}</pre>
      </div>
    </div>
  </div>
</div>
@endsection
