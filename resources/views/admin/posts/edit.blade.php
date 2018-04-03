@extends('layouts.admin')



@section('content')



    <h1>EDIT POSTS</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>

        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>hi</td>

                </tr>
            @endforeach

        @endif

        </tbody>
    </table>

@stop

