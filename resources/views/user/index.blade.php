@extends('layouts.dashboard')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered datatable" width="100%" >
                <thead>
                <tr>
                    <th width="30">#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Start Here -->
@endsection
