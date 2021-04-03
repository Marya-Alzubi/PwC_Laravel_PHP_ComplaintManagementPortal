@extends('layouts.dashboard')
@section('title')
    dashboard
@endsection
@section('main')
    <h1 class="text-center mb-3">Requested Complaints </h1>
    <div class="content-wrapper">
        <div class="content-body">
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Complaints Table </h4>
                            </div>
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration text-center">
                                        <thead>
                                        <tr >
                                            <th>Number</th>
                                            <th>Username</th>
                                            <th>Device Type</th>
                                            <th>Created At</th>
                                            <th>Is Urgent </th>
                                            <th>Status</th>
                                            <th>Update Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($count=0)
                                        @foreach($complaints as $complaint )
                                            @php($count++)
                                        <tr >
                                            <td class="text-bold-600 pr-0 ">{{$count}} </td>
                                            <td>{{$complaint->user->name}}</td>
                                            <td>{{$complaint->device_type}}</td>
                                            <td>{{$complaint->created_at->format('d.M.y ')}}</td>
                                            <td class="text-bold-600 ">
                                                @if( $complaint->is_urgent == 'on')
                                                <i class="text-bold-600 bx bx-check " style="color:limegreen"></i>
                                                @else
                                                <i class="text-bold-600 bx bx-x " style="color:red"></i>
                                                @endif
                                            </td>
                                            <td>
                                            @if( $complaint->status == 'pending')
                                                <span class="badge badge-light-primary">Pending</span>
                                            @elseif( $complaint->status == 'resolved')
                                                <span class="badge badge-light-info">Resolved</span>
                                            @else
                                                <span class="badge badge-light-danger">Dismissed </span>
                                            @endif
                                            </td>
                                            <td><a href="/complaints/{{$complaint->id}}/edit"><i
                                                        class="bx bx-edit-alt"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
