@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>            
            <i class="fa fa-university"></i>
            <span>Tambah Transaksi</span>
        </h1>
        
        <div class='pull-right'>
            <div class='btn-group'>
                <a href="/transaksi" class="btn btn-danger hidden-xs" href="#">Kembali</a>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Form Transaksi</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    <form action="/transaksi/add" accept-charset="UTF-8" enctype="multipart/form-data" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        @csrf
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Tanggal</label>
                            <div class='col-md-5'>
                                <input type="date" class='form-control' name="tanggal" required>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Nama Pemesan</label>
                            <div class='col-md-5'>
                                <input type="text" class='form-control' name="nama" required>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>NIK</label>
                            <div class='col-md-5'>
                                <input type="text" class='form-control' name="nik" placeholder="-">
                            </div>
                        </div>
                      
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Telp</label>
                            <div class='col-md-5'>
                                <input type="text" class='form-control' name="telp" required>
                            </div>
                        </div>
                        
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Gedung</label>
                            <div class='col-md-5'>
                                <select name="gedung" class="form-control" required>
                                    <option value="">-Pilih-</option>
                                    <option value="1">Gedung Raya 1</option>
                                    <option value="2">Gedung Raya 2</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Nama Acara</label>
                            <div class='col-md-5'>
                                <input type="text" class='form-control' name="nama_acara">
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>DP / Uang Muka</label>
                            <div class='col-md-5'>
                                <input type="text" class='form-control' name="dp">
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Pelunasan</label>
                            <div class='col-md-5'>
                                <input type="text" class='form-control' name="pelunasan">
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Status</label>
                            <div class='col-md-5'>
                                <select name="status" class="form-control" required>
                                    <option value="">-Pilih-</option>
                                    <option value="1">Disetujui</option>
                                    <option value="2">Di Batalkan</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-actions form-actions-padding-sm'>
                            <div class='row'>
                                <div class='col-md-10 col-md-offset-2'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='fa fa-floppy-o'></i>
                                        Save
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