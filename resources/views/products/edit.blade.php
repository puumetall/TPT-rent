@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                @error('name')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{$product->description}}</textarea>
                @error('description')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{$product->brand}}">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option value="available" {{$product->status == 'available' ? 'selected' : ''}}>Available</option>
                    <option value="not available" {{$product->status == 'not available' ? 'selected' : ''}}>Not available</option>
                </select>
                @error('status')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="production_date" class="form-label">Production date</label>
                <input type="date" class="form-control" id="production_date" name="production_date" value="{{$product->production_date->format('Y-m-d')}}">
                @error('production_date')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                <div class="invalid-feedback" style="display: block">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
