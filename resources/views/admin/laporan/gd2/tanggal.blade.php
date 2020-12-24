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
        
        <div class='pull-right'>
            <div class='btn-group'>
                <a href="/laporan/transaksi" class="btn btn-inverse hidden-xs" href="#">Kembali</a>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-header blue-background'>
                    <div class='title'>Laporan Keuangan Gedung Raya 2, Tanggal : {{\Carbon\Carbon::parse($mulai)->format('d M Y')}} s/d {{\Carbon\Carbon::parse($sampai)->format('d M Y')}}</div>
                    <div class='actions'>
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                    </div>
                </div>
                <div class='box-content'>
                    <div class='responsive-table'>
                        <div class='scrollable-area'>
                            <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pemesan</th>
                                    <th>Telp</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>DP</th>
                                    <th>Pelunasan</th>
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
                                            @if ($item->foto_dp != null)
                                                <a href="/storage/{{$item->foto_dp}}" target="_blank"><i class='fa fa-eye'></i></a> 
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->foto_sisa != null)
                                            <a href="/storage/{{$item->foto_sisa}}" target="_blank"><i class='fa fa-eye'></i></a> 
                                            @else
                                                -
                                            @endif
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td>@currency($data->sum('harga'))</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <br/>
    
</div>
@endsection
@push('js')

@endpush