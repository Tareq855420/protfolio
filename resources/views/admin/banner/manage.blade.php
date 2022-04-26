@extends('admin.master')

@section('title')
    Manage Banner Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Banner</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Middle Caption</th>
                                        <th>Subtitle</th>
                                        <th>Short Description</th>
                                        <th>Image</th>
                                        <th>Hiring Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $banners as $banner )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->caption }}</td>
                                            <td>{{ $banner->subtitle }}</td>
                                            <td>{{ $banner->short }}</td>
                                            <td>
                                                <img src="{{ asset($banner->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </td>
                                            <td>{{ $banner->link }}</td>
                                            <td>{{ $banner->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-banner',['id'=> $banner->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-banner',['id'=>$banner->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
