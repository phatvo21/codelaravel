@extends('layouts.admin')

@section('content_users_edit')
    <h1>Edit User</h1>
    <div class="row">
    <div class="col-sm-3">
        <img class="img-responsive img-rounded" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="">
    </div>
    <div class="col-sm-9">
    {{--<form action="/posts" method="post">--}}
    {!! Form::model($user, ['method'=>'PATCH','action'=> ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

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
        {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'),null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('photo_id','File') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}

    </div>
        <div class="form-group">
    {!! Form::submit('Update User',['class'=>'btn btn-primary col-sm-6']) !!}
        </div>
    {{--<input type="text" name="title" placeholder="Enter the title">--}}
    {{--<input type="submit" name="submit" value="submit">--}}

    {!! Form::close()!!}



        {!! Form::open(['method'=>'DELETE','action'=> ['AdminUsersController@destroy',$user->id ]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close()!!}

    </div>
    </div>
    <div class="row">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
@endsection