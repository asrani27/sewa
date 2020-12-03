@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-photo'></i>
            <span>Kontak</span>
        </h1>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Kontak kami</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                <form action="/data/kontak/edit/{{$data->id}}" accept-charset="UTF-8" enctype="multipart/form-data" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        @csrf
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Nama</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='Gedung Raya Serba Guna' readonly>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Alamat</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->alamat}}' name="alamat" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Telp</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->telp}}' name="telp" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Akun Facebook</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->facebook}}' name="facebook" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Akun Twitter</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->twitter}}' name="twitter" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Akun Instagram</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->instagram}}' name="instagram" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Akun Youtube</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->youtube}}' name="youtube" type='text'>
                            </div>
                        </div>
                        <div class='form-actions form-actions-padding-sm'>
                            <div class='row'>
                                <div class='col-md-10 col-md-offset-2'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='fa fa-floppy-o'></i>
                                        Update
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