@extends('admin.master')

@section('title')
    Manage Education Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Education</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Education Duration</th>
                                        <th>Education Lavel</th>
                                        <th>Educational Institution</th>
                                        <th>Educational Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $educations as $education)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $education->dur }}</td>
                                            <td>{{ $education->lavel }}</td>
                                            <td>{{ $education->institute }}</td>
                                            <td>{{ $education->description }}</td>
                                            <td>{{ $education->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-education',['id'=> $education->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-education',['id'=>$education->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
