@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Document</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('document.update', $document->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="category_id">Categories</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($category as $category)
                                <option @if($category->id == $document->category_id) selected @endif value="{{ $category->id }}">{{ $category->title_en }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('category_id') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="title_de">Title [Deutsch]</label>
                            <input type="text" id="title_de" value="{{ $document->title_de }}" class="form-control" name="title_de">
                            @if($errors->has('title_de'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_de') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label for="title_en">Title [English]</label>
                            <input type="text" id="title_en" value="{{ $document->title_en }}" class="form-control" name="title_en">
                            @if($errors->has('title_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="image">File</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <fieldset>{{ asset($document->image) }}</fieldset>
                        </div>
                    </div><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

