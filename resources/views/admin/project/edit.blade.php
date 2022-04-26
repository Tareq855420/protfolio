@extends('admin.master')

@section('title')
    Edit Project Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Edit Project</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('update-project', ['id'=>$project->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Project Title</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="title" value="{{ $project->title }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Project Sub-Title</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="subtitle" value="{{ $project->subtitle }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="image">
                                                <img src="{{ asset($project->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Project Status</label>
                                            <div class="col-md-9">
                                                <label for=""><input type="radio" name="status" value="1" {{ $project->status == 1 ? 'checked' : '' }}>Published</label>
                                                <label for=""><input type="radio" name="status" value="0" {{ $project->status == 0 ? 'checked' : '' }}>Unpublished</label>
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
