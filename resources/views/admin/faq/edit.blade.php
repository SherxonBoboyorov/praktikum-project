@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('faq.update', $faq->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="title_de">Title [Deutsch]</label>
                                <input type="text" id="title_de" value="{{ $faq->title_de }}" class="form-control" name="title_de">
                                @if($errors->has('title_de'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('title_de') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="title_en">Title [English]</label>
                                <input type="text" id="title_en" value="{{ $faq->title_en }}" class="form-control" name="title_en">
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
                            <div class="col-md-12">
                                <label for="content_de">Content [Deutsch]</label>
                                <textarea name="content_de" class="my-editor" id="content_de" cols="30" rows="10">{{ $faq->content_de }}</textarea>
                                @if($errors->has('content_de'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_de') }}
                                </div>
                                @endif
                            </div>
                        </div>
    
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="content_en">Content [English]</label>
                                <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10">{{ $faq->content_en }}</textarea>
                                @if($errors->has('content_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('content_en') }}
                                </div>
                                @endif
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

        </div>
    </div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

