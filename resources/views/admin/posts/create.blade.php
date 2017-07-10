@extends('layouts.admin')

@section('posts_create')

<h1>Create Posts</h1>
{{--<form action="/posts" method="post">--}}
{!! Form::open(['method'=>'POST','action'=> 'AdminPostsController@store', 'files'=>true]) !!}

<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('category_id','Category') !!}
    {!! Form::select('category_id',[''=>'Choose Option'] + $categories ,null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('photo_id','File') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('body','Description') !!}
    {!! Form::textarea('body',null,['class'=>'form-control', 'rows'=>7]) !!}

</div>

{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
{{--<input type="text" name="title" placeholder="Enter the title">--}}
{{--<input type="submit" name="submit" value="submit">--}}

{!! Form::close()!!}

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    @endsection