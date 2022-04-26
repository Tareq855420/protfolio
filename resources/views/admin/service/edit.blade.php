@extends('admin.master')

@section('title')
    Edit Service Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Edit Service Section</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                        <form action="{{ route('update-service', ['id'=>$service->id]) }}" method="post">
                                        @csrf

                                            <div class="form-group row mt-3">
                                                <label for="" class="col-md-3">Service Icon</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="icon" value="{{ $service->icon }}">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label for="" class="col-md-3">Service Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="name" value="{{ $service->name }}">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label for="" class="col-md-3">Service Description</label>
                                                <div class="col-md-9">
                                                    <textarea name="description" class="form-control" id="" cols="20" rows="1">{{ $service->description }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label for="" class="col-md-3">Service Status</label>
                                                <div class="col-md-9">
                                                    <label for=""><input type="radio" name="status" value="1" {{ $service->status == 1 ? 'checked' : '' }}>Published</label>
                                                    <label for=""><input type="radio" name="status" value="0" {{ $service->status == 0 ? 'checked' : '' }}>Unpublished</label>
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
    </section>
@endsection
