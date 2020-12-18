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
                                        <td class="text-center">
                                            @if ($item->foto_dp != null)
                                            <a href="/storage/{{$item->foto_dp}}" target="_blank"><img src="/storage/{{$item->foto_dp}}" width="100" height="100"></a> <br/>
                                            @endif
                                            <a href="#" class="btn btn-sm btn-success upload-dp" data-id="{{$item->id}}">Upload DP</a>
                                        </td>
                                        <td class="text-center">
                                            @if ($item->foto_sisa != null)
                                            <a href="/storage/{{$item->foto_sisa}}" target="_blank"><img src="/storage/{{$item->foto_sisa}}" width="100" height="100"></a> <br/>
                                            @endif
                                            <a href="#" class="btn btn-sm btn-info upload-lunas" data-id="{{$item->id}}">Upload Pelunasan</a>

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

<div class='modal fade' id='modal-default' tabindex='-1'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
                <h4 class='modal-title' id='myModalLabel'>Upload Bukti Transfer DP</h4>
            </div>
            <form action="/pesanan-saya/upload-dp" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" method="post" enctype="multipart/form-data">
                @csrf
            <div class='modal-body'>
                    <div class='form-group'>
                        <label for='inputText1'>File Gambar</label>
                        <input class='form-control' id='inputText1' name="file" type='file' required>
                        <input class='form-control' name="idpesanan" id="idpesanan" type='hidden' readonly>
                    </div>
            </div>
            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal' type='button'>Keluar</button>
                <button class='btn btn-primary' type='submit'>Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class='modal fade' id='modal-default2' tabindex='-1'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
                <h4 class='modal-title' id='myModalLabel'>Upload Bukti Pelunasan</h4>
            </div>
            <form action="/pesanan-saya/upload-pelunasan" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" method="post" enctype="multipart/form-data">
                @csrf
            <div class='modal-body'>
                    <div class='form-group'>
                        <label for='inputText1'>File Gambar</label>
                        <input class='form-control' id='inputText1' name="file" type='file' required>
                        <input class='form-control' name="idpelunasan" id="idpelunasan" type='hidden' readonly>
                    </div>
            </div>
            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal' type='button'>Keluar</button>
                <button class='btn btn-primary' type='submit'>Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="/admin/assets/javascripts/jquery/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script>
    $(document).on('click', '.upload-dp', function() {
        idpesanan = $(this).data('id');
        document.getElementById("idpesanan").value = idpesanan;
        $('#modal-default').modal('show');
    });
    
    $(document).on('click', '.upload-lunas', function() {
        idpelunasan = $(this).data('id');
        document.getElementById("idpelunasan").value = idpelunasan;
        $('#modal-default2').modal('show');
    });

</script>
@endpush