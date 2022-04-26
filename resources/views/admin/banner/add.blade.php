@extends('admin.master')

@section('title')
    Add Footer Banner Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Add Footer Banner</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('new-banner') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Middle Caption</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="caption">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Subtitle</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subtitle">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Short Description</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="short">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Hiring Link</label>
                                            <div class="col-md-9">
                                                <input type="url" class="form-control" name="link">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Status</label>
                                            <div class="col-md-9">
                                                <label for=""><input type="radio" name="status" checked value="1">Published</label>
                                                <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="form-control btn btn-outline-success" value="Add">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
