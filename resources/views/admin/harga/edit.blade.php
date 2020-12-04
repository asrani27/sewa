@extends('layouts.app')
@push('css')

<link href="/admin/assets/stylesheets/plugins/wysihtml/wysihtml.css" rel="stylesheet" type="text/css" media="all" />
@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-photo'></i>
            <span>Edit Harga</span>
        </h1>
        
        <div class='pull-right'>
            <div class='btn-group'>
            <a href="/data/harga" class="btn btn-danger hidden-xs" href="#">Kembali</a>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Form Harga</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    <div id='wysiwyg2-toolbar' style='display: none;'>
                    <form action="/data/harga/edit/{{$data->id}}" accept-charset="UTF-8" enctype="multipart/form-data" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        @csrf
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Nama Gedung</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->judul}}' name="judul" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>Harga Sewa</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->harga}}' name="harga" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputText1'>DP Wajib</label>
                            <div class='col-md-5'>
                                <input class='form-control' value='{{$data->dp}}' name="dp" type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-md-2 control-label' for='inputTextArea1'>Fasilitas</label>
                            <div class='col-md-5'>
                                <textarea class='form-control' id='wysiwyg2'  name='fasilitas' rows='3'>{{$data->fasilitas}}</textarea>
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
</div>
@endsection
@push('js')

<script src="/admin/assets/javascripts/plugins/wysihtml/wysihtml.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/wysihtml/wysihtml-toolbar.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/wysihtml/advanced.js" type="text/javascript"></script>
<script>
    var editor = new wysihtml.Editor("wysiwyg2", {
        toolbar:      "wysiwyg2-toolbar",
        parserRules:  wysihtmlParserRules
    });
</script>
@endpush