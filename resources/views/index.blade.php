@extends('layouts.app')
@section('content')
    <div class="container text-center">
        {{$products->links()}}
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
                    <div class="card">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-header">
                            {{$product->name}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Brand:</b> {{$product->brand}}</li>
                            <li class="list-group-item"><b>Produced:</b>{{$product->production_date}}</li>
                            <li class="list-group-item"><b>Status:</b>{{$product->status}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{route('public.show', ['product'=> $product->id])}}" class="btn btn-primary">Read more</a>
                            @if($product->status == 'not available')
                                <a href="#" class="btn btn-primary disabled">Add to Cart</a>
                            @else
                                <a href="{{route('cart.add', ['product'=> $product->id])}}" class="btn btn-primary">Add to Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection
