@extends('admin.master')

@section('title')
    Edit Footer Banner Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Edit Footer Banner</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('update-banner', ['id'=>$banner->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="title" value="{{ $banner->title }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Middle Caption</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="caption" value="{{ $banner->caption }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Subtitle</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subtitle" value="{{ $banner->subtitle }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Short Description</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="short" value="{{ $banner->short }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="image">
                                                <img src="{{ asset($banner->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Hiring Link</label>
                                            <div class="col-md-9">
                                                <input type="url" class="form-control" name="link" value="{{ $banner->link }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Status</label>
                                            <div class="col-md-9">
                                                <label for=""><input type="radio" name="status" value="1" {{ $banner->status == 1 ? 'checked' : '' }} >Published</label>
                                                <label for=""><input type="radio" name="status" value="0" {{ $banner->status == 0 ? 'checked' : '' }}>Unpublished</label>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="form-control btn btn-outline-success" value="Update">
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
