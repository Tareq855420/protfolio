@extends('admin.master')

@section('title')
    Manage Counter Section
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Counter</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Experience</th>
                                        <th>Project</th>
                                        <th>Costumers</th>
                                        <th>Coffee</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $counters as $counter )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $counter->experience }}</td>
                                            <td>{{ $counter->project }}</td>
                                            <td>{{ $counter->costumer }}</td>
                                            <td>{{ $counter->coffee }}</td>
                                            <td>{{ $counter->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-counter',['id'=> $counter->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-counter',['id'=>$counter->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
