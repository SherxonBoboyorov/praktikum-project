@extends('layouts.admin')

@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">All About Contacts</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <a href="{{ route('contact.create')}}" class="btn bg-success mb-2">Add About Contacts +</a>

        <div class="card">
            <div class="card-body">

                @if(session('message'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('message') }}
                    </div>

                @endif

                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 2%;">#</th>
                        <th>Image</th>
                        <th>Name [Deutsch]</th>
                        <th>Name [Engish]</th>
                        <th colspan="2" style="width: 2%; border-radius: 5px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>
                                <img src="{{ asset($contact->image) }}" alt="" width="35" height="35">
                            </td>
                            <td>{{ $contact->title_de }}</td>
                            <td>{{ $contact->title_em }}</td>
                            <td>
                                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary btn-icon">
                                    <i class="fa fa-edit">Edit</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon">
                                        <i class="fa fa-trash">Delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>



@endsection