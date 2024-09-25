@extends('admin.layouts.main')
@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>{{ $_title }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ CommonHelper::admin('blogs/create') }}" class="btn btn-primary btn-mini">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block table-responsive">
                        <table class="table table-bordered table-mini table-dt">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $key => $value)
                                    <tr>    
                                        <td>
                                            {{ $value->title }}
                                        </td>
                                        <td class="text-center">
                                            {{ CommonHelper::dateFormat($value->created_at,'d M Y h:i A') }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ CommonHelper::admin('blogs/edit/'.encrypt($value->id)) }}" class="btn btn-primary btn-mini" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{ CommonHelper::admin('blogs/'.encrypt($value->id)) }}" class="btn btn-danger btn-mini btn-delete" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
@stop