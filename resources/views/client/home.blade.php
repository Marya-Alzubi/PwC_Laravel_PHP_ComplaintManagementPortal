@extends('layouts.client')
@section('title') Home page @endsection
@section('links')
    <link href="{{asset('assets/css/verification_code.css')}}" rel="stylesheet">
@endsection
@section('page-title')
@endsection
@section('main')
    <div class="">
        <h1 >Welcome {{ Auth::user()->name }}!!  </h1>
        <span> Home page</span>
        <hr>
    </div>

    <fieldset class="wizard-fieldset ">
        <a href="/complaints">
            <button type="button" class="btn btn-primary btn-lg my-4">Create new complaint</button>
        </a>
        <table class="table table-hover text-center">
            <thead>
            <tr class="table-dark">
                {{--                <th scope="col">Number</th>--}}
                <th scope="col">Device Type</th>
                <th scope="col">Serial Number</th>
                <th scope="col">Urgency</th>
                <th scope="col">Status</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach (\App\Complaint::with('user')->where('user_id', auth()->id())->orderByDesc('id')->get() as $user )
                <tr>
                    <td> {{$user->device_type}} </td>
                    <td> {{$user->serial_number}} </td>
                    <td>
                        @if( $user->is_urgent == 'on')
                            <i class="text-bold-600 fas fa-check" style="color:limegreen"></i>
                        @else
                            <i class="fas fa-times" style="color:red"></i>
                        @endif
                    </td>
                    <td>
                        @if( $user->status == 'pending')
                            <span class="badge badge-pill badge-primary">Pending</span>
                        @elseif( $user->status == 'resolved')
                            <span class="badge badge-pill badge-success">Resolved</span>
                        @else
                            <span class="badge badge-pill badge-danger">Dismissed</span>
                        @endif
                    </td>
                    <td> {{$user->created_at->format('d.M.y ')}} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </fieldset>
@endsection
