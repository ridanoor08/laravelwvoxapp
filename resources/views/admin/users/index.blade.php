@extends('layouts.admin')



@section('content')

    <h1>USERS</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Email</th>
            <th>Status</th>
            <th>Role</th>
            <th>Created At</th>
            <th>Updated AT</th>
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/temp.jpg'}}" alt=""  > </td>
            <td>{{$user->email}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->role->role_name}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach

        @endif

        </tbody>
    </table>

@stop

