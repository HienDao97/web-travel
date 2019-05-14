@extends('index')
@section('title', 'Dang ki lich lam viec')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap">
                    <br>
                    <h1>Đăng ký làm Cộng tác viên</h1>
                    <div id="calendar" style="background: white; padding: 10px" class="fc fc-ltr fc-unthemed"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <div aria-hidden="false" aria-labelledby="mySmallModalLabel" role="dialog" class="modal fade in" id="detailModal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="finishModalLabel" class="modal-title">Cập nhật dữ liệu</h4>
                    <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                </div>
                <div id='modal_content' class="modal-body">
                    <button class="btn btn-success">Xác nhận</button>
                    <button class="btn btn-danger">Hủy</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <link href='{{ asset('du_lich/fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('du_lich/fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />

    <script src='{{ asset('du_lich/fullcalendar/packages/core/main.js') }}'></script>
    <script src='{{ asset('du_lich/fullcalendar/packages/daygrid/main.js') }}'></script>
    <script src='{{ asset('du_lich/fullcalendar/packages/timeGrid/main.js') }}'></script>
    <link href='{{ asset('du_lich/fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('du_lich/fullcalendar/packages/core/main.js') }}'></script>
    <script src='{{ asset('du_lich/fullcalendar/packages/interaction/main.js') }}'></script>
    <script src='{{ asset('du_lich/fullcalendar/packages/daygrid/main.js') }}'></script>
    <script src='{{ asset('du_lich/fullcalendar/packages/timegrid/main.js') }}'></script>
    <script src='{{ asset('du_lich/fullcalendar/packages/list/main.js') }}'></script>
    <script>
        var dialog = (function(){
            return {
                show : function(title, data){
                    $('#finishModalLabel').html(title);
                    $('#modal_content').html(data);
                    $('#btnAction').attr('onclick', 'return formHelper.onSubmit("frmDialogCreate")');
                    $('#close').attr('onclick', 'return dialog.close()');
                    $('#detailModal').modal('show');
                },
                close: function () {
                    $('#detailModal').modal('hide');
                    $('#detailModal').css('display', 'none').attr('aria-hidden', 'true');
                    $('#finishModalLabel').html('');
                    $('#modal_content').html('');
                },
            }
        })();
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                timeZone: 'UTC',
                defaultView: 'dayGridMonth',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridDay,dayGridMonth,dayGridYWeek,timeGridWeek',
                    color: '#3788d8'
                },
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                eventLimit: true, // allow "more" link when too many events

                dateClick: function(date, jsEvent, view) {
                    console.log(date);
                    var btn = '<div class="confirm-button"><button class="btn btn-success">Xác nhận</button><button class="btn btn-danger" id="close">Hủy</button><div>';
                    dialog.show("Đăng kí lịch ngày " + date.dateStr , btn);

                    // change the day's background color just for fun
                    $(this).css('background-color', 'red');
                    //console.log('dateClick', calendar.formatIso(arg.date));
                },
                eventRender: function(event, element, view)
                {
                    $(element).addClass('clickThrough');
                    console.log(event);
                },
                // eventClick: function(info) {
                //     alert('Event: ' + info.event.title);
                // },
                // dayClick: function(date, jsEvent, view) {
                //     alert("Day Clicked");
                //     alert('Clicked on: ' + date.format());

                //     alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                //     alert('Current view: ' + view.name);

                //     // change the day's background color just for fun
                //     $(this).css('background-color', 'red');

                // },
                events: 'https://fullcalendar.io/demo-events.json'
            });

            calendar.render();
        });

    </script>
@endsection
