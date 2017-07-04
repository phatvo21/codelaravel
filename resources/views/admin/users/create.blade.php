@extends('layouts.admin')

@section('content_users_create')
    <h1>Create User</h1>
    {{--<form action="/posts" method="post">--}}
    {!! Form::open(['method'=>'POST','action'=> 'AdminUsersController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('role_id','Role') !!}
        {!! Form::select('role_id',[''=>'Choose Option'] + $roles , null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'),0,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('photo_id','File') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}

    </div>

    {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
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