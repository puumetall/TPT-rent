@extends('layouts.app')
@section('content')
    <div class="container">
        {{$users->links()}}
        <table class="table table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('users.show', ['user' => $user->id])}}" class="btn btn-primary">View</a>
                            <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-warning">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$users->links()}}
    </div>
@endsection
