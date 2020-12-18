@extends('layouts.app')
@push('css')
<link href="/admin/assets/stylesheets/plugins/datatables/datatables.css" rel="stylesheet" type="text/css" media="all" />
@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-money'></i>
            <span>Transaksi Sewa Gedung</span>
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
                    <div class='title'>Daftar Transaksi Sewa Gedung</div>
                    <div class='actions'>
                        <a class="btn box-remove btn-xs btn-link" href="#"><i class='fa fa-times'></i>
                        </a>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content box-no-padding'>
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
                            <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pemesan</th>
                                    <th>Telp</th>
                                    <th>Gedung</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no =1;
                                    @endphp
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->telp}}</td>
                                        <td>Gedung Raya {{$item->gedung}}</td>
                                        <td>@currency($item->harga)</td>
                                        <td>
                                            @if($item->status == 0)
                                            Menunggu Konfirmasi
                                            @elseif($item->status == 1)
                                            Di setujui
                                            @else
                                            Di Tolak
                                            @endif
                                        </td>
                                        <td>
                                            
                                            @if($item->status == 0)
                                            <div class='text-right'>
                                                <a class='btn btn-success btn-xs' href='/data/transaksi/setujui/{{$item->id}}'>
                                                    Setujui
                                                </a>
                                                <a class='btn btn-danger btn-xs' href='/data/slideshow/tolak/{{$item->id}}'>
                                                    Tolak
                                                </a>
                                            </div>
                                            @elseif($item->status == 1)
                                            <div class='text-right'>
                                                <a class='btn btn-danger btn-xs' href='/data/slideshow/tolak/{{$item->id}}'>
                                                    Batalkan
                                                </a>
                                            </div>
                                            @else
                                            
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
@push('js')
<script src="/admin/assets/javascripts/jquery/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/datatables/datatables.min.js" type="text/javascript"></script>
@endpush