@extends('admin.layouts.main')
@section('content')


@if ($type == 'edit')
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
                <a href="{{ url(CommonHelper::admin('cms/menus')) }}" class="btn btn-danger btn-mini">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="post" action="{{ CommonHelper::admin('cms/menus') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Title <span class="-req">*</span></label>
                                        <input name="title" type="text" class="form-control" value="{{ $item->title }}" placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Description <span class="-req">*</span></label>
                                        <textarea name="description" type="text" class="form-control" placeholder="Description" required>{{ $item->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach (App\Models\PagesModel::where('is_deleted','0')->orderby('title','asc')->get() as $key => $value)
                                    <div class="col-md-3">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" name="pages[]" value="{{ $value->id }}" <?= in_array($value->id,old('rights',explode(',',$item->page_ids)))?'checked':'' ?>>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">{{ $value->title }}</span>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <input type="hidden" name="item" value="{{ $item->id }}" />
                            <button class="btn btn-success">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
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
                                    <th>Title</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $key => $value)
                                    <tr>    
                                        <td>{{ $value->title }}</td>
                                        <td class="text-center">
                                            <a href="{{ CommonHelper::admin('cms/menus/'.encrypt($value->id)) }}" class="btn btn-primary btn-mini" title="Edit">
                                                <i class="fa fa-pencil"></i>
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
@endif
    

@stop