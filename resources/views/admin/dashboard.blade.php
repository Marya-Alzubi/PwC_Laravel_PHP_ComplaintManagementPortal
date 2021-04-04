@extends('layouts.dashboard')
@section('title')
    dashboard
@endsection
@section('main')
    <h1 class="text-center mb-3">Welcome To Admin Dashboard!!</h1>
    <div class="content-header row">
        <div class="col-sm-4 col-4 dashboard-users-success">
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
        <div class="col-sm-4 col-4 dashboard-users-success">
            <div class="card text-center">
                <div class="card-body py-1">
                    <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto mb-50">
                        <i class="bx bxs-bell-ring font-medium-5"></i>
                    </div>
                    <div class="text-muted line-ellipsis">Number of complaints </div>
                    <h3 class="mb-0">{{\App\Complaint::count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-4 dashboard-users-success">
            <div class="card text-center">
                <div class="card-body py-1">
                    <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                        <i class="bx bxs-user-check font-medium-5"></i>
                    </div>
                    <div class="text-muted line-ellipsis">Number of Admins </div>
                    <h3 class="mb-0">{{\App\Admin::count()}}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div  class="mt-4 mr-4">
    <canvas id="myChart"  width="500" height="500"  ></canvas>
    </div>
    <div class="mt-4">
    <canvas id="myChart2" width="600" height="500" ></canvas>
    </div>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Pending', 'Resolved', 'Dismissed'],
                datasets: [{
                    data: [ {{\App\Complaint::where('status', 'pending')->count()}}, {{\App\Complaint::where('status', 'resolved')->count()}} , {{\App\Complaint::where('status', 'dismissed')->count()}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['users', 'admins'],
                datasets: [{
                    label: '# of Users ',
                    data: [{{\App\User::count()}}, {{\App\Admin::count()}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection

