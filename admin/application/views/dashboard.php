<style>
  .ui-datepicker-calendar {
    display: none;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Main Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color:#000;" href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a style="color:#8C2D25;" href="<?php echo base_url() . $menuLink; ?>"><?php echo $menuName; ?></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= ($datapending['success']==true) ? count($datapending['data']) : '' ?></h3>
                <p>Peminjaman (<strong>Pending</strong>)</p>
              </div>
              <div class="icon">
                <i class="ion ion-filing"></i>
              </div>
              <a href="<?php echo base_url('peminjaman');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="card">
          <div class="card-body">
          <h4>Cetak Laporan Peminjaman Bulanan :</h4>
          <form action="<?= base_url("dashboard/cetakData") ?>" method="POST">
            <div class="row">
              <div class="col-md-8"> 
                <input name="startDate" id="startDate" class="date-picker form-control" placeholder="Masukkan Bulan & Tahun Laporan" required/>
              </div>
              <div class="col-md-4">
                <button type="submit" style="color: white;cursor: pointer;" class="btn btn-success  text-right"><i class="fas fa-print"></i> Export</button>&nbsp;
              </div>
            </div>
          </form>
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
          <script type="text/javascript">
              document.addEventListener('DOMContentLoaded', function() {
                  var calendarEl = document.getElementById('calendar');
                  var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,dayGridWeek,timeGridDay'
                    },
                    eventClick:  function(arg) {
                        $('#modalBody > #title').text(arg.event.title);
                        $('#modalStart').text(arg.event.start);
                        $('#modalEnd').text(arg.event.end);
                        $('#calendarModal').modal();
                    },
                    events: <?= $res_events ?>
                  });
                  calendar.render();
                });
          </script>
            <div id="calendar"></div>
            <div id="calendarModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Event Details</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div id="modalBody" class="modal-body">
                        <h4 id="title" class="modal-title"></h4> 
                        Jadwal Waktu Mulai & Waktu Selesai :
                        <div id="modalStart" style="margin-top:5px;"></div>
                        <div id="modalEnd" style="margin-top:5px;"></div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  $(function() {
      $('.date-picker').datepicker( {
          changeMonth: true,
          changeYear: true,
          showButtonPanel: true,
          dateFormat: 'MM yy',
          onClose: function(dateText, inst) { 
              $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
          }
      });
  });
</script>