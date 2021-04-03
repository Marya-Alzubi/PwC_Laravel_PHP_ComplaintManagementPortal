@extends('layouts.dashboard')
@section('title')
    dashboard
@endsection
@section('main')
    <h1 class="text-center mb-3">Admins</h1>
    <div class="content-wrapper">
        <div class="content-body">
            <a href="{{route('admin.register')}}"><button type="button" class="btn btn-primary glow mr-1 mb-1"><i class="bx bx-plus"></i>
                <span class="align-middle ml-25">Add New Admin </span></button></a>
            <!-- table success start -->
            <section id="table-success">
                <div class="card">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="table-extended-success" class="table mb-0">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($count=0)
                            @foreach($admins as $admin)
                                @php($count++)
                            <tr>
                                <td>{{$count}} </td>
                                <td>{{$admin->name}} </td>
                                <td>{{$admin->email}}</td>
                                <td>
                                    <div class="dropdown">
                                        <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="/admins/{{$admin->id}}/edit"><i
                                                    class="bx bx-edit-alt mr-1"></i> <button type="button" class="btn btn-outline-secondary btn-sm ">Update</button></a>
                                            <form method="POST" action="/admins/{{$admin->id}}">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            <a class="dropdown-item" href=""><i
                                                    class="bx bx-trash mr-1"></i> <button type="submit" class="btn btn-outline-secondary btn-sm ">Delete</button></a>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </section>
            <!-- table success ends -->
        </div>
    </div>
@endsection
