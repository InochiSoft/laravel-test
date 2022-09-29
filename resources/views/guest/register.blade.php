@extends('layouts.front')

@section('container')
    <div class="modal fade dialog-wizard"
         data-keyboard="false"
         data-backdrop="static">

        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content bg-gradient-white">

                <form action="register" method="post">
                    <div class="modal-header bg-gradient-light">
                        <h4 class="modal-title">Daftar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Nama Lengkap" />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input name="email" type="email" class="form-control" placeholder="Email" />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input name="password" type="password" class="form-control" placeholder="Kata Sandi" />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input name="confirm" type="password" class="form-control" placeholder="Konfirmasi Kata Sandi" />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <div>
                            <a href="login" class="text-center">Sudah punya akun?</a>
                        </div>
                        <button type="submit" name="register" class="btn btn-outline-dark" value="">Daftar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
