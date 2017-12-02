@extends('layouts.manage')


@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Edit User</h1>
    </div>
  </div>
  <div class="m-t-10">
    <form class="" action="{{route('users.update',$user->id)}}" method="post">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="field">
        <label for="name" class="label">Name:</label>
        <p class="control"> <input type="text" name="name" class="input" value="{{$user->name}}" id="name"> </p>
      </div>
      <div class="field">
        <label for="email" class="label">Email:</label>
        <p class="control"> <input type="text" name="email" class="input" value="{{$user->email}}" id="email"> </p>
      </div>
      <div class="field">
        <label for="password" class="label">Password:</label>
        <b-radio-group v-model="password_options">
            <div class="field">
              <b-radio v-model="password_options" name="password_options" native-value="keep">Do Not Change Password</b-radio>
            </div>
            <div class="field">
              <b-radio v-model="password_options" name="password_options" native-value="auto">Auto-Generate New Password</b-radio>
            </div>
            <div class="field">
              <b-radio v-model="password_options" name="password_options" native-value="manual">Manually Set New Password</b-radio>
              <p class="control">
                <input type="text" class="input m-t-10" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
              </p>
            </div>
          </b-radio-group>
      </div>
      <button type="submit" class="button is-primary">Edit User</button>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script>
var app = new Vue({
   el: '#app',
   data: {
     password_options: 'keep',
    }
  });
</script>
@endsection
