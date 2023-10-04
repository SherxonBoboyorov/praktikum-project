{{-- @extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('protection.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="content_de">Content [Deutsch]</label>
                                    <textarea name="content_de" class="my-editor" id="content_de" cols="30" rows="10"></textarea>
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
                                    <textarea name="content_en" class="my-editor" id="content_en" cols="30" rows="10"></textarea>
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
                                <div class="col-md-6">
                                    <label for="meta_title_de">Meta Title DE</label>
                                    <textarea name="meta_title_de" class="form-control" id="meta_title_de" cols="30" rows="5"></textarea>
                                    @if($errors->has('meta_title_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('meta_title_de') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="meta_description_de">Meta Description DE</label>
                                    <textarea name="meta_description_de" class="form-control" id="meta_description_de" cols="30" rows="5"></textarea>
                                    @if($errors->has('meta_description_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('meta_description_de') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                    
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <label for="meta_title_en">Meta Title EN</label>
                                    <textarea name="meta_title_en" class="form-control" id="meta_title_en" cols="30" rows="5"></textarea>
                                    @if($errors->has('meta_title_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('meta_title_en') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="meta_description_en">Meta Description EN</label>
                                    <textarea name="meta_description_en" class="form-control" id="meta_description_en" cols="30" rows="5"></textarea>
                                    @if($errors->has('meta_description_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('meta_description_en') }}
                                    </div>
                                    @endif
                                </div>
                            </div><br>


                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Save</button>
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
 --}}
