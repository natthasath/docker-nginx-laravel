


<div class="card">
    <div class="card-body">
        <div id='calendar'></div>
    </div>
</div>
<link href="{{ asset('fullcalendar/main.css') }}" rel='stylesheet' />
<script src="{{ asset('fullcalendar/main.js') }}"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next',
          center: 'title',
          right: ''//'dayGridMonth,dayGridWeek,dayGridDay'
        },
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        events: [
            {
                title: 'วันที่รับโครงการวิจัย',
                start: '2023-10-06',
                end: '2023-10-20'
            },
            {
                title: 'วันที่ประชุม',
                start: '2023-11-09'
            },
            {
                title: 'วันแจ้งผลทางอีเมล',
                start: '2023-11-14'
            },
            {
                title: 'วันที่ผู้วิจัยรับเอกสารรับรอง',
                start: '2023-11-23'
            },
            {
                title: 'วันสุดท้ายที่ผู้วิจัยส่งผลการแก้ไข(กรณีมีแก้ไข)',
                start: '2023-11-28'
            },
            {
                title: 'วันที่รับโครงการวิจัย',
                start: '2023-11-08',
                end: '2023-11-21'
            },
            {
                title: 'วันที่ประชุม',
                start: '2023-12-07'
            },
            {
                title: 'วันแจ้งผลทางอีเมล',
                start: '2023-12-13'
            },
            {
                title: 'วันที่ผู้วิจัยรับเอกสารรับรอง',
                start: '2023-12-22'
            }
        ]
      });

      calendar.render();
    });

  </script>
  <style>

    /* body {
      margin: 40px 10px;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    } */

    #calendar {
      max-width: 1100px;
      margin: 0 auto;
    }

  </style>
