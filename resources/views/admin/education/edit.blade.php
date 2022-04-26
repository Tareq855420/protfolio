@extends('admin.master')

@section('title')
    Edit Education Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4>Edit Education</h4>
                            <div class="card-body">
                                <div>
                                    @if(Session::has('message'))
                                        <span class="text-success">{{ Session::get('message') }}</span>
                                    @endif
                                    <form action="{{ route('update-education', ['id'=>$education->id]) }}" method="post">
                                        @csrf

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Education Duration</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="dur" value="{{ $education->dur }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Education Lavel</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="lavel" value="{{ $education->lavel }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Educational Institution</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="institute" value="{{ $education->institute }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Education Description</label>
                                            <div class="col-md-9">
                                                <textarea name="description" class="form-control" id="" cols="20" rows="1">{{ $education->description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="" class="col-md-3">Education Status</label>
                                            <div class="col-md-9">
                                                <label for=""><input type="radio" name="status" value="1" {{ $education->status == 1 ? 'checked' : '' }}>Published</label>
                                                <label for=""><input type="radio" name="status" value="0" {{ $education->status == 0 ? 'checked' : '' }}>Unpublished</label>
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
