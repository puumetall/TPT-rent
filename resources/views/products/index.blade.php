@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('products.create')}}" class="btn btn-primary">New Product</a>
        {{$products->links()}}
        <table class="table table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('products.show', ['product' => $product->id])}}" class="btn btn-primary">View</a>
                            <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger" form="delete-form-{{$product->id}}">Delete</button>
                        </div>
                        <form id="delete-form-{{$product->id}}" action="{{route('products.destroy', ['product' => $product->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$products->links()}}
    </div>
@endsection
