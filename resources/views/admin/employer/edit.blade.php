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

            <form action="{{ route('employer.update', $employer->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <label for="title_de">Title [Deutsch]</label>
                                    <input type="text" id="title_de" value="{{ $employer->title_de }}" class="form-control" name="title_de">
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
                                    <input type="text" id="title_en" value="{{ $employer->title_en }}" class="form-control" name="title_en">
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
                                    <label for="applicants_de">OUR APPLICANTS [Deutsch]</label>
                                    <textarea name="applicants_de" class="my-editor" id="applicants_de" cols="30" rows="10">{{ $employer->applicants_de }}</textarea>
                                    @if($errors->has('applicants_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('applicants_de') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="applicants_en">OUR APPLICANTS [English]</label>
                                    <textarea name="applicants_en" class="my-editor" id="applicants_en" cols="30" rows="10">{{ $employer->applicants_en }}</textarea>
                                    @if($errors->has('applicants_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('applicants_en') }}
                                    </div>
                                    @endif
                                </div>
                            </div><br><br>


                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="services_de">OUR SERVICES [Deutsch]</label>
                                    <textarea name="services_de" class="my-editor" id="services_de" cols="30" rows="10">{{ $employer->services_de }}</textarea>
                                    @if($errors->has('services_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('services_de') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="services_en">OUR SERVICES [English]</label>
                                    <textarea name="services_en" class="my-editor" id="services_en" cols="30" rows="10">{{ $employer->services_en }}</textarea>
                                    @if($errors->has('services_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('services_en') }}
                                    </div>
                                    @endif
                                </div>
                            </div><br><br>


                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="conditions_de">OUR CONDITIONS [Deutsch]</label>
                                    <textarea name="conditions_de" class="my-editor" id="conditions_de" cols="30" rows="10">{{ $employer->conditions_de }}</textarea>
                                    @if($errors->has('conditions_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('conditions_de') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-12">
                                    <label for="conditions_en">OUR CONDITIONS [English]</label>
                                    <textarea name="conditions_en" class="my-editor" id="conditions_en" cols="30" rows="10">{{ $employer->conditions_en }}</textarea>
                                    @if($errors->has('conditions_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('conditions_en') }}
                                    </div>
                                    @endif
                                </div>
                            </div><br><br>
                            
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <label for="meta_title_de">Meta Title DE</label>
                                    <textarea name="meta_title_de" class="form-control" id="meta_title_de" cols="30" rows="5">{{ $employer->meta_title_de}}</textarea>
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
                                    <textarea name="meta_description_de" class="form-control" id="meta_description_de" cols="30" rows="5">{{ $employer->meta_description_de }}</textarea>
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
                                    <textarea name="meta_title_en" class="form-control" id="meta_title_en" cols="30" rows="5">{{ $employer->meta_title_en }}</textarea>
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
                                    <textarea name="meta_description_en" class="form-control" id="meta_description_en" cols="30" rows="5">{{ $employer->meta_description_en }}</textarea>
                                    @if($errors->has('meta_description_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('meta_description_en') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="image">Image</label>
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
                                <img src="{{ asset($employer->image) }}" width="150" height="150" alt="">
                            </div>
                        </div>
                        <br>
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

