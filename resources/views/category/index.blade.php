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
        @if(count($categoriesData) > 0)
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Channel Type</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    {{--                    @can('marketing-destroy')--}}
                    @if(auth()->user() && auth()->user()->type === 'admin')
                        <th>Actions</th>
                        <th>Child</th>
                    {{--                    @endcan--}}
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($categoriesData as $key => $category)
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
                        @if(auth()->user() && auth()->user()->type === 'admin')
                            <td>
                                <a class="btn btn-primary" data-toggle="modal"
                                   data-target="#category_delete_{{$category->id}}" style="width: 41px;">
                                    <span class="fa fa-trash"></span>
                                </a>
                                @include('partials.categoriesPopUps.category-delete', ['category_id' => $category->id])
                                <a class="btn btn-primary" data-toggle="modal"
                                   data-target="#category_edit_{{$category->id}}" style="width: 41px;">
                                    <span class="fa fa-edit"></span>
                                </a>
                                @include('partials.categoriesPopUps.category-edit', ['category_id' => $category->id, 'category' => $category])
                            </td>
                        @endif
                        {{--                        @endcan--}}
                        <td>
                            <li class="ctItem">
                                <a data-toggle="modal" data-target="#sub_category_create_{{$category->id}}">
                                    <span class="fa fa-folder"></span>
                                </a>
                                @include('partials.categoriesPopUps.sub-category-create', ['category_id' => $category->id])
                            </li>
                            <li class="ctItem">
                                <a href="{{route('sub.category.list', $category->id)}}">
                                    <span class="fa fa-bars"></span>
                                </a>
                            </li>
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
