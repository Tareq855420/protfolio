@extends('admin.master')

@section('title')
    Edit Contact Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Edit Contact</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('update-contact', ['id'=>$contact->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="address" value="{{ $contact->address }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" name="email" value="{{ $contact->email }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Contact Number</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="number" value="{{ $contact->number }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Website</label>
                                            <div class="col-md-9">
                                                <input type="url" class="form-control" name="site" value="{{ $contact->site }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="image">
                                                <img src="{{ asset($contact->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">About Status</label>
                                            <div class="col-md-9">
                                                <label for=""><input type="radio" name="status" value="1" {{ $contact->status == 1 ? 'checked' : '' }}>Published</label>
                                                <label for=""><input type="radio" name="status" value="0" {{ $contact->status == 0 ? 'checked' : '' }}>Unpublished</label>
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
