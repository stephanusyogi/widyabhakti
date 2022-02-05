<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Peminjaman WidyaBhakti</title>
    <link rel="icon" href="<?php echo base_url('/public/dist/img/logo.png') ?>">
    <!-- FullCalendar -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/fullcalendar/main.css">
    
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/public/dist/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('/public/dist/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>

    <!-- FullCalendar -->
    <script src="<?php echo base_url(); ?>/public/plugins/fullcalendar/main.js"></script>
</head>
<style>
    body{
        margin: 25px 100px 0px 100px;
        padding: 0;
        text-align: center;
    }
    .fc-day-grid-event > .fc-content {
        white-space: nowrap;
        overflow: hidden;
    }
</style>
<body>
    <h3>Rekap Peminjaman Gedung & Ruangan || WidyaBhakti Pastoral Center</h3>
    <h4><strong><?= $onlyDate ?></strong></h4>
    <hr>
    <?php 
    foreach($dataaccepted['data'] as $todo) {
    $peminjaman['start'] = $todo['jadwal']."T".$todo['waktu_mulai'];
    $peminjaman['end'] = $todo['jadwal']."T".$todo['waktu_selesai'];
    $peminjaman['title'] = $todo['nama_kegiatan'];

    $events[] = $peminjaman;
    } 
    $res_events = json_encode($events);
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialDate: '<?= $initialDate ?>',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: '',
                center: '',
                right: ''
            },
            events: <?= $res_events ?>
            });
            calendar.render();
        });
    </script>
    <div id="calendar"></div>
</body>
</html>
