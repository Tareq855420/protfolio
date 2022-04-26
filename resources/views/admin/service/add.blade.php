@extends('admin.master')

@section('title')
    Add Service Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Add Service</h4>
                        <div class="card-body">
                            <div>
                                @if(Session::has('message'))
                                    <span class="text-success">{{ Session::get('message') }}</span>
                                @endif
                            <form action="{{ route('new-service') }}" method="post">
                                @csrf

                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3">Service Icon</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icon">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3">Service Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3">Service Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" id="" cols="20" rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3">Service Status</label>
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
    </section>
@endsection
