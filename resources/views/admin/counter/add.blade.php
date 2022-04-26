@extends('admin.master')

@section('title')
    Add Counter Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Add Counter</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('new-counter') }}" method="post">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Add Experience</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="experience">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Complete Project</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="project">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Happy Costumers</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="costumer">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Cup of Coffee</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="coffee">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Counter Status</label>
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
