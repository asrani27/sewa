@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-photo'></i>
            <span>Tambah SlideShow</span>
        </h1>
        
        <div class='pull-right'>
            <div class='btn-group'>
                <a href="/data/slideshow" class="btn btn-danger hidden-xs" href="#">Kembali</a>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Form SlideShow</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    <form action="/data/slideshow/tambah" accept-charset="UTF-8" enctype="multipart/form-data" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        @csrf
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Judul</label>
                            <div class='col-md-5'>
                                <input class='form-control' placeholder='Judul' name="judul" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Deskripsi</label>
                            <div class='col-md-5'>
                                <textarea class='form-control' name="deskripsi" rows='3'></textarea>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>File Gambar</label>
                            <div class='col-md-5'>
                                <input class='form-control' type='file' name="file">
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