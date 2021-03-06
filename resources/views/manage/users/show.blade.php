@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column ">
      <h1 class="title">{{$user->name}}</h1>
      <h4 class="subtitle">View User Details</h4>
    </div>
    <div class="column">
      <a href="{{route('users.edit',$user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Edit User</a>
    </div>
  </div>
  <hr class="m-t-0">
  <div class="m-t-10">
      <div class="field">
        <label for="name" class="label">Name:</label>
        <pre>{{$user->name}}</pre>
      </div>
      <div class="field">
        <label class="label" for="email">Email:</label>
        <pre>{{$user->email}}</pre>
      </div>
      <div class="field">
        <label class="label" for="email">Roles:</label>
        <ul>
          {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
          @foreach($user->roles as $role)
            <li>{{$role->display_name}} ({{$role->description}})</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

@endsection
