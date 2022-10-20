{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-black font-w600">Dashboard</h2>
                {{-- <p class="mb-0">Selamat Pagi Developers Llen</p> --}}
            </div>

        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-34 text-black font-w600">{{ $jumlah_customers }}</h2>
                                <span>Customers</span>
                            </div>
                            <img src="{{ asset('images/people2.svg') }}" width="60" height="60" alt="">
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </div>
                    </div>
                    <div class="progress  rounded-0" style="height:4px;">
                        <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;"
                            role="progressbar">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-34 text-black font-w600">{{ $jumlah_sales }}</h2>
                                <span>Salesman</span>
                            </div>
                            <img src="{{ asset('images/salesman.svg') }}" width="60" height="60" alt="">
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </div>
                    </div>
                    <div class="progress  rounded-0" style="height:4px;">
                        <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;"
                            role="progressbar">
                            <span class="sr-only">90% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-34 text-black font-w600">442</h2>
                                <span>Total Penjualan</span>
                            </div>
                            <img src="{{ asset('images/walet.svg') }}" width="60" height="60" alt="">
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </div>
                    </div>
                    <div class="progress  rounded-0" style="height:4px;">
                        <div class="progress-bar rounded-0 bg-secondary progress-animated " style="width: 30%; height:4px; "
                            role="progressbar">
                            <span class="sr-only">30% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-34 text-black font-w600">25</h2>
                                <span>Cabang</span>
                            </div>
                            <img src="{{ asset('images/map.svg') }}" width="60" height="60" alt="">
                            <clipPath id="clip0">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </div>
                    </div>
                    <div class="progress  rounded-0" style="height:4px;">
                        <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 94%; height:4px;"
                            role="progressbar">
                            <span class="sr-only">94% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body p-4">
                <div class="bootstrap-carousel">
                    <div data-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#carouselExampleCaptions">
                            </li>
                            <li data-slide-to="1" data-target="#carouselExampleCaptions" class=""></li>
                            <li data-slide-to="2" data-target="#carouselExampleCaptions" class=""></li>
                            <li data-slide-to="3" data-target="#carouselExampleCaptions" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('images/kallaevent1.webp') }}" alt="">
                                {{-- <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                          </div> --}}
                            </div>
                            <div class="carousel-item">
                                <img alt="" class="d-block w-100" src="{{ asset('images/kallacare.webp') }}">
                            </div>
                            <div class="carousel-item">
                                <img alt="" class="d-block w-100" src="{{ asset('images/kallaforlife.webp') }}">
                            </div>
                            <div class="carousel-item">
                                <img alt="" class="d-block w-100" src="{{ asset('images/kallasosmed.webp') }}">
                            </div>
                        </div><a data-slide="prev" href="#carouselExampleCaptions" class="carousel-control-prev"><span
                                class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span>
                        </a><a data-slide="next" href="#carouselExampleCaptions" class="carousel-control-next"><span
                                class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
      <div class="col-xl-6">
        <div class="row">
          <div class="col-xl-12">	
            <div class="card">
              <div class="card-header d-sm-flex d-block pb-0 border-0">
                <div class="mr-auto pr-3">
                  <h4 class="text-black fs-20 mb-0">Customers Percentage</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="Daily" role="tabpanel">
                    <div class="d-flex flex-wrap align-items-center px-4 bg-light">
                      <div class="mr-auto d-flex align-items-center py-3">
                        <span class="heart-ai bg-primary mr-3">
                          <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </span>
                        <div>
                          <p class="fs-18 mb-2">Total Patient</p>
                          <span class="fs-26 text-primary font-w600">562,084</span>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-xl-6 col-xxl-12 col-md-6">
                        <canvas id="myChart"></canvas>
                      </div>
                      <div class="col-xl-6 col-xxl-12 col-md-6">
                        <div class="d-flex mb-4 mt-4 align-items-center">
                          <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                            <svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect width="7.65957" height="30" fill="#BDA25C"/>
                            </svg>
                            64%
                          </span>
                          <span>New Patient</span>
                        </div>
                        <div class="d-flex  mb-4 align-items-center">
                          <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                            <svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect width="7.65957" height="30" fill="#209F84"/>
                            </svg>
                            73%
                          </span>
                          <span>Recovered</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                            <svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect width="7.65957" height="30" fill="#323232"/>
                            </svg>
                            48%
                          </span>
                          <span>In Treatment</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="row">
          <div class="col-xl-12">	
            <div class="card appointment-schedule">
              <div class="card-header pb-0 border-0">
                <h3 class="fs-20 text-black mb-0">Appointment Schedule</h3>
                <div class="dropdown ml-auto">
                  <div class="btn-link p-2 bg-light" data-toggle="dropdown">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item text-black" href="javascript:;">Info</a>
                    <a class="dropdown-item text-black" href="javascript:;">Details</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-6 col-xxl-12 col-md-6">	
                    <div class="card">
                      <div class="d-flex flex-wrap align-items-center px-4 bg-light">
                        <div class="mr-auto d-flex align-items-center py-3">
                          <span class="heart-ai bg-primary mr-3">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                          </span>
                          <div>
                            <p class="fs-18 mb-2">Total Patient</p>
                            <span class="fs-26 text-primary font-w600">562,084</span>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pb-0">
                        <div id="lineChart"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-xxl-12 col-md-6">
                  <div class="d-flex mb-4 align-items-center">
                    <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                      <svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="7.65957" height="30" fill="#BDA25C"/>
                      </svg>
                      64%
                    </span>
                    <span>New Patient</span>
                  </div>
                  <div class="d-flex  mb-4 align-items-center">
                    <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                      <svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="7.65957" height="30" fill="#209F84"/>
                      </svg>
                      73%
                    </span>
                    <span>Recovered</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                      <svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="7.65957" height="30" fill="#323232"/>
                      </svg>
                      48%
                    </span>
                    <span>In Treatment</span>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    


    <div class="container-fluid">
        <div class="page-titles">
            <h4>Customers</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Sales</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Nonaktif Customers</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    <div class="input-group search-area d-lg-inline-flex d-none">
                      <input type="text" class="form-control" name="search" id="search" placeholder="Search Data" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                        class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </div>
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-responsive-xxl">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Sub District</th>
                                    <th>Distirct</th>
                                    <th>City</th>
                                    <th>Provinsi</th>
                                    <th>No Hp</th>
                                    <th>KTP</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noncustomers as $customer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer->nama }}</td>
                                        <td>{{ $customer->gender }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>{{ $customer->subdistrict }}</td>
                                        <td>{{ $customer->district }}</td>
                                        <td>{{ $customer->city }}</td>
                                        <td>{{ $customer->provinsi }}</td>
                                        <td>{{ $customer->hp }}</td>
                                        <td>{{ $customer->ktp }}</td>
                                        <td><span class="badge light badge-success">Successful</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
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




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
      ];
    
      const data = {
        labels: labels,
        datasets: [{
          label : "testing",
          backgroundColor: 'rgb(11, 102, 35)',
          borderColor: 'rgb(11, 102, 35)',
          data: [0, 10, 5, 2, 20, 30, 45],
        }]
      };
    
      const config = {
        type: 'line',
        data: data,
        
        options: {}
      };
    </script>
    <script>
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>    
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var SITEURL = "{{ url('/table-datatable-basic') }}";
            var calendar = new FullCalendar.Calendar(calendarEl, {
                navLinks: true,
                editable: true,
                selectable: true,
                selectHelper: true,
                String,
                default: 'default',

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
              ?> {
                        title: '<?php echo $d['title']; ?>', //menampilkan title dari tabel
                        start: '<?php echo $d['start']; ?>', //menampilkan tgl mulai dari tabel
                        end: '<?php echo $d['end']; ?>' //menampilkan tgl selesai dari tabel
                    },
                    <?php } ?>

                ],
                selectOverlap: function(event) {
                    return event.rendering === 'background';
                }
            });


            calendar.render();
        });
    </script>
@endsection
