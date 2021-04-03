@extends('layouts.dashboard')
@section('title')
    dashboard
@endsection
@section('main')
    <h1 class="text-center mb-3">welcome to dashboard!!</h1>
    <div class="content-header row">
        <div class="col-sm-6 col-6 dashboard-users-success">
            <div class="card text-center">
                <div class="card-body py-1">
                    <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                        <i class="bx bx-user-circle font-medium-5"></i>
                    </div>
                    <div class="text-muted line-ellipsis">Number of users</div>
                    <h3 class="mb-0">{{\App\User::count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-6 dashboard-users-success">
            <div class="card text-center">
                <div class="card-body py-1">
                    <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto mb-50">
                        <i class="bx bxs-copy-alt font-medium-5"></i>
                    </div>
                    <div class="text-muted line-ellipsis">Number of complaints </div>
                    <h3 class="mb-0">{{\App\Complaint::count()}}</h3>
                </div>
            </div>
        </div>
    </div>

@endsection
