@extends('layouts.admin')

@section('content_users')

    <h1>Users</h1>

    <table class="table table-bordered table-hover text-center">
        <thead style="text-align: center;">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Create at</th>
            <th>Update at</th>
        </tr>
        </thead>

        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img width="80" height="80" src="{{$user->photo ? $user->photo->file : 'no user photo'}}" alt="">
                    <div>
                        <a href="{{route('admin.users.edit', $user->id)}}">Edit</a>
                    </div>
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'No Active' }}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
