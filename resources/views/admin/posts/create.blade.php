@extends('layouts.admin')



@section('content')



    <h1>CREATE POSTS</h1>

    <div class="row">
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('post_title', 'Title:') !!}
        {!! Form::text('post_title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('catagory_id', 'Catagory:') !!}
        {!! Form::select('catagory_id', [''=>'Choose Catagories'] + $catagories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('post_body', 'Discription:') !!}
        {!! Form::textarea('post_body', null, ['class'=>'form-control', 'rows'=>5]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    </div>

    <div class="row">
    @include('include.form_errors')
    </div>
@stop

