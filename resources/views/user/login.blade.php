@extends('layouts.front')

@section('container')

    <div class="modal fade dialog-wizard"
         data-keyboard="false"
         data-backdrop="static">

        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content bg-gradient-white">
                <form action="/login" method="post">
                    <div class="modal-header bg-gradient-light">
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        {{--
                        @if (session()->has('success'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success alert-dismissible">
                                        <span>
                                            {{ session('success') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        --}}
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

                        <div class="input-group mb-3">
                            <input value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @csrf
                    </div>
                    <div class="modal-footer justify-content-center">
                        {{--
                        <div>
                            <a href="forgot">Lupa Kata Sandi?</a>
                            <br/>
                            <a href="register" class="text-center">Daftar Pengguna Baru</a>
                        </div>
                        --}}
                        <button type="submit" class="btn btn-outline-dark">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
