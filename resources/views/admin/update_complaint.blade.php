@extends('layouts.dashboard')
@section('title')
    dashboard
@endsection
@section('main')
    <h1 class="text-center mb-3">Update the status </h1>
    <div class="content-wrapper">
        <div class="content-body">

            <div class="card">
                <div class="card-body">
                    <div class="media-body pt-25">
                        <h4 class="media-heading"><span class="users-view-name">{{$complaint->user->name}}</span></h4>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">

                            <table class=" table-border">
                                <tbody>
                                <tr>
                                    <td class="text-bold-600 pr-0 ">Device Type:</td>
                                    <td>{{$complaint->device_type}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600 pr-0 ">Generation:</td>
                                    <td class="users-view-latest-activity">{{$complaint->generation}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600 pr-0 ">Serial Number:</td>
                                    <td class="users-view-verified">{{$complaint->serial_number}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600 pr-0 ">The Error:</td>
                                    <td class="users-view-role">{{$complaint->errors}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600 pr-0 ">The Problem Cause: &nbsp &nbsp</td>
                                    <td>{{$complaint->problem_cause}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-600 pr-0 ">Created At:</td>
                                    <td class="users-view-role">{{$complaint->created_at->format('d.M.y ')}}</td>
                                </tr>
                                <tr class="text-bold-600 pr-0 ">
                                    <td>Is Urgent:</td>
                                    @if( $complaint->is_urgent == 'on')
                                        <td class="float-left"><i class="text-bold-600 bx bx-check "
                                                                   style="color:limegreen"></i></td>
                                    @else
                                        <td class="float-left"><i class="text-bold-600 bx bx-x " style="color:red"></i>
                                        </td>
                                        @endif
                                        </td>
                                </tr>
                                <tr class="text-bold-600 pr-0 ">
                                    <td>Status:</td>
                                    <td>
                                        @if( $complaint->status == 'pending')
                                            <span class="badge badge-light-primary">Pending</span>
                                        @elseif( $complaint->status == 'resolved')
                                            <span class="badge badge-light-info">Resolved</span>
                                        @else
                                            <span class="badge badge-light-danger">Dismissed </span>
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="mt-1">
                                        <h4 class="card-title">Update the status </h4>
                                    </div>
                                    <fieldset class="form-group">
                                        <form method="post" action="/complaints/{{$complaint->id}}">
                                            @csrf
                                            {{method_field('PATCH')}}
                                            <div class="input-group">
                                                <select class="custom-select" id="inputGroupSelect02" name="status">
                                                    @if($complaint->status == 'pending')
                                                        <option value="dismissed">Dismissed</option>
                                                        <option value="resolved">Resolved</option>
                                                    @elseif($complaint->status == 'dismissed')
                                                        <option value="pending">Pending</option>
                                                        <option value="resolved">Resolved</option>
                                                    @else
                                                        <option value="dismissed">Dismissed</option>
                                                        <option value="pending">Pending</option>
                                                    @endif
                                                </select>
                                                <div class="input-group-append">
                                                    <label class="input-group-text"
                                                           for="inputGroupSelect02">Options</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="mt-2 btn glow btn-primary btn-lg btn-block">
                                                Update the Status
                                            </button>
                                        </form>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

