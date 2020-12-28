@extends('layouts.app')
@push('css')
    <link href="/admin/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/admin/assets/stylesheets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/admin/assets/stylesheets/plugins/wysihtml/wysihtml.css" rel="stylesheet" type="text/css" media="all" />
@endpush
@section('content')
<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-tachometer'></i>
            <span>Dashboard</span>
        </h1>
    </div>
    <div class='alert alert-info alert-dismissable'>
        <a class='close' data-dismiss='alert' href='#'>&times;</a>
       Selamat Datang Admin,
        Silahkan Mengelola Website dari menu di samping
        <i class='fa fa-cog'></i>
    </div>
    <div class='row box box-transparent'>
        <div class='col-xs-4 col-sm-2'>
            <div class='box-quick-link green-background'>
                <a href='/data/tentang-kami'>
                    <div class='header'>
                        <div class='fa fa-star'></div>
                    </div>
                    <div class='content'>Tentang Kami</div>
                </a>
            </div>
        </div>
        <div class='col-xs-4 col-sm-2'>
            <div class='box-quick-link orange-background'>
                <a href='/data/galery'>
                    <div class='header'>
                        <div class='fa fa-magic'></div>
                    </div>
                    <div class='content'>Galery</div>
                </a>
            </div>
        </div>
        <div class='col-xs-4 col-sm-2'>
            <div class='box-quick-link purple-background'>
                <a href='/data/kontak'>
                    <div class='header'>
                        <div class='fa fa-eye'></div>
                    </div>
                    <div class='content'>Kontak</div>
                </a>
            </div>
        </div>
        <div class='col-xs-4 col-sm-2'>
            <div class='box-quick-link red-background'>
                <a href='/data/transaksi'>
                    <div class='header'>
                        <div class='fa fa-inbox'></div>
                    </div>
                    <div class='content'>Orders</div>
                </a>
            </div>
        </div>
        <div class='col-xs-4 col-sm-2'>
            <div class='box-quick-link muted-background'>
                <a href='/data/slideshow'>
                    <div class='header'>
                        <div class='fa fa-refresh'></div>
                    </div>
                    <div class='content'>Slide Show</div>
                </a>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-6'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='box box-bordered purple-border'>
                        <div class='box-header purple-background'>
                            <div class='title'>
                                <i class='fa fa-calendar'></i>
                                Jadwal Gedung Raya 1
                            </div>
                        </div>
                        <div class='box-content'>
                            <div class='full-calendar-demo'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='box box-bordered purple-border'>
                        <div class='box-header purple-background'>
                            <div class='title'>
                                <i class='fa fa-calendar'></i>
                                Jadwal Gedung Raya 2
                            </div>
                        </div>
                        <div class='box-content'>
                            <div class='full-calendar-demo2'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal Tambah --}}
<div class="modal fade" id="modal-default-gedung-raya1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pemesanan Gedung Raya 1</h4>
        </div>
        <form method="POST" action="/pesan/gedungraya1/admin">
            @csrf
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Pemesan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Telp Pemesan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="telp" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Pemesanan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="tanggal" id="tanggal_gd1" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Gedung</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="gedung" value="Gedung Raya 1" readonly>
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

{{-- Modal Tambah --}}
<div class="modal fade" id="modal-default-gedung-raya2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pemesanan Gedung Raya 2</h4>
        </div>
        <form method="POST" action="/pesan/gedungraya2/admin">
            @csrf
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Pemesan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Telp Pemesan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="telp" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Pemesanan</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="tanggal" id="tanggal_gd2" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Gedung</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="gedung" value="Gedung Raya 2" readonly>
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
    
<script src="/admin/assets/javascripts/plugins/common/moment.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script>
    (function() {
        var cal, calendarDate, d, m, y;

        this.setDraggableEvents = function() {
            return $("#events .external-event").each(function() {
                var eventObject;
                eventObject = {
                    title: $.trim($(this).text())
                };
                $(this).data("eventObject", eventObject);
                return $(this).draggable({
                    zIndex: 999,
                    revert: true,
                    revertDuration: 0
                });
            });
        };

        setDraggableEvents();

        calendarDate = new Date();

        d = calendarDate.getDate();

        m = calendarDate.getMonth();

        y = calendarDate.getFullYear();

        var jadwalGedung1 = {!!json_encode($jadwalGedung1)!!}
        cal = $(".full-calendar-demo").fullCalendar({
            header: {
                center: "title",
                left: "month,agendaWeek,agendaDay,listWeek",
                right: "prev,today,next"
            },
            buttonIcons: {
                prev: "fa-chevron-left",
                next: "fa-chevron-right"
            },
            buttonText: {
                today: "Today",
                agendaDay: "Day",
                agendaWeek: "Week",
                month: "Month",
                listWeek: "List"
            },
            droppable: true,
            editable: true,
            selectable: true,
            select: function(start, end, allDay) {
                // var tanggal = moment(start).format();
                // document.getElementById("tanggal_gd1").value = tanggal;
                // $('#modal-default-gedung-raya1').modal('show');
            },
            
            eventClick: function(calEvent, jsEvent, view) {
                return bootbox.dialog({
                    message: $("<form class='form'><label>Detail Acara</label></form><input id='new-event-title' class='form-control' type='text' value='" + calEvent.title + "' /> "),
                });
            },
            drop: function(date, allDay) {
                var copiedEventObject, eventClass, originalEventObject;
                originalEventObject = $(this).data("eventObject");
                originalEventObject.id = Math.floor(Math.random() * 99999);
                eventClass = $(this).attr('data-event-class');
                console.log(originalEventObject);
                copiedEventObject = $.extend({}, originalEventObject);
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if (eventClass) {
                    copiedEventObject["className"] = [eventClass];
                }
                $(".full-calendar-demo").fullCalendar("renderEvent", copiedEventObject, true);
                if ($("#calendar-remove-after-drop").is(":checked")) {
                    return $(this).remove();
                }
            },
            events: jadwalGedung1
        });

        var jadwalGedung2 = {!!json_encode($jadwalGedung2)!!}
        cal2 = $(".full-calendar-demo2").fullCalendar({
            header: {
                center: "title",
                left: "month,agendaWeek,agendaDay,listWeek",
                right: "prev,today,next"
            },
            buttonIcons: {
                prev: "fa-chevron-left",
                next: "fa-chevron-right"
            },
            buttonText: {
                today: "Today",
                agendaDay: "Day",
                agendaWeek: "Week",
                month: "Month",
                listWeek: "List"
            },
            droppable: true,
            editable: true,
            selectable: true,
            select: function(start, end, allDay) {
                // var tanggal = moment(start).format();
                // document.getElementById("tanggal_gd2").value = tanggal;
                // $('#modal-default-gedung-raya2').modal('show');
            },
            
            eventClick: function(calEvent, jsEvent, view) {
                return bootbox.dialog({
                    message: $("<form class='form'><label>Change event name</label></form><input id='new-event-title' class='form-control' type='text' value='" + calEvent.title + "' /> "),
                });
            },
            drop: function(date, allDay) {
                var copiedEventObject, eventClass, originalEventObject;
                originalEventObject = $(this).data("eventObject");
                originalEventObject.id = Math.floor(Math.random() * 99999);
                eventClass = $(this).attr('data-event-class');
                console.log(originalEventObject);
                copiedEventObject = $.extend({}, originalEventObject);
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if (eventClass) {
                    copiedEventObject["className"] = [eventClass];
                }
                $(".full-calendar-demo2").fullCalendar("renderEvent", copiedEventObject, true);
                if ($("#calendar-remove-after-drop").is(":checked")) {
                    return $(this).remove();
                }
            },
            events: jadwalGedung2 
        });
    }).call(this);
</script>
@endpush