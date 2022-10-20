{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <h4>Calendar</h4>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Event</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Calendar</a></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-intro-title">Calendar</h4>
                <div class="">
                    <div id="external-events" class="my-3">
                        <p> Silahkan masukan Informasi Event Yang akan dilaksanakan agar semua Orang Dapat melihat dan mengikuti Event</p>
                        <p>kategori Event : </p>
                        <div class="external-event" data-class="bg-info"><i class="fa fa-move"></i>Kalla Group</div>
                        <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>Personal Event</div>
                        <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Ekternal Event</div>
                        <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Hari Nasional</div>
                    </div>
                    <!-- checkbox -->
                      <a href="javascript:void()" data-toggle="modal" data-target="#add" class="btn btn-primary btn-rounded btn-event  w-100">
                        <span class="btn-icon-left text-primary"><i class="flaticon-381-calendar-6"></i></span> Create New
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9">
      <div class="card">
          <div class="card-body">
              <div id="calendar" class="app-fullcalendar"></div>
          </div>
      </div>      
  </div>

  <div class="col-xl-12">
    <div class="row">
      <div class="col-xl-12">	
        <div class="card appointment-schedule">
          <div class="card-body">
            <div class="row">
              @foreach ($events as $event)  
              <div class="col-xl-6 col-xxl-12  col-md-6 dz-scroll" id="appointment-schedule">
                <div class="d-flex pb-3 border-bottom mb-3 align-items-end">
                  <div class="mr-auto">
                    <p class="text-black font-w600 mb-2">{{ $event->title }}</p>
                    <ul>
                      <li><i class="las la-user-tie"></i>{{ $event->organizer }}</li>
                      <li><i class="las la-calendar-alt"></i>{{ $event->start }}</li>
                      <li><i class="las la-hourglass-end"></i></i>{{ $event->end }}</li>
                      <li><i class="las la-map-marked-alt"></i>{{ $event->tempat }}</li>
                    </ul>
                  </div>
                  <button class="text-success mr-3 mb-2 border-0 bg-transparent" data-toggle="modal" data-target="#view" class="d-inline"><i class="las la-search-plus scale5"></i></button>
                  <a href="{{ url('/ecom-product-detail/edit/'. $event->id ) }}" class="text-success mr-3 mb-2 border-0 bg-transparent" class="d-inline"><i class="las la-check-circle scale5"></i></a>
                  <form action="{{ url('/table-datatable-basic', $event->id ) }}" method="POST" class="d-inline" onsubmit="return confirm('Apa Kamu Yakin?')">
                    @csrf
                    @method('delete')
                    <button class="text-danger mb-2 border-0 bg-transparent"><i class="las la-times-circle scale5"></i></button>
                  </form>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add">
          <div class="modal-dialog modal-lg modal-dialog-scrollable">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title"><strong>Tambahkan Event</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form action="{!! url('/event'); !!}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-label">Keterangan Kegiatan</div>
                                <input name="title" class="form-control" id="title" cols="30"
                                    rows="2"></input>
                            </div>
                            <div class="form-group">
                              <div class="form-label">Organizer</div>
                              <input name="organizer" class="form-control" id="organizer" cols="30"
                                  rows="2"></input>
                          </div>
                            <div class="form-group mt-4">
                                <div class="form-label">Tgl Mulai</div>
                                <input type="datetime-local" class="form-control" name="start" id="start">
                            </div>
                            <div class="form-group mt-4">
                                <div class="form-label">Tgl Selesai</div>
                                <input type="datetime-local" class="form-control" name="end" id="end">
                            </div>
                            <div class="form-group mt-4">
                              <div class="form-label">Tempat</div>
                              <input type="text"  class="form-control" name="tempat" id="tempat">
                          </div>
                            <div class="form-group mt-4">
                              <div class="form-label">Upload Foto / Browsur Kegiatan</div>
                              <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" id="image" name="image" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                              </div>       
                          </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light save-category"><span
                                  class="btn-icon-left text-success"><i class="fa fa-plus color-success"></i>
                              </span>Simpan</button>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
    integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var SITEURL = "{{ url('/table-datatable-basic') }}";
        var calendar = new FullCalendar.Calendar(calendarEl, {
          navLinks: true,   
          editable: true,
          selectable: true,
          selectHelper: true,
          String, default: 'default',

          headerToolbar: {
              center: 'dayGridMonth,dayGridWeek', // buttons for switching between views
              // end: 'today prev,next,prevYear,nextYear',
            },
            // initialView: 'dayGridMonth',
            events: [ 
              <?php 

                  //melakukan koneksi ke database
                  $koneksi    = mysqli_connect('localhost', 'root', '', 'salesproject');
                  //mengambil data dari tabel jadwal
                  $data       = mysqli_query($koneksi,'select * from events');
                  //melakukan looping
                  while($d = mysqli_fetch_array($data)){     
              ?>
              {
                  title: '<?php echo $d['title']; ?>', //menampilkan title dari tabel
                  start: '<?php echo $d['start']; ?>', //menampilkan tgl mulai dari tabel
                  end: '<?php echo $d['end']; ?>' //menampilkan tgl selesai dari tabel
              },
              <?php } ?>
              
            ],    
            selectOverlap: function (event) {
                return event.rendering === 'background';
            }
        });
        

        calendar.render();
    });
    
</script>



			
@endsection