@extends('layouts.dashboard')

@section('container')
    <div class="row">
        <div class="col-md-6 justify-content-center mx-auto">
            @if (session()->has('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <span>
                                {{ session('success') }}
                            </span>
                        </div>
                    </div>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <span>
                                {{ session('error') }}
                            </span>
                        </div>
                    </div>
                </div>
            @endif
            <form action="/dashboard/invitations" method="post">
                @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="code" class="col-form-label">Code</label>
                        <input value="{{ $code }}" type="text" class="form-control" id="code" name="code" required readonly />
                    </div>
                </div>
                {{--
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                </div>
                --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autofocus required />
                    </div>
                </div>
                <div class="col-md-12 text-center border-top pt-3">
                    <button class="btn btn-success bg-gradient-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Start Here -->
@endsection
