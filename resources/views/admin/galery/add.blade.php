@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-photo'></i>
            <span>Tambah Foto</span>
        </h1>
        
        <div class='pull-right'>
            <div class='btn-group'>
                <a href="/data/galery" class="btn btn-danger hidden-xs" href="#">Kembali</a>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Form Galery</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    <form action="/data/galery/tambah" accept-charset="UTF-8" enctype="multipart/form-data" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        @csrf
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Gambar</label>
                            <div class='col-md-5'>
                                <input class='form-control' type='file' name="file" multiple required>
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