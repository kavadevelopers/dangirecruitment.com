
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
                <a href="{{ url(CommonHelper::admin('blogs')) }}" class="btn btn-danger btn-mini">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <form method="post" action="{{ CommonHelper::admin('blogs/update') }}" enctype="multipart/form-data">
        @csrf
            <div class="card">
                <div class="card-header">
                    <h5>Details</h5>
                    <span>Enter details</span>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Title <span class="-req">*</span></label>
                                <input name="title" type="text" class="form-control" placeholder="Title" value="{{ $item->title }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category <span class="-req">*</span></label>
                                <input name="category" type="text" class="form-control" placeholder="Category" value="{{ $item->category }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Posted By <span class="-req">*</span></label>
                                <input name="posted_by" type="text" class="form-control" placeholder="Posted By" value="{{ $item->posted_by }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Banner</label>
                                <input type="file" name="banner" class="form-control" onchange="return fileExAllowed(this,'.pdf,.jpg,.png,.PNG,.JPG,.JPEG,.jpeg')"/>
                                <p><strong>Note:</strong> Banner ratio must be 3:2</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Body</label>
                                <textarea name="body" type="text" class="form-control tinymceeditor" value="" >{{ $item->body }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="hidden" name="item" value="{{ $item->id }}" />
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop