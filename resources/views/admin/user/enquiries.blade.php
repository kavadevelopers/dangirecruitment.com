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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th>Message</th>
                                    <th class="text-center">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $key => $value)
                                    <tr>    
                                        <td>
                                            {{ $value->name }}
                                        </td>
                                        <td>
                                            {{ $value->email }}
                                        </td>
                                        <td>
                                            {{ $value->phone }}
                                        </td>
                                        <td>
                                            {{ $value->company }}
                                        </td>
                                        <td>
                                            {!! nl2br($value->message) !!}
                                        </td>
                                        <td class="text-center">
                                            {{ CommonHelper::dateFormat($value->created_at,'d M Y h:i A') }}
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