@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <th>Is Admin</th>
                    <td>{{$user->hasRole('admin') ? 'true' : 'false'}}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{$user->created_at}}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{$user->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
