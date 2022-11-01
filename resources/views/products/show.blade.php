@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{$product->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td>{{$product->brand}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$product->status}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$product->description}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="{{$product->image}}" height="300"></td>
                </tr>
                <tr>
                    <th>Production Date</th>
                    <td>{{$product->production_date}}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{$product->created_at}}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{$product->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
