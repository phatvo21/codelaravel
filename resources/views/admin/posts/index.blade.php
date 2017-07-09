@extends('layouts.admin')

@section('posts')

    <h1>Posts</h1>
    <table class="table table-bordered table-hover text-center">
        <thead style="text-align: center;">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Category</th>
            <th>Owner</th>
            <th>Title</th>
            <th>Body</th>
            <th>Create at</th>
            <th>Update at</th>
        </tr>
        </thead>

        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img width="80" height="80" src="{{$post->photo ? $post->photo->file : 'no user photo'}}" alt=""></td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@stop