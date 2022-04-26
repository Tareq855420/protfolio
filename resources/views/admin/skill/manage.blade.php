@extends('admin.master')

@section('title')
    Manage Skill Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Skill</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Skill Title</th>
                                        <th>Skill Range</th>
                                        <th>Last Week Work</th>
                                        <th>Last Month Work</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $skills as $skill)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $skill->title }}</td>
                                            <td>{{ $skill->range }}</td>
                                            <td>{{ $skill->lastWork }}</td>
                                            <td>{{ $skill->lastMonth }}</td>
                                            <td>{{ $skill->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-skill',['id'=> $skill->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-skill',['id'=>$skill->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
