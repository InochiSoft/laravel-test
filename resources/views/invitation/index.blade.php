@extends('layouts.dashboard')

@section('container')
    <div class="row">
        <div class="col-md-12 pb-3 mb-3 border-bottom">
            <a href="/dashboard/invitations/create" class="btn btn-success bg-gradient-success">
                <i class="fas fa-plus-circle"></i> Create New
            </a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered datatable" width="100%" >
                <thead>
                <tr>
                    <th width="30">#</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="30"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($invitations as $invitation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="/invitation/{{ $invitation->code }}" target="_blank">{{ $invitation->code }}</a></td>
                        <td>{{ $invitation->name }}</td>
                        <td>{{ $invitation->email }}</td>
                        <td>
                            <button data-attr="/dashboard/invitations/{{ $invitation->id }}" class="btn btn-sm btn-danger bg-gradient-danger btn-item-delete" data-toggle="modal" data-target="#dialog-delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Start Here -->
@endsection
