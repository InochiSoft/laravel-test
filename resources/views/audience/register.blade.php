@extends('layouts.front')

@section('container')
    <div class="modal fade dialog-wizard"
         data-keyboard="false"
         data-backdrop="static">

        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content bg-gradient-white">
                <form action="/invitation/{{ $code }}" method="post">
                    @csrf
                    <div class="modal-header bg-gradient-light">
                        <h4 class="modal-title">Registration</h4>
                    </div>
                    <div class="modal-body">
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
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <input value="{{ $invitation->code }}" name="code" type="text" class="form-control" readonly />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-code"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input value="{{ $invitation->email }}" name="email" type="email" class="form-control" readonly />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name" required />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input name="birth_date" type="date" class="form-control" required />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <select name="gender" class="form-control" required>
                                        <option value="1">Pria</option>
                                        <option value="2">Wanita</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-circle"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            Designers
                                        </div>
                                    </div>
                                    <select name="designers[]" class="select2bs4 form-control"  multiple="multiple" required>
                                        @foreach($designers as $designer)
                                            <option value="{{ $designer->id }}">{{ $designer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="/" class="btn btn-outline-dark">Back to Home</a>
                        <button type="submit" class="btn btn-outline-success" value="">Sign Up</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
