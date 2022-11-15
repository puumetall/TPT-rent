@extends('layouts.app')
@section('content')
    <div class="container">

        {{$reservations->links()}}
        <table class="table table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>User</th>
                <th>Start</th>
                <th>End</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{$reservation->id}}</td>
                    <td>{{$reservation->user->name}}</td>
                    <td>{{$reservation->reserved_start}}</td>
                    <td>{{$reservation->reserved_end}}</td>
                    <td>{{$reservation->status}}</td>
                    <td>{{$reservation->created_at}}</td>
                    <td>{{$reservation->updated_at}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="" class="btn btn-primary">View</a>
                            @if($reservation->status == 'submitted')
                                <button form="accept-form-{{$reservation->id}}" class="btn btn-info">Accept</button>
                            @endif
                            @if($reservation->status == 'accepted')
                                <button form="receive-form-{{$reservation->id}}" class="btn btn-warning">Recieved</button>
                            @endif
                            @if($reservation->status == 'received')
                                <button form="complete-form-{{$reservation->id}}" class="btn btn-success">Complete</button>
                            @endif
                            @if($reservation->status !== 'completed')
                                <button class="btn btn-danger" form="delete-form-{{$reservation->id}}">Cancel</button>
                            @endif
                        </div>
                        <form id="accept-form-{{$reservation->id}}" action="{{route('reservations.update', ['reservation'=> $reservation])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" value="accepted" name="status">
                        </form>
                        <form id="receive-form-{{$reservation->id}}" action="{{route('reservations.update', ['reservation'=> $reservation])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" value="received" name="status">
                        </form>
                        <form id="complete-form-{{$reservation->id}}" action="{{route('reservations.update', ['reservation'=> $reservation])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" value="completed" name="status">
                        </form>
                        <form id="cancel-form-{{$reservation->id}}" action="{{route('reservations.update', ['reservation'=> $reservation])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" value="canceled" name="status">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$reservations->links()}}
    </div>
@endsection
