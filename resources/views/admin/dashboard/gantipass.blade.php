@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-key'></i>
            <span>Ganti Password</span>
        </h1>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Ganti Password</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                <form action="/data/ganti-password" accept-charset="UTF-8" enctype="multipart/form-data" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        @csrf
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Username</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->username}}' readonly>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Password</label>
                            <div class='col-md-5'>
                                <input class='form-control' name="password" type="password" autocomplete="off" required>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Masukkan Password Lagi</label>
                            <div class='col-md-5'>
                                <input class='form-control' name="password2" type="password" autocomplete="off" required>
                            </div>
                        </div>
                        <div class='form-actions form-actions-padding-sm'>
                            <div class='row'>
                                <div class='col-md-10 col-md-offset-2'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='fa fa-floppy-o'></i>
                                        Update Password
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
@push('js')

@endpush