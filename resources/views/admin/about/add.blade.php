@extends('admin.master')

@section('title')
    Add About Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Add About</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('new-about') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" name="birthDate">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <textarea name="address" class="form-control" id="" cols="20" rows="1"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Zip Code</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="zipCode">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Mobile</label>
                                            <div class="col-md-9">
                                                <input type="tel" class="form-control" name="mobile">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Project Completed</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="completed">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Resume</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="resume">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">About Status</label>
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
