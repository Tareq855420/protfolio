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
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Website</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $contacts as $contact )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $contact->address }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->number }}</td>
                                            <td>{{ $contact->site }}</td>
                                            <td>
                                                <img src="{{ asset($contact->image) }}" alt="" style="height: 100px; width: 100px;">
                                            </td>
                                            <td>{{ $contact->status == 1 ? "Published" : "Unpublished" }}</td>
                                            <td>
                                                <a href="{{ route('edit-contact',['id'=> $contact->id]) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-contact',['id'=>$contact->id]) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
