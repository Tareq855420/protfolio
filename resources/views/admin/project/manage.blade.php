@extends('admin.master')

@section('title')
    Manage Project Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Project</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Sub-Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $projects as $project )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->subtitle }}</td>
                                            <td>
                                                <img src="{{ asset($project->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </td>
                                            <td>{{ $project->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-project',['id'=> $project->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-project',['id'=>$project->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
