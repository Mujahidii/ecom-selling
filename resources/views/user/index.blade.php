@extends('layouts.app')
@section('content')
    <!-- bannerSec -->
    <div class="bannerSec bannerSecII">
        <div class="txtWrap">
            <h1 class="btn-info"><i class="fas fa-user-plus mdIcn faicon"></i> Users </h1>
        </div>
    </div>
    @include('partials.alerts')
    <!-- anmSection -->
    <div class="anmSection">
        @if(count($users) > 0)
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>
                            @if($user->status == 1)
                                <span class="btn-success">Active</span>
                            @else
                                <span class="btn-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td>
                            <a class="btn btn-primary" data-toggle="modal"
                               data-target="#user_delete_{{$user->id}}">Delete</a>
                            @include('partials.usersPopups.user-delete', ['user' => $user])
                            <a class="btn btn-primary" data-toggle="modal"
                               data-target="#user_edit_{{$user->id}}">Edit</a>
                            @include('partials.usersPopups.user-edit', ['user' => $user])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <center><h2>No Category Found</h2></center>
        @endif
    </div>
@endsection
@push('scripts')

@endpush
