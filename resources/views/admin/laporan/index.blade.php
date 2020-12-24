@extends('layouts.app')
@push('css')
<link href="/admin/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="all" />
@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-money'></i>
            <span>Laporan Keuangan</span>
        </h1>
        
        {{-- <div class='pull-right'>
            <div class='btn-group'>
                <a href="/data/harga/tambah" class="btn btn-primary hidden-xs" href="#">Tambah</a>
            </div>
        </div> --}}
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Laporan Keuangan Gedung Raya 1</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    <form action="/laporan/transaksi/gd1/tanggal" target="_blank" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="get">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="inputText1">Pertanggal Mulai</label>
                            <div class="col-md-2">
                                <div class="datepicker-input input-group" id="datepicker">
                                    <input class="form-control" data-format="DD-MM-YYYY" placeholder="Select datepicker" type="text" name="mulai" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <label class="col-md-1 control-label" for="inputText1">Sampai</label>
                            <div class="col-md-2">
                                <div class="datepicker-input input-group" id="datepicker">
                                    <input class="form-control" data-format="DD-MM-YYYY" placeholder="Select datepicker" type="text" name="sampai" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-info">Tampilkan</button>
                            </div>
                        </div>
                        
                    </form>
                    <form action="/laporan/transaksi/gd1/bulan" target="_blank" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="get">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="inputPassword4">Perbulan</label>
                            <div class="col-md-2">
                                <select name="bulan" class="form-control" required>
                                    <option value="" selected>-Pilih-</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="tahun" class="form-control" required>
                                    <option value="" selected>-Pilih-</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-info">Tampilkan</button>
                            </div>
                        </div>
                    </form>
                    <form action="/laporan/transaksi/gd1/tahun" target="_blank" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="get">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="inputPassword4">Pertahun</label>
                            <div class="col-md-2">
                                <select name="tahun" class="form-control">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-info">Tampilkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <br/>
    
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Laporan Keuangan Gedung Raya 2</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    
                    <form action="/laporan/transaksi/gd2/tanggal" target="_blank" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="get">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="inputText1">Pertanggal Mulai</label>
                            <div class="col-md-2">
                                <div class="datepicker-input input-group" id="datepicker">
                                    <input class="form-control" data-format="DD-MM-YYYY" placeholder="Select datepicker" type="text" name="mulai" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <label class="col-md-1 control-label" for="inputText1">Sampai</label>
                            <div class="col-md-2">
                                <div class="datepicker-input input-group" id="datepicker">
                                    <input class="form-control" data-format="DD-MM-YYYY" placeholder="Select datepicker" type="text" name="sampai" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-info">Tampilkan</button>
                            </div>
                        </div>
                        
                    </form>
                    <form action="/laporan/transaksi/gd2/bulan" target="_blank" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="get">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="inputPassword4">Perbulan</label>
                            <div class="col-md-2">
                                <select name="bulan" class="form-control" required>
                                    <option value="" selected>-Pilih-</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="tahun" class="form-control" required>
                                    <option value="" selected>-Pilih-</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-info">Tampilkan</button>
                            </div>
                        </div>
                    </form>
                    <form action="/laporan/transaksi/gd2/tahun" target="_blank" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="get">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="inputPassword4">Pertahun</label>
                            <div class="col-md-2">
                                <select name="tahun" class="form-control">
                                    <option value="" selected>-Pilih-</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-info">Tampilkan</button>
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
<script src="/admin/assets/javascripts/plugins/common/moment.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>
@endpush