@extends('layouts.admin')

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

            <form action="{{ route('contact.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <label for="title_de">Name [Deutsch]</label>
                                    <input type="text" id="title_de" class="form-control" name="title_de">
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
                                    <label for="title_em">Name [English]</label>
                                    <input type="text" id="title_em" class="form-control" name="title_em">
                                    @if($errors->has('title_em'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_em') }}
                                    </div>
                                    @endif
                                </div>
                             </div><br><br>

                             <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <label for="job_de">Position [Deutsch]</label>
                                    <input type="text" id="job_de" class="form-control" name="job_de">
                                    @if($errors->has('job_de'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('job_de') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="job_en">Position [English]</label>
                                    <input type="text" id="job_en" class="form-control" name="job_en">
                                    @if($errors->has('job_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('job_en') }}
                                    </div>
                                    @endif
                                </div>
                             </div><br>


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
                            </div><br><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="email">Email [English]</label>
                                <input type="text" id="email" class="form-control" name="email">
                                @if($errors->has('email'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                         </div><br><br>

                         <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="number">Phone number [English]</label>
                                <input type="text" id="number" class="form-control" name="number">
                                @if($errors->has('number'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('number') }}
                                </div>
                                @endif
                            </div>
                         </div><br>

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
                        </div>
                        <br>
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

