@extends('layouts.app')
@section('content')
<div class="container">
    <div class="list-group">
        @foreach($products as $product)
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">

{{--                <img src="{{$product->image}}" class="rounded float-end" alt="...">--}}
                <div class="d-flex w-100 justify-content-between">

                    <h5 class="mb-1">{{$product->name}}</h5>
{{--                    <small>3 days ago</small>--}}
                </div>
                <p class="mb-1">{{$product->brand}}</p>
{{--                <small>And some small print.</small>--}}

            </a>
        @endforeach
    </div>
    <form action="{{route('reservation.make')}}" method="POST">
        @csrf
        <input class="form-control" id="datepicker" name="reserved_start"/>
        <input class="form-control" id="datepicker-end" name="reserved_end"/>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.umd.min.js"></script>
    <script>
        const DateTime = easepick.DateTime;
        const dates= [
            // new DateTime('2022-11-15', 'YYYY-MM-DD')
        ]
        const picker = new easepick.create({
            element: document.getElementById('datepicker'),
            plugins: ['RangePlugin', 'LockPlugin'],
            RangePlugin: {
                tooltip: true,
                elementEnd: document.getElementById('datepicker-end'),
            },
            LockPlugin: {
                inseparable: true,
                filter(date, picked){
                    return date.inArray(dates, '[)');
                }
            },
            css: [
                'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.css',
            ],
        });
    </script>
@endpush
