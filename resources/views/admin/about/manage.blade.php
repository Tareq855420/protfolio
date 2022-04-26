@extends('admin.master')

@section('title')
    Manage About Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage About</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Address</th>
                                        <th>Zip Code</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Image</th>
                                        <th>Project Completed</th>
                                        <th>Resume</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $abouts as $about)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $about->name }}</td>
                                            <td>{{ $about->birthDate }}</td>
                                            <td>{{ $about->address }}</td>
                                            <td>{{ $about->zipCode }}</td>
                                            <td>{{ $about->email }}</td>
                                            <td>{{ $about->mobile }}</td>
                                            <td>
                                                <img src="{{ asset($about->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </td>
                                            <td>{{ $about->completed }}</td>
                                            <td>
                                                <a href="{{ asset($about->resume) }}"></a>
                                            </td>
                                            <td>{{ $about->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-about',['id'=> $about->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-about',['id'=>$about->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
