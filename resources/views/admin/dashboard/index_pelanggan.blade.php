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
       Selamat Datang <b>{{Auth::user()->name}}</b>, Di Bawah Ini adalah Jadwal Gedung, Setiap Tanggal Yang Berwarna, berarti Telah Di Pesan 
        <i class='fa fa-cog'></i>
    </div>
    
    <div class='row'>
        <div class='col-sm-6'>
            <div class='row'>
                <div class='col-sm-12 text-center'>
                    <form action="#" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <a class="btn btn-primary pesan-gedung1" data-id="{{Auth::user()->id}}">Pesan Gedung Raya 1</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='row'>
                <div class='col-sm-12 text-center'>
                    <form action="#" accept-charset="UTF-8" class="form form-horizontal" style="margin-bottom: 0;" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <a class="btn btn-primary" data-toggle='modal' href='#modal-example3'>Pesan Gedung Raya 2</a>
                            </div>
                        </div>
                    </form>
                </div>
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
<div class='modal fade' id='modal-example2' tabindex='-1'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
                <h4 class='modal-title' id='myModalLabel'>Pemesanan Gedung Raya 1</h4>
            </div>
            <form action="/pesan/gedungraya1" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" method="post">
                @csrf
            <div class='modal-body'>
                    {{-- <div class='form-group'>
                        <label for='inputText1'>select option</label>
                        <select name="select_id" id="select_id" class="form-control">
                            @foreach ($user as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class='form-group'>
                        <label for='inputText1'>Nama Pemesan</label>
                        <input class='form-control' id='inputText1' placeholder='Nama Pemesan' name="nama" type='text' required>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>NIK (Boleh Kosong)</label>
                        <input class='form-control' id='inputText1' placeholder='NIK' name="nik" type='text'>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>Telp</label>
                        <input class='form-control' id='inputText1' placeholder='087715665555' name="telp" type='text' required>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>Tanggal Acara</label>
                        <input class='form-control' id='inputText1' type='date' name="tanggal" required>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>Nama Acara</label>
                        <input class='form-control' id='inputText1' type='text' name="nama_acara" required>
                    </div>
            </div>
            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal' type='button'>Keluar</button>
                <button class='btn btn-primary' type='submit'>Pesan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class='modal fade' id='modal-example3' tabindex='-1'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
                <h4 class='modal-title' id='myModalLabel'>Pemesanan Gedung Raya 2</h4>
            </div>
            <form action="/pesan/gedungraya2" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" method="post">
                @csrf
            <div class='modal-body'>
                    <div class='form-group'>
                        <label for='inputText1'>Nama Pemesan</label>
                        <input class='form-control' id='inputText1' placeholder='Nama Pemesan' name="nama" type='text' required>
                    </div><div class='form-group'>
                        <label for='inputText1'>NIK (Boleh Kosong)</label>
                        <input class='form-control' id='inputText1' placeholder='NIK' name="nik" type='text'>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>Telp</label>
                        <input class='form-control' id='inputText1' placeholder='087715665555' name="telp" type='text' required>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>Tanggal Acara</label>
                        <input class='form-control' id='inputText1' type='date' name="tanggal" required>
                    </div>
                    <div class='form-group'>
                        <label for='inputText1'>Nama Acara</label>
                        <input class='form-control' id='inputText1' type='text' name="nama_acara" required>
                    </div>
            </div>
            <div class='modal-footer'>
                <button class='btn btn-default' data-dismiss='modal' type='button'>Keluar</button>
                <button class='btn btn-primary' type='submit'>Pesan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/admin/assets/javascripts/plugins/common/moment.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="/admin/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script>
$(".pesan-gedung1").click(function() {
    //Pertama Dapatkan ID
    var userid = $(this).data('id');
    //Kedua Remove Select Option
    $("#select_id option").remove();

    //Ketiga Get Select option
    axios.get('/user/json')
    .then(function (response) {
        resp = response.data;
        $.each(resp, function(key, value){
            $('#select_id').append('<option value="'+value.id+'" '+(value.id === userid ? 'selected' : '')+'>'+value.name+'</option>')
        })
    })
    .catch(function (error) {
        console.log(error);
    });

    $('#modal-example2').modal('show');
});
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

        var gr1 = {!!json_encode($jadwalGedung1)!!}
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
            events: gr1
        });

        var gr2 = {!!json_encode($jadwalGedung2)!!}
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
            events: gr2 
        });
    }).call(this);
</script>
@endpush