@extends('layouts.app')
@section('content')
    <!-- bannerSec -->
    <div class="bannerSec bannerSecII">
        <div class="txtWrap">
            <h1 class="btn-info"><i class="fas fa-user-plus mdIcn faicon"></i> All Categories </h1>
        </div>
    </div>
    @include('partials.alerts')
    <!-- anmSection -->
    <div class="anmSection">
        @if(count($categories) > 0)
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Channel Type</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    {{--                    @can('marketing-destroy')--}}
                    <th>Actions</th>
                    {{--                    @endcan--}}
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            @if($category->status == 1)
                                <span class="btn-success">Active</span>
                            @else
                                <span class="btn-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{$category->channel_type}}</td>
                        <td>{{$category->created_by_user->username ?? 'N/A'}}</td>
                        <td>{{$category->updated_by_user->username ?? 'N/A'}}</td>
                        {{--                        @can('marketing-destroy')--}}
                        <td>
                            <a class="btn btn-primary" data-toggle="modal"
                               data-target="#category_delete_{{$category->id}}">Delete</a>
                            @include('partials.categoriesPopUps.category-delete', ['category_id' => $category->id])
                            <a class="btn btn-primary" data-toggle="modal"
                               data-target="#category_edit_{{$category->id}}">Edit</a>
                            @include('partials.categoriesPopUps.category-edit', ['category_id' => $category->id, 'category' => $category])
                        </td>

                        {{--                        @endcan--}}
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
