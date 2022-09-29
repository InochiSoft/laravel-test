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
            <form action="/dashboard/designers" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="slug" class="col-form-label">Code</label>
                            <input type="text" class="form-control" id="slug" name="slug" required />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required />
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
