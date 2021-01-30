@extends('layouts.app')
@push('css')
<link href="/admin/assets/stylesheets/plugins/datatables/datatables.css" rel="stylesheet" type="text/css" media="all" />
@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class="fa fa-university"></i>
            <span>Transaksi Sewa Gedung</span>
        </h1>
        
        <div class='pull-right'>
            <div class='btn-group'>
                <a href="/transaksi/add" class="btn btn-primary hidden-xs" href="#">Tambah</a>
            </div>
        </div>
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
                                    <th>DP</th>
                                    <th>Pelunasan</th>
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

                                            <a class='btn btn-info btn-xs isi-dp' data-id="{{$item->id}}" href='#'>
                                                <i class='fa fa-plus'></i>
                                            </a> 
                                            @if($item->dp != null)
                                                @currency($item->dp)
                                            @endif

                                            @if ($item->foto_dp != null)
                                                <a href="/storage/{{$item->foto_dp}}" target="_blank"><i class='fa fa-eye'></i></a> 
                                            @else
                                            
                                            @endif
                                        </td>
                                        <td>
                                            <a class='btn btn-info btn-xs isi-lunas' data-id="{{$item->id}}" href='#'>
                                                <i class='fa fa-plus'></i>
                                            </a> 
                                            @if($item->lunas != null)
                                                @currency($item->lunas)
                                            @endif

                                            @if ($item->foto_sisa != null)
                                            <a href="/storage/{{$item->foto_sisa}}" target="_blank"><i class='fa fa-eye'></i></a> 
                                            @else
                                            @endif
                                        </td>
                                        <td>
                                            
                                            <div class='text-right'>
                                            @if($item->status == 0)
                                                <a class='btn btn-success btn-xs' href='/transaksi/setujui/{{$item->id}}' onclick="return confirm('Yakin Ingin menyetujui pesanan ini?');">
                                                    Setujui
                                                </a> - 
                                                <a class='btn btn-danger btn-xs' href='/transaksi/tolak/{{$item->id}}' onclick="return confirm('Yakin Ingin Tolak Pesanan ini?');">
                                                    Tolak
                                                </a>
                                            @elseif($item->status == 1)
                                                <a class='btn btn-danger btn-xs' href='/transaksi/tolak/{{$item->id}}' onclick="return confirm('Yakin ingin membatalkan pesanan Ini?');">
                                                    Tolak
                                                </a>
                                            @else
                                                <a class='btn btn-success btn-xs' href='/transaksi/proses/{{$item->id}}' onclick="return confirm('Yakin ingin memproses pesanan Ini?');">
                                                     Di Proses
                                                </a>
                                            @endif
                                                <a class='btn btn-danger btn-xs' href='/transaksi/hapus/{{$item->id}}' onclick="return confirm('Yakin ingin menghapus pesanan Ini?');">
                                                    <i class='fa fa-trash'></i>
                                                </a>

                                            </div>
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
{{-- Modal Update --}}
<div class="modal fade" id="modal-default-dp">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Isi DP</h4>
        </div>
        <form method="POST" action="/dp/update" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Jumlah DP</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="dp" required onkeypress="return hanyaAngka(event)">
                <input type="hidden" class="form-control" name="id_transaksi" id="id_transaksi">
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

{{-- Modal Update --}}
<div class="modal fade" id="modal-default-lunas">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Isi Pelunasan</h4>
        </div>
        <form method="POST" action="/lunas/update" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Jumlah Pelunasan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="dp" required onkeypress="return hanyaAngka(event)">
                <input type="hidden" class="form-control" name="id_transaksi" id="id_transaksi_lunas">
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
@push('js')
<script src="/admin/assets/javascripts/jquery/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script>
    $(document).on('click', '.isi-dp', function() {
        id_transaksi = $(this).data('id');
        document.getElementById("id_transaksi").value = id_transaksi;
        $('#modal-default-dp').modal('show');
    });
    $(document).on('click', '.isi-lunas', function() {
        id_transaksi = $(this).data('id');
        document.getElementById("id_transaksi_lunas").value = id_transaksi;
        $('#modal-default-lunas').modal('show');
    });
</script>
<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>
@endpush