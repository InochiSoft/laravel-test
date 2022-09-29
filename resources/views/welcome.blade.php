@extends('layouts.front')

@section('container')

    <div class="modal fade dialog-wizard"
         data-keyboard="false"
         data-backdrop="static">

        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-gradient-white">
                <div class="modal-header">
                    HUNT BAZAAR
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
                        <div class="col-12 text-center mb-2">
                            <input type="hidden" name="expired-time" id="expired-time" value=" {{ $expired_registration }} ">
                            Remaining Time:
                        </div>
                        <div class="col-12 text-center">
                            <input type="hidden" name="expired-time" id="expired-time" value=" {{ $expired_registration }} ">
                            <div class="d-inline-block btn bg-pink" id="remain-days"></div>
                            <div class="d-inline-block btn bg-pink" id="remain-hours"></div>
                            <div class="d-inline-block btn bg-pink" id="remain-minutes"></div>
                            <div class="d-inline-block btn bg-pink" id="remain-seconds"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/login" class="btn btn-outline-dark">Login</a>
                </div>
            </div>
        </div>
    </div>

@endsection
