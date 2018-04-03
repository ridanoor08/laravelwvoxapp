@extends('layouts.admin')



@section('content')



    <h1>POSTS</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Catagory</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated AT</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->post_id}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : '/images/temp.png'}}" alt=""  ></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->catagory->catagory_name}}</td>
                    <td>{{$post->post_title}}</td>
                    <td>{{$post->post_body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

        @endif

        </tbody>
    </table>

@stop

