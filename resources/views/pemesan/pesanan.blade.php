@extends('layouts.app')
@push('css')
<link href="/admin/assets/stylesheets/plugins/datatables/datatables.css" rel="stylesheet" type="text/css" media="all" />
@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-shopping-cart'></i>
            <span>Pesanan Saya</span>
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
                    <div class='title'>Pesanan Saya</div>
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
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Gedung</th>
                                    <th>Harga</th>
                                    <th>DP</th>
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
                                        <td>{{$item->nama}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                                        <td>Gedung Raya {{$item->gedung}}</td>
                                        <td>@currency($item->harga)</td>
                                        <td>@currency(\App\Harga::find($item->gedung)->dp)</td>
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
                                            <a href="" class="btn btn-sm btn-success">Upload DP</a> | 
                                            <a href="" class="btn btn-sm btn-info">Upload Pelunasan</a>
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